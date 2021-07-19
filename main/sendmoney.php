<?php
$link = mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"test1") or die(mysql_error($link));


if(isset($_POST["button1"]))
{
    if (empty($_POST['name']) || empty($_POST['T_name']) || empty($_POST['amount'])) {
  // echo "All fields are required";
    alert("all fields are required");
    return false;

//   $myname = "select name from customers where name = '".$_POST['name']."'";
//   $ress = mysqli_query($link, $myname);
//   $row = mysqli_fetch_assoc($ress);
//   $finalname = ($row['name']);


//   $custname = "select name from customers where name = '".$_POST['T_name']."'";
//   $resss = mysqli_query($link, $custname);
//   $row = mysqli_fetch_assoc($resss);
//   $finalcust = ($row['name']);


// if (($finalname==$_POST['name']) || ($finalcust==$_POST['T_name'])) {



}

else {
$value = "select curbal from customers where name = '".$_POST['T_name']."' ";
$res = mysqli_query($link, $value);
$row = mysqli_fetch_assoc($res);
$finalvalue = ($row['curbal']);



mysqli_query($link, "update customers set curbal=$finalvalue + $_POST[amount] where name ='".$_POST['T_name']."' " );


mysqli_query($link, "insert into transfer(myname, toname, transamt) values ('".$_POST['name']."','".$_POST['T_name']."',$_POST[amount])" );
}

}
?>
<!DOCTYPE>
<html>
<head>
<meta  name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Banking Website</title>
<title>Custtomers</title>
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
font-size: 40px;
}

#form{
/*display: block;*/
position: absolute;
top: 200px;
margin-left: 350px;
font-size: 20px;
}
#text1{
font-size: 20px;
margin-top: 40px;
}
p {
 			border: 3px solid #74ecf2;
  			outline: #1d1a7a solid 10px;
  			margin: auto;
			  width: 400px; 
        height: 400px;
  			padding: 80px;
  			text-align: center;
	}
</style>
</head>
<body>
<!-- header starts here -->
<div class="topnav">
<a href="#" id="first">BANKING SYSTEM</a>
<a href="./Customers.php"><i class="fa fa-fw fa-user"></i>Customers</a>
<a href="./main.php"><i class="fa fa-fw fa-home"></i>Home</a>

</div>
<!-- header ends here -->
<br><label id="trans_money"><center><u>TRANSFER MONEY</u></center></label>
<div id="form">
<form action="" method="post">
<p>
Your name:<br>
<input type="text" name="name" id="text1"><br><br>
Transfer to:<br>
<input type="text" name="T_name" id="text1"><br><br>
Enter Amount:<br>
<input type="text" name="amount" id="text1"><br>
<input type="submit" name="button1" class="btn btn-default" id="text1">
</p>
</form>
</div>

</body>
</html>
