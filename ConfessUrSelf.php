<?php
error_reporting(0);
$id=$_GET['uid'];     //getting the link of the person to whom the confession is being done
if($id){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Confess | ConfessUrSelf</title>
  </head>
  <script src="animation.js"></script>
  <body>
    <div class="major-menu-container" id="area-for-menu">
      <div
        class="the-menu-container"
        onclick="menuRetract()"
        id="menu-background"
      >
        <center>
          <ul>
            <li onclick="boxAppear(1)"><a href="#">Instruction</a></li>
            <li onclick="boxAppear(2)"><a href="#">About</a></li>
            <li onclick="boxAppear(3)"><a href="#">Contact</a></li>
          </ul>
        </center>
      </div>
    </div>
    <div class="major-menu-container" id="area-for-info">
      <div
        class="the-info-container"
        onclick="infoRetract()"
        id="info-background"
      >
        <center>
          <div id="info2">
            <h3>About</h3>
            <br />
            <p>
              this is just a small initiation which allows other people to
              confess any thing which they want to the one who has an account
              and has shared the link via a social media.
            </p>
            <p>
              There is also a personal diary type available for the user where
              they can write anything they want to keep a track of their daily
              life or anything happening to them.
            </p>
          </div>
          <div id="info3">
            <h3>Contact</h3>
            <br />
            <h5>Know the developer:</h5>
            <br />
            <p>Ex-student of methodist school</p>
            <p>XD XD XD</p>
          </div>
          <div id="info1">
            <h3>Instruction</h3>
            <br />
            <ul>
              <li>make an account</li>
              <li>copy the link on the dashboard</li>
              <li>share it on any social media or to your friends</li>
              <li>
                the link will lead them to a textbox where they will be able to
                confess.
              </li>
            </ul>
          </div>
        </center>
      </div>
    </div>
    <!--making the header color idea -->
    <div class="container" id="header">
      <center>
        <div class="content" id="header-content">
          <img class="logo" src="logo2.png" />
          <div class="nav-container">
            <i class="fas fa-bars" onclick="menuAppear()"></i>
          </div>
        </div>
      </center>
    </div>
    <div class="container" id="main">
      <center>
        <div class="content-form" id="main-content" style="margin-top: 7vh">
        <form action="confessed.php" method="POST">
          <table style="width: 100%">
            <caption>
              Welcome!
            </caption>
            <tr>
              <td>
                <center>
                  <textarea name="confession"></textarea>
                </center>
              </td>
            </tr>
            <input type="hidden" value="<?php echo $id; ?>" name="id_holder"> 
            <tr>
              <td>
                <center>
                  <input
                    class="button"
                    type="submit"
                    value="Confess"
                    id="form-btn"
                  />
                </center>
              </td>
            </tr>
            <tr>
              <td>
                <center>
                  <p id="small-instruction">
                    Wanna know other's confession about you?
                    <i><a href="Signup.php">Signup</a></i>
                  </p>
                </center>
              </td>
            </tr>
          </table>
        </form>
        </div>
      </center>
    </div>
    <div class="container" id="footer">
      <p id="footer-point-1">
        <i class="far fa-copyright"></i> 2020 Copyright:Confess.xyz
      </p>
      <p id="footer-point-2">An <em>Ex-Methodistian</em> production</p>
    </div>
  </body>
</html>
<?php
}else{
  echo "<center><h1>url not found!!!!!</h1></center>";
}
?>