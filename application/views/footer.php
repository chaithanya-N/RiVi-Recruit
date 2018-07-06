<footer>	
       <div class="text-center" style="padding:15px;">
       	<p>
       		<img src="Assets/images/logo.png" width="7%;"><br>
       		GLOBAL DEVELOPMENT CENTER INDIA <br/>
			RiVi Consulting Group L.L.C  
			Plot No. 550-B, 1st Floor, Anitha Square  
			Road No. 92, Jubilee Hills,<br/>
			Hyderabad, Telangana – 500033, India<br/>
       	</p>
 		</div>
					
</footer>
 				

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Assets/js/bootstrap.min.js"></script>
	
	<script>
	document.getElementById("em").style.display="none";
	document.getElementById("em1").style.display="none";
	


	function validation()
	{
	var email = document.getElementById("txtEmail");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var password=document.getElementById('pass').value;
	
	if( password)

      {
	  var filter1 = /[a-zA-Z]/g;
          var filter2 = /[@$,<>#:?_*&;]/g;
          var filter3 = /[0-9]/g;	
	
         
         if (password.match(filter1) &&password.match(filter2) &&password.match(filter1) &&password.match(filter3)) {
        //alert("valid");

    } 
        else
        {
           // alert("invalid");
			 document.getElementById("em1").style.display="block";
			 document.getElementById("pass").style.border="1px solid red";
			 
			return false;
        }
		
		 if(password.length<6)
  {//alert("password must be six letters");
    document.getElementById("em1").style.display="block";
	
	
  return false;
  }
      }

	
    if (!filter.test(email.value) || password.length<6) 
	{
     email.focus;
	document.getElementById("em").style.display="block";
	document.getElementById("em1").style.display="block";
	return false;
	} 
	else 
	{
		document.getElementById("em").style.display="none";	
        document.getElementById("em1").style.display="none";
    }
	
  
}
	
	
	// onblur event
	function emailvalidation(){
	var email = document.getElementById("txtEmail").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 var password=document.getElementById('pass').value;

	
    if (!filter.test(email)) {
    email.focus;
	document.getElementById("em").style.display="block";
    return false;
	 }
	 else
	 {
	 document.getElementById("em").style.display="none";
	 }
	
	        if(password.length<6){
		         password.focus;
	            document.getElementById("em1").style.display="block";
				document.getElementById("pass").style.border="1px solid red";
				return false;
			}
           else {
        document.getElementById("em1").style.display="none";
        document.getElementById("pass").style.border="none";
    }
}
	// function end
	</script>
  </body>
</html>