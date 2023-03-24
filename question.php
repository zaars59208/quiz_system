<?php include('Php/config.php');
//	if(isset($_GET['id']))
{
    //	$id= $_GET['id'];
    $query = "select id from questions";

    $IDs = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($IDs)) {

        //echo $row['id'];"<br>";
        //echo gettype($row) ;

    }
    foreach ($row as $ID) {

        echo $ID;
        // code...
    }


    $ID = $row['id'];

    $query1 = "select* from questions where id='$ID'";

    $run_query = mysqli_query($connect, $query1);

    while ($data = mysqli_fetch_assoc($run_query)) {

        $Question_No = $data['Question_no'];
        $Text = $data['Text'];
    }
}

$query = "select* from choices where Question_no=$Question_No";

$choices = mysqli_query($connect, $query);
?>

<DocType HTML>
    <html>

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <body>

    <div class="container">

        <center><h3> Welcome to Online Quiz System </h3>
            <p> Question <?php echo $Question_No ?>/3 </p>

        </center>
        <form method="POST" action=" ">
            <div class="mb-3">

                <h3> Chosose the Correct option </h3>

                <p>  <?php echo "  {$Question_No}.{$Text}" ?> </p>

                <?php while ($row = mysqli_fetch_assoc($choices)): ?>

                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               value="<?php echo $row['id']; ?>"/><?php echo $row['text']; ?>

                        <label class="form-check-label" for="flexRadioDefault1">

                        </label>

                    </div>
                <?php endwhile; ?>


                <button type="submit" class="btn btn-primary" name="btnNext">Next</button>
                <button type="submit" class="btn btn-secondary" name="btnPrev">Previous</button>
                <br><br>
                <button type="submit" class="btn btn-success" disabled name="btnSubmit">Submit</button>
        </form>


    </div>

    </div>


    </body>
    </html>