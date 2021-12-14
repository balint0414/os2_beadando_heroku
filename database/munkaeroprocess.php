<?php
$mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));

$szemelyiszam="";
$szerzodes="";
$oraszam=null;
$vneve="";

if(isset($_POST['save'])){
    $szemelyiszam=$_POST['szemelyiszam'];
    $szerzodes=$_POST['szerzodes'];
    $oraszam=$_POST['oraszam'];
    $vneve=$_POST['vneve'];
    
    $mysqli->query("INSERT INTO munkaero (szemelyiszam, szerzodes, oraszam, vneve) VALUES ('$szemelyiszam', '$szerzodes', '$oraszam', '$vneve')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $szemelyiszam=$_GET['delete'];
    $mysqli->query("DELETE FROM munkaero WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
}

if(isset($_GET['edit'])){
    $szemelyiszam = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM munkaero WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $szemelyiszam = $row['szemelyiszam'];
        $szerzodes = $row['szerzodes'];
        $oraszam = $row['oraszam'];
        $vneve = $row['vneve'];
    }
}
