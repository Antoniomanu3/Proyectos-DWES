<?php
include_once "Usuario.php";


  /*$user->id 
    $user->first_name
    $user->email
    $user->gender
    $user->ip_address
    $user->telefono */


function accionBorrar ($id){    
    $db = AccesoDatos::getModelo();
    $tuser = $db->borrarUsuario($id);
}

function accionTerminar(){
    AccesoDatos::closeModelo();
    session_destroy();
}
 
function accionAlta(){
    $user = new Usuario();
    $user->id ="";
    $user->first_name ="";
    $user->email ="";
    $user->gender =""; 
    $user->ip_address ="";
    $user->telefono  ="";
    $orden= "Cliente Nuevo";
    include_once "layout/formulario.php";
}

function accionDetalles($id){
    $db = AccesoDatos::getModelo();
    $user = $db->getUsuario($id);
    $orden = "Detalles";
    include_once "layout/formulario.php";
}


function accionModificar($id){
    $db = AccesoDatos::getModelo();
    $user = $db->getUsuario($id);
    $orden="Modificar";
    include_once "layout/formulario.php";
}

function accionPostAlta(){
    limpiarArrayEntrada($_POST); //Evito la posible inyección de código
    $user = new Usuario();
    $user->id = $_POST[ 'id'];
    $user->first_name = $_POST['first_name'];
    $user->email = $_POST['email'];
    $user->gender = $_POST['gender'];
    $user->ip_address = $_POST['ip_address'];
    $user->telefono = $_POST['telefono'];
    $db = AccesoDatos::getModelo();
    $db->addUsuario($user);
    
}

function accionPostModificar(){
    limpiarArrayEntrada($_POST); //Evito la posible inyección de código
    $user = new Usuario();
    $user->id = $_POST['id'];
    $user->first_name = $_POST['first_name'];
    $user->email = $_POST['email'];
    $user->gender = $_POST['gender'];
    $user->ip_address = $_POST['ip_address'];
    $user->telefono = $_POST['telefono'];
    $db = AccesoDatos::getModelo();
    $db->modUsuario($user);
    
}

