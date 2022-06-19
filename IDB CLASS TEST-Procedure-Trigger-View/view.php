<?php 
include("database.php");
if (isset($_POST['view'])) {
$db->query("CREATE or replace VIEW my_product_view AS select * from product where price>5000");
  

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

<table>
    <tr><th>ID </th>
    <th>Brand Name</th>
    <th>Price</th>
    <th>Product ID</th>
</tr>

    <?php 
    if (isset($_POST['show_view'])) {
        $viewquery = "select * from my_product_view";
        $result = $db->query($viewquery);
         while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id']."</td>"."<td>" . $row['name']."</td>"."<td>" . $row['price']."</td>"."<td>" . $row['manufacturer_id']."</td>";
            
            echo "</tr>";
       
     }
    }
    
    ?>
    </table>
    <form action="" method="POST">
        <input type="submit" value="Submit" name="show_view">&#160;&#160;&#160;<button><a style="text-decoration:none;" href="index.php">Go To Home</a></button>
    </form>
  
</body>
</html>