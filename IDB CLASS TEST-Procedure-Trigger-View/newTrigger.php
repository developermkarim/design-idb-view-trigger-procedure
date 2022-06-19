<?php include("database.php");
if (isset($_POST['btn'])){
    $selectId = $_POST['manid'];
    $deletery = $db->query("delete from manufacture where id =$selectId");
    if ($deletery) {
        echo "data deleted by trigger";
    }else {
        echo  "trigger does not work";
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
</head>
<body>
    <form action="" method="post">
        <select name="manid" id="">
<?php 
$selectery  = $db->query("select * from manufacture");
while ($row = $selectery->fetch_assoc()){
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['catagory_name'] ?>
<select name="nested" id="">
<?php 
$nselectery  = $db->query("select * from product");
while ($nrow = $nselectery->fetch_assoc()){
?>
<option><?php echo $nrow['product_name'] ?></option>
<?php } ?>
</select>
</option>
<?php } ?>


        </select>
        <input type="submit" value="Create Trigger" name="btn">
    </form>
</body>
</html>