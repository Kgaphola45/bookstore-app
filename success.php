<?php include 'inc/header.php'; ?>
<?php 
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location:login.php");
}
 ?>
<style type="text/css">
.psuccess{width: 500px; min-height: 200px; text-align: center; border: 1px solid #ddd; margin: 0 auto; padding:50px;}	
.psuccess h2{border-bottom: 1px solid #ddd; margin-bottom: 20px; padding-bottom: 10px;}	
.psuccess p{line-height:25px; font-size:18px; text-align: left; }
 </style>
<div class="main">
	<div class="content">
		<div class="section group">
		<div class="psuccess">
			<h2>Success</h2>		
			<p>
Thank you for your recent purchase. We are delighted to inform you that your order has been successfully received and processed. Our team will be reaching out to you shortly with the relevant delivery information. For a detailed overview of your order, please click on the following link:....<a href="orderdetails.php">Visit Here....</a></p>
			<p><a href="index.php">Go to Homepage</a></p>	
		</div>
					
		</div>
	</div>
<?php include 'inc/footer.php'; ?>
