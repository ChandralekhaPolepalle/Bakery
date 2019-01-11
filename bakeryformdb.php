<?php
	$conn=mysqli_connect("localhost","root","","bakery");
	
	if(!$conn)
	{
		die("Error!".mysqli_connect_error());
	}
	//echo "Success";
	
	if(isset($_POST['btninsert']))
	{
		$redirect_page='http://localhost/php/core/redi.php';

		$flag=1;
		$fname=$_POST['fullname'];
		$iname=$_POST['itemname'];
		$qua=$_POST['quantity'];
		$pno=$_POST['phno'];
		$mail=$_POST['email'];
		if(strpos($mail,'@')==false)
		{
				echo "Email is not valid";
				$flag=0;
		}
		if($flag==1)
		{
			$sql=mysqli_query($conn,"INSERT INTO bakery(Fullname,Itemname,Quantity,Phno,Email) VALUES('$fname','$iname','$qua','$pno','$mail')");
			
			if(mail($_POST['email'],"Reg:Order","Thank You.Have a nice day with our delightful dish!!! Yummy:)"))
			{
				echo "Mail sent";
			}
			else
			{
				echo "failed";
			}
			if(!$sql)
			{
				echo "Can't not insert data";
			}
			else
			{
				echo "Insert Success";
			}
			header('Location: '.$redirect_page);
		}
		
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Order</title>
  </head>
  <body>
	<div class="container">
	  <div class="row">
		<form method="post">
			<table>
				<tr>
					<td>
					<div class="form-group">
						<label for="exampleFullname">FullName</label>
						<input type="text" class="form-control" name="fullname" id="exampleFullname" placeholder="FullName">
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="form-group">
						<label>Itemname</label>
						<select class="custom-select" name="itemname">
						<option selected>Select what you wish to eat</option>
						<option value="Caramel Treat">Caramel Treat</option>
						<option value="Banana Pie">Banana Pie</option>
						<option value="Caramel Apple">Caramel Apple</option>
						<option value="Haloween Cup cake">Haloween Cup cake</option>
						<option value="Choco chip Cupcake">Choco chip Cupcake</option>
						<option value="Vanilla Cupcake">Vanilla Cupcake</option>
						<option value="Black Forest">Black Forest</option>
						<option value="Pineapple Cake">Pineapple Cake</option>
						<option value="Red Velvet Cake">Red Velvet Cake</option>
						</select>
					</div>
					</td>
					<td>
					<div class="form-group">
						<label for="exampleFullname">Quantity</label>
						<input type="text" class="form-control" name="quantity" id="exampleQuantity" placeholder="Enter quantity">
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="form-group">
						<label for="exampleFullname">Mobile</label>
						<input type="text" class="form-control" name="phno" id="examplephno" placeholder="Phone number">
					</div>
					</td>
				</tr>
					<tr>
					<td>
					<div class="form-group">
						<label for="exampleemail">Email</label>
						<input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Email">
					</div>
					</td>
					<td></td>
				</tr>
				<td><input type="submit" class=btn btn-primary" name="btninsert" value="Order Now"></td>
				
			</table>	
		</form>
	  </div>
	</div>