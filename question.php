<?php

		include ('Php/config.php');
?>


<?php

						if(isset($_GET['id']))
				
				{		

						$id= $_GET['id'];
					
							
						$query ="select* from questions where id='$id'";


						$IDs= mysqli_query($connect,$query);

						while ($row=mysqli_fetch_assoc($IDs))  {
   				
   				 $Question_No = $row['Question_no'];"<br>";
   				 $Text = $row['Text'];"<br>";

   			}
   				} 
{
   							$query="select* from choices where Question_no=$Question_No";


											$choices = mysqli_query($connect, $query);}

										$currentQuestion = $Question_No;
							if(isset($_POST['btnNext']))
					{

							$Question_No = $currentQuestion+1;

							$query ="select id, Question_no, Text from questions where Question_no = $Question_No ";

									$IDs= mysqli_query($connect,$query);

														while ($row=mysqli_fetch_assoc($IDs))  {
								   				
								   				 $Question_No = $row['Question_no'];"<br>";
								   				 $Text = $row['Text'];"<br>";




								   				}}
{
   							$query="select* from choices where Question_no=$Question_No";


											$choices = mysqli_query($connect, $query);}




   				?>




   				
											

<!DocType HTML>
<html>

<link rel="stylesheet" href="CSS/bootstrap.css"> 
<link rel="stylesheet" href="CSS/style.css"> 

<body>

	<div class="container-fluid">
			<div class="navbar">
				<ul>
				
					<li> <a href="#"> Home </a></li>
					<li> <a href="services.php"> Services </a></li>
					<li> <a href="#"> Choose Subject </a></li>
					<li> <a href="#"> Feedback </a></li>
					<li> <a href="#"> Contact Us </a></li>
			
			
			
			
			</div>



	</div>

	<div class="container">
		
				<center><h3> Welcome to Online Quiz System  </h3>		<p> Question <?php 	echo $Question_No?>/3 </p>
				
								</center>
<form method="POST" action=" ">
  <div class="mb-3">

  	<h3> Chosose the Correct option </h3>

  	<p>  <?php echo "  {$Question_No}.{$Text}"?> </p>
  	  
  			
  		<?php while ($row=mysqli_fetch_assoc($choices)): ?>
			<div class="form-check">
										
										  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $row['id'];?>"/><?php  echo $row['text'];?> 

										  		 <label class="form-check-label" for="flexRadioDefault1">
										    
							</label>

										</div>

									<?php endwhile;  ?>

					<button type="submit" class="btn btn-secondary" name="btnPrev">Previous</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				  <button type="submit" class="btn btn-primary" id="next" name="btnNext" >Next</button><br><br> 
				    <button type="submit" class="btn btn-success" disabled name="btnSubmit">Submit</button>
			</form>

								<script>
								  var nextButton = document.getElementById('next');
								  nextButton.addEventListener('click', function() {
								    //nextButton.disabled = true;
								  });
								</script>


			<footer class="text-center text-white" id="footer" style="background-color: #caced1; ">


 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://github.com/unique-world/">Free Web Development on Unique World GitHub</a>
  </div>

</footer>

</body>
</html>
