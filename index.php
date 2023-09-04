<?php

include 'conn.php';
if(isset($_POST['done'])){
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['message'];
    
    if($fname !="" && $phone !="" && $email !="" && $subject !="" && $msg !="" ){

       $q=" INSERT INTO `contact_form` ( `fname`, `phone`, `email`, `subject`, `message`) VALUES ( '$fname', '$phone', '$email', '$subject', '$msg')";
    $query=mysqli_query($con,$q);
     if($query){
        echo "data inserted";
     }else{
        echo "data not inserted";
     }
   }else{
    echo "please insert the details";
   }

}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label> firstname</label><br/>
        <input type="text" name="fname"><br/>
        <label> phone</label><br/>
        <input type="tel" name="phone" ><br/>
        <label> email</label><br/>
        <input type="text" name="email"><br/>
        <label> subject</label><br/>
        <select name="subject">
            <option value=""> select</option>
            <option value="math">math</option>
            <option value="english"> english</option>
            <option value="bengali"> bengali</option>
             
        </select><br/>
        <label> message</label><br/>
        <input type="text" name="message"><br/>
        <button type="submit" name="done">submit</button>
    </form>
</body>
</html>