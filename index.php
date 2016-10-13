<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP for a Job Application</title>
        <script language="JavaScript">
		function validate(form)
		 {
                   
                   var x=form.email.value.indexOf('@');
                   var y=form.email.value.lastIndexOf('.');
		   if(form.fname.value==="")
		     {
                         alert("Missing your name information! Check your input!");
                         form.fname.focus();}
                   else if(form.email.value==="")
                       {
                         alert("Missing email information! Check your input!");
                         form.email.focus();
                       }
                   // simple email validation
                   else if(x===-1 || y===-1 || (x+2)>=y)
                       {
                         alert("Invalid email information! Check your input!");
                         form.email.focus();
                       }
                  
                   else
                       form.submit();
		}
	</script>
    </head>
    <body>
                
        <h1>Enter your information</h1>
        <form action="check.php" method="post">
            <label>First and last name</label>
            <input type="text" name="fname"><br/><p></p>
            <labe>Email address</label>
            <input type="text" name="email"><br/><p></p>
            <input type="button" value="Submit" onClick="validate(this.form)">
        </form>
    </body>
</html>
