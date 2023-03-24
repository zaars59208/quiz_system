<?php
								include("Php/config.php");


								$query = "select * from 	questions";
								$Result = mysqli_query($connect, $query);

								if($Result)

																	if (mysqli_num_rows($Result) > 0) {
																		// output data of each row
																		while($row = mysqli_fetch_assoc($Result)) {


																			$Question_No=$row['Question_no'];
																			$Text=$row['Text'];
																		

																		echo $Question_No;	
																		echo $Text;	}


																	}


?>
<DocType HTML>
<html>

<link rel="stylesheet" href="CSS/bootstrap.css"> 
<body>

	<div class="container">
				<a href="question.php?Question_no=<?php echo $Question_No?>"> </a>
				<center><h3> Welcome to Online Quiz System </h3>		<p> Question 1/3 </p>
				
								</center>
<form>
  <div class="mb-3">

  	<h3> Chosose the Correct option </h3>

  	<p> 1. The First Caliph of Islam is ____. </p>
   

			<div class="form-check">
			  
			  <label class="form-check-label" for="flexRadioDefault1">
			    Hazrat Ali (R.A)
			  </label>
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
			</div>
				<div class="form-check">
			
			  <label class="form-check-label" for="flexRadioDefault1">
			    Hazrat Umer (R.A)
			  </label> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
			</div>

				<div class="form-check">
							

							    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							  <label class="form-check-label" for="flexRadioDefault1">
							    Hazrat Usman (R.A)
							  </label>
							</div>
							<div class="form-check">
							

							    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							  <label class="form-check-label" for="flexRadioDefault1">
							    Hazrat Abu_Bakar (R.A)
							  </label>
							</div>

				  <button type="submit" class="btn btn-primary" name="btnNext">Next</button>
				   <button type="submit" class="btn btn-secondary" name="btnPrev">Previous</button><br><br>
				    <button type="submit" class="btn btn-success" disabled name="btnSubmit">Submit</button>
			</form>


					</div>

	</div>
		





</body>
</html>