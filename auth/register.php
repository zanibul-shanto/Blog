<?php 
require "../includes/header.php";
require "../config/config.php";

if(isset($_SESSION['username'])){
  header("location: http://localhost/Blog/index.php");
}

 
    if(isset($_POST['submit'])) {

        if(empty($_POST['email']) or empty($_POST['username']) or empty($_POST['password'])){
          echo "Fill up the form carefully.";
        }else{
          $email = $_POST['email'];
          $username = $_POST['username'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


         $insert = $conn->prepare("INSERT INTO users (email, username, mypassword) VALUES
          (:email, :username, :mypassword)");

        

          $insert-> execute([
            ':email' => $email,
            ':username' => $username,
            ':mypassword' => $password
          ]);

          header("location: login.php");


        }
    }


?>



            <form method="POST" action="register.php">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
               
              </div>

              <div class="form-outline mb-4">
                <input type="" name="username" id="form2Example1" class="form-control" placeholder="Username" />
               
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                
              </div>



              <!-- Submit button -->
              <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Register</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Aleardy a member? <a href="login.php">Login</a></p>
                

               
              </div>
            </form>


       <?php require "../includes/footer.php"; ?>