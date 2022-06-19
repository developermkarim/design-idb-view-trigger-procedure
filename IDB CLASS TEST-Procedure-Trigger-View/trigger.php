<?php include("database.php");
if (isset($_POST['btn'])){
    $selectId = $_POST['manid'];
    $deletery = $db->query("delete from manufacturer where id =$selectId");
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
    <style>
        body{
           text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <select name="manid" id="">
<?php 
$selectery  = $db->query("select * from manufacturer");
while ($row = $selectery->fetch_assoc()){
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
<?php } ?>
        </select>
        <input type="submit" value="Submit" name="btn">&#160;&#160;&#160;<button><a style="text-decoration:none;" href="index.php">Go To Home</a></button>
    </form>
    <?php 

			$result = $db->query("SELECT name,price FROM product");
			while($pdRow = $result->fetch_array())
			{
				echo $pdRow[0]." ".$pdRow[1]."<br>";
			}
		?>
</body>
</html>