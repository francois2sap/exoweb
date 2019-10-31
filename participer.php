<?php
echo $_POST['lastname'] . "<br>";

echo $_POST['name'] . "<br>";

echo $_POST['email'] . "<br>";
if(isset($_POST['lastname']) && isset($_POST['name']) && isset($_POST['email'])) {
    $data = $_POST['email'] . ';' . $_POST['lastname'] . ';' . $_POST['name'] . "\n";
    $ret = file_put_contents('liste.txt', $data, FILE_APPEND | LOCK_EX);
}    
?>