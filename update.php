<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>	
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
	<link href="style.css" rel="stylesheet" type="text/css" />
   
</head>
<body>
         <div id="marginNote">
           
              <table align="center">
               <tr><td align=center><a href="index.html"> Home  </a> </td></tr>
                
             <tr><td  align=center><a href="add.php">Add plant</a></td></tr>  
              
             <tr> <td  align=center><a href="search.php">Search plant</a></td> </tr>
            
             <tr> <td  align=center> <a href="contectus.php">Contect Us  </a></td></tr>
		     <tr> <td  align=center><a href="about.html"> About</a></td> </tr>
              </table>
             
             </div>
	     
              <div id="content"><nav>
                 <h2>Update Plants </h2>
				 
                  
                <?php
                    if(isset($_POST['update'])=='update') {
					 
				    $mysqli=mysqli_connect("localhost","root","","project");
					if (mysqli_connect_errno()) 
					{
								printf("Connect failed: %s\n", mysqli_connect_error());
								exit();
					}
					else 
					{
						$oldplantname=$_SESSION['plantname'];
						$plantname=$_POST['plantname'];
						
						$description=$_POST['description'];
						
						$photo=$_FILES['photo']['name'];
						
                        $sql = "UPDATE plantname SET plantname = '$plantname'  
						,description='$description' , photo='$photo' WHERE plantname = '$oldplantname' " ;
                        $res = mysqli_query($mysqli, $sql);
                       
                       
                        if(! $res )
                            printf("Could not update record: %s\n", mysqli_error($mysqli)); 
						else
						{
                               echo "Updated data successfully\n";
						       header("Refresh: 3;url=search.php");
						}
                        mysqli_close($mysqli);
						
						
				   }
				}?>
				
				
				<form method = "post" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
                
                 <table width="800" border="0">
                 <tr>
                   <td width="122" height="42">Plant Name</td>
                   <td width="511"><input name="plant" id="plantname" value="<?php echo $_SESSION['plantname']; ?>" type="text" size="50" /></td>
                 </tr>
               
                 <tr>
                   <td>Description</td>
                   <td><input name="description" type="text" id="description" size="50" value="
				   <?php echo $_SESSION['description']; ?>" /></td>
                 </tr>
                 
                 <tr>
                   <td width="122" height="42">Photo</td>
                   <td width="511"><input type="file" name="photo" id="photo"></td>
                 </tr>
                 
                  <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="update" name="update" onClick="clearform()";/>  
				       <input   type="reset"   value="Reset" /></td>
                 </tr>
                 
                  </table>
                 </form> 
               </nav>
          </div>
</body>
</html>
