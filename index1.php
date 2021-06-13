<?php
 $insert = false;
if(isset($_POST['firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    
    // Collect post variables
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    
    $email = $_POST['email'];
    
    $massage = $_POST['massage'];
    $sql = "INSERT INTO `feedback`.`feedback` ( `firstname`, `lastname`, `email`, `message`, `date&time`) VALUES
     ( '$firstName', '$lastName', '$email', '$massage', current_timestamp());";
     
    

    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
 <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>


<!-- jsdkjsk -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback css/style1.css">
    
    <title>Document</title>
</head>
<body>
     
    

    <section>
    
    




        <div class="container">
       
          <form action="index1.php" method="POST" id="my-form">
      
            <div class="form-group">
              <label for="firstName"> First Name</label>
              <input type="text" name="firstname" id="firstName"  >
            </div>
      
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastname">
            </div>
      
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email">
            </div>
      
            <div class="form-group">
              <label for="massage">Massage</label>
              <textarea name="massage" id="massage" cols="8" rows="5"></textarea>
            </div>
      
            <button type="submit">Submit</button>
          </form>
        </div>
        <div id="status"></div>
      </section>
     
      <section class="general">
        <div class="foot projects"> 
            <h2>You like to visit</h2>
            <div>
                <img src="feedback img/calculator.png" alt="">
                <img src="feedback img/calculator.png" alt="">
                <img src="feedback img/calculator.png" alt="">
                <img src="feedback img/calculator.png" alt="">
            </div>

        </div>
        <div class=" foot feedback">
            <h2>Give feedback</h2>
            <img src="feedback img/feedback.png" alt="">
            <img src="feedback img/feedback.png" alt="">
            <img src="feedback img/feedback.png" alt="">
            <img src="feedback img/feedback.png" alt="">
            

        </div>
    </section>
    
    
    
</body>
</html>


