
<div class="container">
   <div class="col-md-3 pull-right" style="border:1px solid #ccc; margin:10px; padding-right:0px; padding-left:0px;">
	<div class="text-center" style="background:#06f; padding:10px; ">
	<label  style="color:#fff; font-size:18px;">LOGIN</label>
	</div>
	<div class="col-md-12" style="padding:20px;">
		<form  style="text-aline:center" name="login-form" id="login-form" method="post" >
			 <div class="form-group">
			 <label for="exampleInputEmail3">Email address</label>
			 <input  type="email" class="form-control" onblur="emailvalidation()" id="txtEmail"  placeholder="Username or E-mail" >
			 <label  class="fname-error error" id="em">Please provide a valid email address</label>	
		 </div>
		 <div class="form-group">
			 <label for="exampleInputPassword3">Password</label>
			  <input  type="password" id="pass" onblur="emailvalidation()"  class="form-control"  placeholder="Password">
			  <label class="fname-error error" id="em1">password must be six letters,atleast 1 special charecter and 1 number</label>	
		 </div>
		  <div class="form-group checkbox">
					<label><input type="checkbox"> Remember me </label>
		 </div>
		 <div class="form-group button text-center">
		 	<a onclick="return  emailvalidation();" href="dashboard"  class="btn btn-warning btn-block" role="button" >Login</a>
			
		 </div>
		 <div class="text-center">	
			<label>
			 <a href="chaitu.html"> Forgot Password</a>
			 </label>
		 </div>
		</form>
   </div>
</div>
</div>
		