<?php
include("Php/config.php");

?>
<!Doctype>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">

	

</head>
<body>

			<center> <h3> Quiz System</h3></center>	


			<div   class="container"> 

				<div class="row"> 
						<div class="col-3">
							 

							    <form class="d-flex" action=" " method="POST" >


      				  <input class="form-control me-1" type="text" placeholder="Type Identity" aria-label="Search" name="User_Id">
      				   <button class="btn btn-primary" name="btnView" type="submit" disabled> View </button></form>
      				    </form>
      
     				 </form>


						</div>
				</div>



				<div class="row"> 
					<div class="col">

						<table class="table">
									  <thead>
									    <tr>
									      <th scope="col">ID</th>
									      <th scope="col">Role </th>
									      <th scope="col">Name</th>
									      <th scope="col">Email</th>
									      <th scope="col">Skills</th>
									    </tr>
									  </thead>
									  <tbody>
				
											<?php

															



																	$query =" select* from questions";

																													


																	$Result = mysqli_query($connect, $query);

																	if($Result)

																	if (mysqli_num_rows($Result) > 0) {
																		// output data of each row
																		while($row = mysqli_fetch_assoc($Result)) {


																			
																			$Question_No=$row['Question_no'];
																			$Text=$row['Text'];


																			?> 

																		 <tr>

																					
																					  <td><?php echo $Question_No?></td>
																					  <td><?php echo $row['Text']?></td>
																					
																					  <td><a href="question.php?id=<?php echo $Question_No?>"> question </a> </td>																					  
																					  
																					  
																					</tr>
																			
											<?php 
																			
																		}
																	} else {
																		echo "0 results";
																	}

																	mysqli_close($connect); 
																	
																	

											?>
									  
									  
									  
									   
									    
									  </tbody>
									</table>

									</div>
									</div>

			




</div>
</body>
</html>
