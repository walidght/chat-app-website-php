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
            <section class="form login">
                <p class="head">Welcome Back</p>
                <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email"  required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password"  required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="lastThing">
                        <div class="subButton">
                            <input type="submit" name="submit" value="Login" id="login-btn">
                        </div>
                        <div class="logLink">Not yet signed up? <a href="index.php">Signup now</a></div>
                    </div>
                </form>
            </section>
          </div>
        
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

    
  
  </body>
</html>
