<?php 
include("database.php");
if (isset($_POST['btn'])) {
   $name = $_POST['name'];
   $address = $_POST['address'];
   $contact = $_POST['contact'];
    $procedure = $db->query("call final_manufacture_procedure('$name','$address','$contact')");
    if ($procedure) {
        echo "data inserted by procedure";
    }else {
        echo  "procedure does not work";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Name" name="name"> <br>
        <input type="text" placeholder="address" name="address"> <br>
        <input type="text" placeholder="contact" name="contact"> <br>
        <input type="submit" value="Submit" name="btn">&#160;&#160;&#160;<button><a style="text-decoration:none;" href="index.php">Go To Home</a></button>
    </form>
</body>
</html>