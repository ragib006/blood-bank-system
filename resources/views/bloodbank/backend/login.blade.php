


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	
	
	<style>

   
   
	</style>
</head>
<body>


<div class="login" style="width:20%;margin:10px auto;margin-top:200px">

   <center>
   <h2>Login</h2>
   </center>

   <form role="form" method="post" action="{{url('/admin-login-from-action')}}">

                                   {{ csrf_field() }}
	<input type="email" placeholder="Enter Email" name="admin_email" style="width:300px;padding:7px 7px 7px 7px;margin-bottom:10px">
   
   	<input type="password" placeholder="Enter Password" name="admin_password" style="width:300px;padding:7px 7px 7px 7px;margin-bottom:10px">

   	<button  type="submit" style="background:green;padding:5px 7px 5px 7px">Login</button>

   </form>

</div>



			 	
</body>
</html>