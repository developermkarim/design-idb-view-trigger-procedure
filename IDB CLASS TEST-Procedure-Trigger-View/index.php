<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.zigzag {
  border-collapse: separate;
  border-spacing: 0.25em 1em;
  margin: auto;
}

a{
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    display: block;
    text-align: center;
}

table {
  font-family: sans-serif;
}
table th,
table td {
  padding: 0.25em 0.5em;
  text-align: left;
}
table th:nth-child(2),
table td:nth-child(2) {
  text-align: right;
}
table td {
  background-color: #eee;
}
table th {
  background-color: #009;
  color: #fff;
}
td:hover { background-color: #009;
    
}
td:hover a{
    color: #fff;
}


    </style>
</head>
<body>
  
<table class="zigzag">
  <thead>
    <tr>
      <th class="header">Store Procedure</th>
      <th class="header">View Table Data</th>
      <th class="header">Trigger Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                <td><a href="procedure.php">Procedure</a></td>
                <td><a href="view.php">View Data</a></td>
                <td><a href="trigger.php">Trigger Data</a></td>
    </tr>
    
  </tbody>
</table>
</body>
</html>