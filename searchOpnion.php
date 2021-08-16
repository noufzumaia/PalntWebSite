
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>	
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php session_start();?>
         <div id="header">
           
              <table align="center">
              <tr>
                  <td width="13%" align=center><a href="index.html"> Home  </a> </td>
                 <td width="16%" align=center><a href="Add.php">  Add Product  </a></td>
                 <td width="19%" align=center><a href="Search.php">Product Search  </a></td>
				 <td width="12%" align=center> <a href="Opnion.php"> Opnion  </a></td>
				 <td width="19%" align=center><a href="SearchOpnion.php"> Opnion Search </a></td>
				 <td width="16%" align=center><a href="about.html"> About</a></td>
              </tr>
              </table>
             
             </div>
	     
             <div id="content">
             <h2>
             Write email to search:
              </h2>
			  
			 				 
              <form action = "<?php $_PHP_SELF ?>"  method="post" >
               <table width="558" border="0">
                 <tr>
                   <td width="82">E-mail</td>
                   <td width="466"><input name="email" type="text" size="50"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />
                   <input  type="reset"   value="Reset"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>
                   </td>
                   </tr>
                   </table>
                   </form>
                   <br/>
                  
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
						$sql="select * from comment where email='$email'";
						$res=mysqli_query($mysqli,$sql);
					    if(mysqli_num_rows($res)>0)
						{

							?>
								 <table border="1"  style="border-collapse:collapse;">
							     <tr><td width='500'>Comment</td></tr>
								
								<?php		
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
								{
								  echo   "<tr><td width='500' style='vertical-align: top;'>".$newArray['comment']."</td></tr>";
					             
							      
							   }
						       echo "</table>";
		               }
				     else
						 printf("Could not retrieve any comments form this email : %s\n",mysqli_error($mysqli));
				   }
				mysqli_close($mysqli);
			}
		
			?>
          
         
             </div>


</body>
</html>
