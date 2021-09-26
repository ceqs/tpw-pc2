<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("127.0.0.1", "root", "root", "utpnotas");
    return $conn; 
}

function validarUsuario($usu,$pas,$conn){
    $sql="select * from users where username='$usu' and password='$pas'";
    $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $can=mysqli_num_rows($res);
    return $can;
}
//Agregar usuario
function agregarUser($user, $pass, $fullname, $email,$foto, $conn){
    $sql="insert into users values('$user','$pass','$fullname','$email','$foto')";   
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

function eliminarUsuario($user, $conn){
    $sql="delete from users where username='$user'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function cambiarFoto($user, $foto,$conn){
    $sql="update users set fotuser='$foto' where username='$user'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}



//tabla producto
//método para agreegar registros
function agregarProducto($cod,$nom,$pre,$can,$fot,$tip, $conn){
    $sql="insert into producto values('$cod','$nom','$pre','$can','$fot','$tip')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para eliminar registros
function eliminarProducto($cod, $conn){
    $sql="delete from producto where codpro='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar todos los campos de la tabla
function actualizarTodoProducto($cod,$nom,$pre,$can,$fot,$tip, $conn){
    $sql="update producto set nompro='$nom', prepro='$pre', canpro='$can', fotpro='$fot', codtip='$tip' where codpro='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar registros sin foto
function actualizarProducto($cod,$nom,$pre,$can,$tip, $conn){
    $sql="update producto set nompro='$nom', prepro='$pre', canpro='$can', codtip='$tip' where codpro='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para buscar registro
function buscarProducto(string $cod,$conn){
    $sql="select nompro, prepro, canpro, fotpro, codtip from producto where codpro='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarProducto($conn){
    $sql="select codpro, nompro, prepro, canpro, fotpro, codtip from producto"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//Tabla tipo 
//método para agreegar registros
function agregarTipo($cod,$nom, $conn){
    $sql="insert into tipo values('$cod','$nom')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para eliminar registros 
function eliminarTipo($cod, $conn){
    $sql="delete from tipo where codtip='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para actualizar registros sin foto
function actualizarTipo($cod,$nom, $conn){
    $sql="update tipo set nomtip='$nom' where codtip='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para buscar registro
function buscarTipo(string $cod,$conn){
    $sql="select nomtip from tipo where codtip='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarTipo($conn){
    $sql="select codtip, nomtip from tipo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

// ceqs: funcion que lista las notas
function listarNotas($conn) {
    $sql="select id, username, title, text, create_date from notes";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))
        $vec[]=$f;
    return $vec;
}

?>
