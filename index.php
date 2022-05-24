<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>

    <div class="flexContainer">

        <div class="left">
            <div class="logo">
                <img src="logo.png" alt="logo" width="50px">
            </div>
            <div class="textContainer">
                <div class="text">
                    <p>The social media to<br> 
                        make<br>
                        New Friends</p>
                </div>
                
            </div>
            <div class="lastimg">
                <img src="lasimg.png" alt="logo" class="imagelastttt" >
            </div>
        </div>

        <div class="wrapper">
            <section class="form signup">
                <p class="head">Create an account</p>
                <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname"  required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname"  required>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email"  required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password"  required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Profile Picture</label>
                        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="lastThing">
                        <div class="subButton">
                            <input type="submit" name="submit" value="Signup" id="signup-btn">
                        </div>
                        <div class="logLink">Already signed up? <a href="login.php">Login now</a></div>
                    </div>
                </form>
            </section>
          </div>
        
    </div>


    
      <script src="javascript/pass-show-hide.js"></script>
      <script src="javascript/signup.js"></script>

    
  
  </body>
</html>
