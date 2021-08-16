<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
               <div id="marginNote">
           
              <table align="center">
             
               <tr><td align=center><a href="index.html">Home</a> </td></tr>
			   <tr><td align=center><a href="add.php">Add plant</a></td></tr>   
               <tr><td align=center><a href="search.php">Search plant</a></td></tr>
               <tr><td align=center> <a href="contectus.php">Contect Us</a></td></tr>
			   <tr><td align=center><a href="about.html">About</a></td></tr>
             
             </table>
             </div> 
			 <nav>
             <div id="content">
             <h4>
				We are plesed to hear from you, shear with us you opinion about our plant website:
             </h4>
             <form action = "<?php $_PHP_SELF ?>" method="post">
             <table width="800" border="0">
                 <tr>
                   <td width="122" height="42">E-Mail</td>
                   <td width="511"><input name="email" type="text" size="50" /></td>
                 </tr>
                 <tr>
                   <td>Comment</td>
				   <td><textarea name="comment"  rows="4" cols="50" ></textarea></td>
                 </tr>
                 <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />  <input  type="reset"   value="Reset"/></td>
                 </tr>
               </table>
              </form>
			<h4>
		  <ul>
          <li>Email : plant@example.com</li>
          <li>Instegram: @Plant_11</li>
          <li>Twitter: @Plant_11</li>
          </ul>
		  </h4>
      </nav>
        
			<?php
			
			$mysqli=mysqli_connect("localhost","root","","project");
			if (mysqli_connect_errno()) 
			{
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
			}
			else {
					if(isset($_POST['email']))
					{
						$email=$_POST['email'];
						$comment=$_POST['comment'];
						

						$sql = "INSERT INTO comment  values('$email','$comment')";
						
						$res = mysqli_query($mysqli, $sql);
						if ($res === TRUE) 
						{
							echo "your comments are send. ";
						}
						else 
						{ 
							 printf("Could not insert your comment: %s\n", mysqli_error($mysqli)); 
						}
				 }
				mysqli_close($mysqli);
			}
		
		?>
       
		 </div>  
		
	  </script>  	

</body>
</html>
