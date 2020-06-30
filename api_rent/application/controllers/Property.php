<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property extends CI_Controller
{

    public function index()
    {
        echo "Welcome";
    }

    public function addOwner()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST') {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            $pattern = "([¡@#$%&¿?!]+)";
            $pattern_pass = "([¡@#$%&¿?!*]{2})";

            if (preg_match($pattern, $data->name) or strlen($data->name) > 40) {
                $response = array("Status" => False, 'Data' => [], 'Error' => 'Error in the field name');
                echo json_encode($response);
            } else {
                if (preg_match($pattern, $data->lastname) or strlen($data->lastname) > 40) {
                    $response = array("Status" => False, 'Data' => [],'Error' => 'Error in the field lastname');
                    echo json_encode($response);
                } else {
                    if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
                        $response = array("Status" => False, 'Data' => [],'Error' => 'Error in the field email');
                        echo json_encode($response);
                    } else {
                        if ($data->type_id != "CC" && $data->type_id != "Pas") {
                            $response = array("Status" => False, 'Data' => [],'Error' => 'Error in the field Type_Id');
                            echo json_encode($response);
                        } else {
                            if ($data->type_id === "CC" && !is_numeric($data->identification)) {
                                $response = array("Status" => False, 'Data' => [],'Error' => 'The value must be numeric for its identification type CC');
                                echo json_encode($response);
                            } else {
                                if ($data->type_id === "Pas" && strlen($data->identification) > 10) {
                                    $response = array("Status" => False, 'Data' => [],'Error' => 'The value must be less than 10 characters for passport');
                                    echo json_encode($response);
                                } else {
                                    if (strlen($data->password) < 8 or strlen($data->password) > 16 or !preg_match($pattern_pass, $data->password)) {
                                        $response = array("Status" => False, 'Data' => [],'Error' => 'The password field must be between 8 and 16 characters and at least 2 special characters');
                                        echo json_encode($response);
                                    } else {
                                        if (empty($data->name && $data->lastname && $data->email && $data->type_id && $data->identification && $data->password)) {
                                            $response = array("Status" => False, 'Data' => [],'Error' => 'There are empty fields !!');
                                            echo json_encode($response);
                                        } else {
                                            $this->Propiety_Model->addOwner($data);
                                            header('content-type: aplication/json');
                                            $response = array("Status" => False, 'Data' => [],'Error' => 'The person was successfully added');
                                            echo json_encode($response);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            header('content-type: aplication/json');
            $response = array('response' => 'Fatal Error!!');
            echo json_encode($response);
        }
    }

    public function getOwner(){
        
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') 
        {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            if($this->Propiety_Model->getOwner($data)){    
            $response = array("Status" => True, 'Data' => []);
            header('content-type: aplication/json');
            echo json_encode($response);
            }
            else{
                header('content-type: aplication/json');
                $response = array("Status" => False, 'Data' => [], 'Error' => "Username doesn't exist" );   
                echo json_encode($response);
            }
        }
        else
        {
            $response = array("Fatal Error!!");   
            echo json_encode($response);
        }
    }

    public function addProperty()
    {

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST') {
            $json = file_get_contents('php://input');
            $data = json_decode($json);

            if (empty($data->title && $data->type && $data->address && $data->rooms && $data->price && $data->area) XOR !is_numeric($data->rooms) OR !is_numeric($data->price) OR !is_numeric($data->area)) 
            {
                $response = array('response' => 'Could not add, invalid fields');
                echo json_encode($response);
            } else {
                $this->Propiety_Model->addProperty($data);
                header('content-type: aplication/json');
                $response = array('response' => 'Added successfully');
                echo json_encode($response);
            }
        } else {
            header('content-type: aplication/json');
            $response = array('response' => 'Fatal Error!!');
            echo json_encode($response);
        }
    }

    public function getProperties()
    {
        header("Access-Control-Allow_Origin: *");
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $products = $this->Propiety_Model->getProperties();
            header('content-type: aplication/json');
            $response = array("Status" => true, 'Data' => $products);
            echo json_encode($response);
        } else {
            header('content-type: aplication/json');
            $response = array("Status" => false, 'Data' => [], "Error" => "Could not get properties");
            echo json_encode($response);
        }
    }

    public function editProperty()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'PUT') {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            $this->Propiety_Model->editProperty($data);
            header('content-type: aplication/json');
            $response = array('response' => 'The property was edited');
            echo json_encode($response);
        } else {
            header('content-type: aplication/json');
            $response = array('response' => 'Could not edit property');
            echo json_encode($response);
        }
    }

    public function deleteProperty()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'DELETE') {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            $this->Propiety_Model->deleteProperty($data);
            header('content-type: aplication/json');
            $response = array('response' => 'The property was deleted');
            echo json_encode($response);
        } else {
            header('content-type: aplication/json');
            $response = array('response' => 'Could not remove property');
            echo json_encode($response);
        }
    }

    public function listProperties(){
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $properties = $this->Propiety_Model->listProperties();
            header('content-type: aplication/json');
            $response = array("Status" => true, 'Data' => $properties);
            echo json_encode($response);
        } else {
            header('content-type: aplication/json');
            $response = array("Status" => false, 'Data' => [], "Error" => "Could not get properties");
            echo json_encode($response);
        }
    }

    public function getSortedProperties()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {
                $properties = $this->Propiety_Model->getSortedProperties();
                header('content-type: aplication/json');
                $response = array("Status" => true, 'Data' => $properties);
                echo json_encode($response);
            }
        else{
            header('content-type: aplication/json');
            $response = array("Status" => false, 'Data' => [], "Error" => "Query failed");
            echo json_encode($response);
        } 
    
    }

    public function getSortedUserProperties()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {

            $json = file_get_contents('php://input');
            $data = json_decode($json);
            if($properties = $this->Propiety_Model->getSortedUserProperties($data))
            {
                $response = array("Status" => True, 'Data' => $properties);
                header('content-type: aplication/json');
                echo json_encode($response);
            }
            else{
                header('content-type: aplication/json');
                $response = array("Status" => false, 'Data' => [], "Error" => "No results were found");
                echo json_encode($response);
            }
        }
        else{
            $response = array("Fatal Error!!");   
            echo json_encode($response);
        } 
    
    }

        
}
