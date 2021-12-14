<?php
$mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));

$szemelyiszam="";
$dolgozonev="";

if(isset($_POST['save'])){
    $szemelyiszam=$_POST['szemelyiszam'];
    $dolgozonev=$_POST['dolgozonev'];
    
    $mysqli->query("INSERT INTO dolgozo (szemelyiszam, dolgozonev) VALUES ('$szemelyiszam', '$dolgozonev')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $szemelyiszam=$_GET['delete'];
    $mysqli->query("DELETE FROM dolgozo WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
}

if(isset($_GET['edit'])){
    $szemelyiszam = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM dolgozo WHERE szemelyiszam=$szemelyiszam") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $szemelyiszam = $row['szemelyiszam'];
        $dolgozonev = $row['dolgozonev'];
    }
}
