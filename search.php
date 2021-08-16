
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
         <?php session_start();?>  
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
             <h2>
             Write plant name to search:</h2>			 
              <form action = "<?php $_PHP_SELF ?>"  method="post" >
                   <table width="558" border="0">
                   <tr>
                   <td width="100">Plant Name</td>
                   <td width="400"><input name="plantname" type="text" size="50"/></td>
                   </tr>
                   <tr>
                   <td>&nbsp;</td>
                   <td><input type="submit"  value="Send"/>
                   <input type="reset" value="Reset"/></td>
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
						$sql="select * from plantname where plantname='$plantname'";
						$res=mysqli_query($mysqli,$sql);
					    if(mysqli_num_rows($res)>0)
						{

							?>
								 <table border="1"  style="border-collapse:collapse;">
							     <tr><td width="120">plant Name</td>
								 <td width='120'>Description</td><td width='120'>Photo</td></tr>
						  <?php		
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
								{
		                         echo "<tr><td width='200' style='vertical-align: top;'>
								 <a href='update.php'/>". $newArray['plantname']."  Updat Row </a></td>
										<td width='500' style='vertical-align: top;'>".$newArray['description']."</td>";
								  
					              echo   "<td width=500>";
								  echo   "<img src='images/".$newArray['photo']."' width=300 height=250></td></tr>";
								  
								  $_SESSION['plantname'] = $newArray['plantname'];
						
							      $_SESSION['description']= $newArray['description'];
							   }
						       echo "</table>";
		               }
				     else
						 printf("Could not retrieve plant : %s\n",mysqli_error($mysqli));
				   }
				mysqli_close($mysqli);
			}
		
			?>
          
            </nav>
  </div>

</body>
</html>
