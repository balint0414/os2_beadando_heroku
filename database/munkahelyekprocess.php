<?php
$mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));

$munkahelyid=null;
$helyszin="";

if(isset($_POST['save'])){
    $munkahelyid=$_POST['szemelyiszam'];
    $helyszin=$_POST['helyszin'];
    
    $mysqli->query("INSERT INTO dolgozo (munkahelyid, helyszin) VALUES ('$munkahelyid', '$helyszin')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $munkahelyid=$_GET['delete'];
    $mysqli->query("DELETE FROM munkahelyek WHERE munkahelyid=$munkahelyid") or die($mysqli->error());
}

if(isset($_GET['edit'])){
    $munkahelyid = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM munkahelyek WHERE munkahelyid=$munkahelyid") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $munkahelyid = $row['munkahelyid'];
        $helyszin = $row['helyszin'];
    }
}
