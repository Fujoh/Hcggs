<?php
// this program will only make sure data is given through the post 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["name"]."<br/>"; 
    echo $_POST["email"]."<br/>";
    echo $_POST["website"]."<br/>";
    echo $_POST["comment"]."<br/>";
    echo $_POST["gender"];
}
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
?>