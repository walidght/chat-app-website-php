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
                    <p>Le réseau social pour<br> 
                        se faire des<br>
                        nouveaux potes</p>
                </div>
                
            </div>
            <div class="lastimg">
                <img src="lasimg.png" alt="logo" class="imagelastttt" >
            </div>
        </div>

        <div class="wrapper">
            <section class="form login">
                <p class="head">Bon retour parmis nous!</p>
                <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                        <label>Adresse mail</label>
                        <input type="text" name="email"  required>
                    </div>
                    <div class="field input">
                        <label>Mot de passe</label>
                        <input type="password" name="password"  required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="lastThing">
                        <div class="subButton">
                            <input type="submit" name="submit" value="Login" id="login-btn">
                        </div>
                        <div class="logLink">Pas encore inscris? <a href="index.php">Rejoins-nous maintenant</a></div>
                    </div>
                </form>
            </section>
          </div>
        
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

    
  
  </body>
</html>
