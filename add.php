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
    <h1> &nbsp; &nbsp; &nbsp; Add new Plant</h1>
    <form action = "<?php $_PHP_SELF ?>" method="post" name="add" enctype="multipart/form-data"onsubmit="return (check());">
    <table width="800" border="0">
    <tr>
    <td>Name of plant</td>
    <td><input name="plantname" type="text" size="50"  id="plantname"/></td></tr> <tr>
    <td>Description</td>
    <td><textarea name="description" type="text" rows="10"  cols="50"  id="description"/></textarea></td></tr>
    <tr><td width="22" height="42">Photo</td>
    <td width="500"><input type="file" name="photo" id="photo"></td></tr>
     <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />
                   <input  type="reset"   value="Reset"/></td>
                   </tr>
                </table>
                </form>
			<?php	
			$mysqli=mysqli_connect("localhost","root","","project");
			if (mysqli_connect_errno()) 
			{
						printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			else {
					if(isset($_POST['plantname']))
					{
						$plantname=$_POST['plantname'];
						$description=$_POST['description'];
						
						$photo=$_FILES['photo']['name'];
						$sql = "INSERT INTO plantname  values('$plantname','$description','$photo')";
						$res = mysqli_query($mysqli, $sql);
						if ($res === TRUE) 
						{
							echo "A new Plant has been Added. ";
						}
						else 
						{ 
							 printf("Could not Add plant: %s\n", mysqli_error($mysqli)); 
						}
				 }
			 	mysqli_close($mysqli);
			    }
		?>  
		 </nav>  
		 
        <script type="text/javascript">
          function check(){
		      var plantname = document.add.plantname.value;
		      if (plantname=="") 
		      {
			     window.alert("write Plant Name");
			     document.add.plantname.focus() ;
			     return false;
		      }
		   return( true );
	    }
	  </script>  	

</body>
</html>
