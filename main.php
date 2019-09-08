 
<?php

if(isset($_POST['submit'])){

    if (isset($_POST['name']) && isset($_POST['email']))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];
}
else {
   echo $error_message = $_POST['error_message'];
}

}
?>