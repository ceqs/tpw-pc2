<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root", "","utpnotas"); 
    return $conn; 
}

function validarUsuario($usu,$pas,$conn){
    $sql="select status from users where username='$usu' and password='$pas'";
    $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $fila = mysqli_fetch_row($res);
    return $fila[0];
}

// Users
//Agregar usuario
function agregarUser($user, $pass, $fullname, $email,$foto, $conn){
    $sql="insert into users values('$user','$pass','$fullname','$email',CURRENT_TIMESTAMP,'active','$foto')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function mostrarFoto($user,$conn){
    $sql="select * from users where username='$user'"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function desactivarUsuario($user, $conn){
    $sql="update users set status = 'Disabled' where username='$user'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function activarUsuario($user, $conn){
    $sql="update users set status = 'active' where username='$user'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
function cambiarFoto($user, $foto,$conn){
    $sql="update users set fotuser='$foto' where username='$user'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

// Notas
// ceqs: funcion que lista las notas
function listarNotas($usr, $conn) {
    $sql="select id, username, title, text, create_date from notes where username = '$usr' order by update_date desc";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))
        $vec[]=$f;
    return $vec;
}

function buscarNota($id, $conn) {
    $sql="select id, username, title, text, create_date, update_date from notes where id = '$id'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))
        $vec[]=$f;
    return $vec;
}


function agregarNota($user, $title, $text, $conn) {
    $sql="insert into notes(username, title, text) values('$user','$title','$text')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarNota($id, $title, $text, $conn){
    $sql="update notes set title='$title', text='$text', update_date=now() where id=$id;";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarNota($id, $conn){
    $sql="delete from notes where id=$id;";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

?>
