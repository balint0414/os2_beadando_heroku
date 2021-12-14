<?php
$mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));

$szerzodes="";
$munkahelyid="";

if(isset($_POST['save'])){
    $szerzodes=$_POST['szerzodes'];
    $munkahelyid=$_POST['munkahelyid'];
    
    $mysqli->query("INSERT INTO szerzodes (szerzodes, munkahelyid) VALUES ('$szerzodes', '$munkahelyid')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $szerzodes=$_GET['delete'];
    $mysqli->query("DELETE FROM szerzodes WHERE szerzodes=$szerzodes") or die($mysqli->error());
}

if(isset($_GET['edit'])){
    $szerzodes = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM szerzodes WHERE szerzodes=$szerzodes") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $szerzodes = $row['szerzodes'];
        $munkahelyid = $row['munkahelyid'];
    }
}
