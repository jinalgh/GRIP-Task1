
<!DOCTYPE html>
<html>
<head>
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Banking Website</title>
	<title>Customers</title>

	<style >

		body{
			margin:0;
		}
		
		.topnav{
			overflow: hidden;
			background:  #8447e6;
			/* border-radius: 30px; */
			/* border-style: outset; */

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
		.center-text{
			text-align: center;
		}
		.transaction{
			text-decoration: none;
			padding: 10px;
			color: white;
			font-size: 20px;
			font-family: Roboto,Helvetica,Arial,sans-serif;
			color: #03a9f4;

		}
		#show{
			width: 130px;
			height: 30px;
			border: none;
			background: transparent;
			font-size: 20px;
			font-family: Roboto,Helvetica,Arial,sans-serif;
			color: #03a9f4;

		}
		dialog{
			width: 40%;
			height: 30%;
			background-color: pink;
			outline: none;
		}
		#entername,#enteramount{
			font-size: 15px;
			width: 40%;
			height: 30%;
			border: none;
			border-bottom: 1px solid;
			background: transparent;
			margin-top: 40px;
			outline: none;
			
		}
		#close,#sendmoney{
			font-size: 14px;
			outline: none;
			border: none;
			width: 110px;
			height: 35px;
			margin-top: 40px;
			margin-right: 20px;
			float: right;
			background: black;
			color: white;

		}
		
		p {
 			border: 3px solid #74ecf2;
  			outline: #1d1a7a solid 10px;
  			margin: auto;
			width: 300px;  
  			padding: 80px;
  			text-align: center;
		  }

		  footer{
			margin-top: 80px;
			text-align: center;
			position: relative;
			left: 0;
			bottom: 0;
			width: 95.3%;
			padding: 10px 30px;
			background: #8447e6;
			color: white;
		}

		#icons{
			padding-left: 10px;
			padding-right: 20px;
			font-size: 25px;
			color: white;
		}
		
		
		
		
	</style>
</head>
<body>


	<!-- header starts here -->
	<div class="topnav">
		<a href="#" id="first"><b>BANKING SYSTEM</b></a>
		<a href="./main.php"><i class="fa fa-fw fa-home"></i>Home</a>
		
	</div>
	<!-- header ends here -->


	<div class="center-text">

<br><br><br><br>
		
		<p><a href="sendmoney.php"><button class="btn" id="show">Send Money</button></a>
<br><br><br>
		<a href="transmoney.php" class="transaction">See All Transactions</a>
	</p>
		
	</div>

	<!-- footer starts here -->
	<div class="footer">
		<footer>
			<h3>This Project is made by Jinal Harisinghani at GRIP</h3>
			<a href="https://www.linkedin.com/in/jinal-harisinghani-68998b192/" class="fa fa-linkedin" id="icons"></a>
			<a href="#" class="fa fa-github" id="icons"></a>
		</footer>
		
	</div>
	<!-- footer ends here -->


</body>
</html>