<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost','root','','itec');
if(!$db){
    echo 'failed to connect';
}
else{
    if(isset($_POST['submit'])){
        $firstname = ($_POST['fname']);
        $lastname = ($_POST['lname']);
        $email = ($_POST['email']);
        $message=($_POST['message']);
        $date=($_POST['date']);
        // insert the records
        $enter = "INSERT INTO usermessages(fname,lname,email,message,date)
        VALUES('$firstname','$lastname','$email','$message','$date')";
        mysqli_query($db,$enter);
        header('location:contacts.php');

    }
}

?>