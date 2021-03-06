<?php 
include_once 'db_connection.php';
session_start();
$id=$_SESSION['USERID'];

$sql0="SELECT * FROM `confession` WHERE `uid` = '$id' ORDER BY `confession`.`confessionId` DESC";
$query=mysqli_query($conn, $sql0);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Confess | Dashboard</title>
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
            <li><a href="logout.php">Logout</a></li>
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
        <div class="content" id="main-content" style="margin-top: 0px">
          <div class="container-holder" style="margin-top: 4px">
            <div class="container" id="link-holder">
              <p style="margin-left: 10px">your link:</p>
              <input id="link" style="background-color: transparent;border:none;width:90%;text-align:center;color:rgba(255, 255, 255, 0.849);" value="http://localhost/practice/confess/ConfessUrSelf.php?uid=<?php echo $_SESSION['USERID'];?>">
              </input>
            </div>
            <button class="floating_button" onclick="copyText()">
              Click to copy the link
            </button>
          </div> 

          <?php while($row=mysqli_fetch_assoc($query)){ ?>

          <div class="container-holder">
            <div class="container" id="others-confession-holder">
              <p><?php echo $row['confessionSentence'] ; ?></p>
            </div>
            <div class="floating_button">:Anonymous</div>
          </div>

          <?php } ?>

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
