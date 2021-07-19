<!DOCTYPE html>
<html>
<head>
<meta  name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Transaction history</title>
<style >
body{
margin: 0;
/*background-color: floralwhite;*/
/*background-position: 100% 0;*/
}

.topnav{
overflow: hidden;
background:  #8447e6;

}
.topnav a{
float: right;
color: white;
text-align: center;
padding: 14px 20px;
text-decoration: none;
font-size: 30px;
}
#first{
float: left;
color: #f2bfee;
}
#trans_money{
margin-left: 580px;
font-size: 30px;
}
table{
margin-top: 20px;
margin-left: 70px;
border-collapse: collapse;
width: 90%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th{
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: lightskyblue;}
</style>
</head>
<body>
<div class="topnav">
<a href="#" id="first">BANKING SYSTEM</a>
<a href="./Customers.php"><i class="fa fa-fw fa-user"></i>Customers</a>
<a href="./main.php"><i class="fa fa-fw fa-home"></i>Home</a>

</div>
<!-- header ends here -->
<label id="trans_money"><center><u>TRANSACTION HISTORY</label></center></u>
<table>
<tr>
<th>Id</th>
<th>Sender</th>
<th>Recipient</th>
<th>Amount</th>
</tr>
<?php
$link = mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"test1") or die(mysql_error($link));

$sql ="SELECT id,myname,toname,transamt from transfer";
$result =$link->query($sql);

if ($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>". $row["id"] . "</td><td>". $row["myname"] ."</td><td>". $row["toname"] . "</td><td>". $row["transamt"] ."</td></tr>";
}
echo "</table>";
}
else {
echo "0 result";
}
$link->close();
?>
</table>
</body>
</html>