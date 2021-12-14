<?php
$mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));

$szemelyiszam="";
$vneve="";

if(isset($_POST['save'])){
    $szemelyiszam=$_POST['szemelyiszam'];
    $vneve=$_POST['vneve'];
    
    $mysqli->query("INSERT INTO vegzettseg (szemelyiszam, vneve) VALUES ('$szemelyiszam', '$vneve')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $szemelyiszam=$_GET['delete'];
    $mysqli->query("DELETE FROM vegezettseg WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
}

if(isset($_GET['edit'])){
    $szemelyiszam = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM vegzettseg WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $szemelyiszam = $row['szemelyiszam'];
        $vneve = $row['vneve'];
    }
}
