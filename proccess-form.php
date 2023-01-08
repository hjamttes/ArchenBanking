<?php

$NAME = $_POST["NAME"];
$CSN = $_POST["CSN"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("Terms must be accepted");
}   

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $sql9.freesqldatabase.com,
                       username: $sql9588995,
                       password: $xGEDcmdWbC,
                       database: $sql9588995);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO message (NAME, CSN, BALANCE, ID)
        VALUES (?, ?, 0, NoID)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                       $NAME,
                       $CSN,
                       $BALANCE,
                       $ID);

mysqli_stmt_execute($stmt);

echo "Record saved.";
