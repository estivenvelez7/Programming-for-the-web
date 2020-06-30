<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciber Doc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,200;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">


    <script>
        function validar(){
  
            var name, lastname, id, date, residence,neighborhood,tel;


            name = document.getElementById("name").value;
            lastname = document.getElementById("lastname").value;
            id = document.getElementById("id").value;
            date = document.getElementById("date").value;
            residence = document.getElementById("residence").value;
            neighborhood = document.getElementById("neighborhood").value;
            tel = document.getElementById("tel").value;

            /*expresion = /\w+@\w+\.;*/

            if(name === "" || lastname ==="" || id === "" || date === "" || residence === "" || neighborhood === "" || tel ===""){
                alert("Todos los campos son obligatorios!");
                return false;
            }
            else if (name.length > 30) {
                alert("El nombre es muy largo (menor de 30 caracteres");
                return false;
             }
            else if (lastname.length > 60) {
                alert("Apellidos muy largos (menor de 60 caracteres");
                return false;
             }
            else if (id.length > 30) {
                alert("El Email es muy largo (menor de 30 caracteres");
                return false;
            }
            else if (date.length > 60) {
                alert("El tel es muy largo (menor de 15 caracteres");
                return false;
             }

            else if (residence.length > 60) {
                alert("El tel es muy largo (menor de 15 caracteres");
                return false;
             }
            else if (neighborhood.length > 60) {
                alert("El tel es muy largo (menor de 15 caracteres");
                return false;
             }

            else if (isNaN(tel)) {
                alert("El telefono ingresado no es un numero");
                return false;
            }
                    
        }
                    
     </script>


    <style>

html{
    font-family: 'Barlow Condensed', sans-serif;
}

body {
    background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
    font-weight: 500;
    font-family: 'Barlow Condensed', sans-serif;
    
}



.container {
    background-color: white;
    padding-right: 0; 
    padding-left: 0;
}



#carouselExampleSlidesOnly {
    height: 650px;
}

.carousel-item img {
    height: 650px;
}

.navbar {
    background-color:#0066ff;
}

.barra-nav {
    border-radius: 30px;
}

#navbarNav {
    margin-left: 500px;
}



.article1{
    padding: 90px;
    margin: 0,0,0,0;
}




.navbar-nav {
    margin-left: 50px;
    
}

.card-title{
    font-size: 30px;
}

.card-text {
    font-size: 20px;
}

.request {
    background-color:#0066ff;

}

.banner-main {
    height:300px; 
    width: 1300px;
    border-radius: 30px;
}
 
.contenedor1 {
    border-end-end-radius: 100px;
    border: 1px solid #0066ff;
}


.contenedor2 {
    border-radius: 100px;
    
}

.contenedor3 {
    border: 1px solid #0066ff;
}

.card-footer{
    background-color:#0066ff;
}


.card-text-footer {
    margin-top: 20px;

}
.text-muted p{
    color: white;
}

/*-------------------- Formulario-----------------------*/

.contenedor-form {
    border-radius: 50px;
    border: 2px solid #0066ff;
}

/*--------------------Sign in --------------------------*/
.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}



/*------------------footer---------------*/

.footer-container {
    background-color: #0066ff;
    color: white;
}

.footer-container a {
    color: white;
}




    </style>

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-#b366ff ">
        <div class="container barra-nav">
            <img src=" <?php echo base_url('assets/img/logo2.png') ?>"   width="250" height="130" alt="" >
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active mr-3">
                        <a href="home" class="btn btn-warning btn-lg active nav-link" role="button" aria-pressed="true">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="login" class="btn btn-warning btn-lg active nav-link" role="button" aria-pressed="true">Login</a>
                        </li>
                      
                        
                    </ul>
                </div>
                </div>
        </nav>
</header>

