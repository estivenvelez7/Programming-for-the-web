<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Propiety_Model extends CI_Model
{

    //Add new User
    public function addOwner($owner)
    {
        $this->db->insert("owner", $owner);
    }

    //User query
    public function getOwner($data)
    {
        $response = $this->db->query("SELECT * FROM owner WHERE id_owner = {$data->id}")->result();
        return $response;
    }

    //CRUD Property
    public function addProperty($estate)
    {
        $this->db->insert("estate", $estate);
    }

    public function getProperties()
    {
        $response = $this->db->query("SELECT * FROM estate")->result();
        return $response;
    }

    public function editProperty($estate)
    {
        $title = $estate->title;
        $type = $estate->type;
        $address = $estate->address;
        $rooms = $estate->rooms;
        $price = $estate->price;
        $area = $estate->area;
        $id = $estate->id;
        $response = $this->db->query("UPDATE estate SET title='${title}', type='${type}', address='${address}', rooms='${rooms}', price='${price}', area='${area}' WHERE id=${id}");
        return $response;
    }

    public function deleteProperty($id)
    {
        $response = $this->db->query("DELETE FROM estate WHERE id = {$id->id}");
        return $response;
    }

    //Endpoints listProperties, getSortedProperties y getSertedUserProperties

    public function listProperties()
    {
        $response = $this->db->query("SELECT * FROM estate")->result();
        return $response;
    }

    public function getSortedProperties(){
        $response = $this->db->query("SELECT * FROM estate ORDER BY price DESC")->result();
        return $response;
    }

    public function getSortedUserProperties($data){
    $response = $this->db->query("SELECT * FROM owner JOIN estate ON owner.id_owner = estate.id WHERE id = {$data->id}")->result();
    return $response;
    }
}
