<?php
include "db_conn.php";
?>
<!DOCTYPE html> 
<html> 
<head> 
<title>Prime Movers Information System (PMIS)</title> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style> 
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif} 
</style> 

 <!-- Bootstrap --> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head> 
<body class="w3-black w3-content" style="max-width:1600px"> 

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-red w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>ITTS</b></h4>
    <p class="w3-text-grey">UiTMCK</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT ITTS</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
	<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 
	<a href="#collaboration" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COLLABORATION</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="photo/logo.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>WELCOME TO INFO TECH TITAN SYSTEM CLUB</b></h1>
     

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
    <p align="center"><img src="photo/logo.png" alt="Me" style="width:50%">
    </div>
    
 

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Info Tech Titan System Club</b></h4>
    <p> Welcome to the Tech Titan Club, where we embrace the wonders of technology in a friendly and collaborative environment! Our club is all about learning and exploring the exciting realm of information technology. From engaging workshops to hands-on coding projects and insightful tech talks, we offer a space for members to grow their skills, connect with fellow tech enthusiasts, and stay updated on the latest industry trends. Whether you're a seasoned pro or just starting your tech journey, everyone is welcome to join our community. Connect with us to be part of the Tech Titan experience, where we're shaping the future through innovation and shared passion for all things tech! </p>
    <hr>
	
	<!-- First Commitee-->
	<header id="committee">
	<div class="w3-container w3-padding-64 w3-center" id="team">
	<h2>OUR COMMITTES</h2>
	<p>Meet the team members- Info Tech Titan System Club:</p>

	<div class="w3-row"><br>

	<div class="w3-quarter">
  <img src="photo/diriku.jpg" alt="Boss" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Bahiyyah Husna</h3>
  <p>President</p>
	</div>

	<div class="w3-quarter">
  <img src="photo/yaasuha.jpg" alt="Boss" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Alya Nasuha</h3>
  <p>Vice President</p>
	</div>

	<div class="w3-quarter">
  <img src="photo/jaa.jpg" alt="Boss" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Nur Syaza Amirah</h3>
  <p>Secretary</p>
	</div>

	<div class="w3-quarter">
  <img src="photo/arah.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
  <h3>Nur Maisarah Husni</h3>
  <p>Treasurer</p>
	</div>

	</div>
	</div>

    
    <h4><b>Info Tech Titan Membership</h4></b>
    <!-- Progress bars / Skills -->
	<header id="membership">
	 <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	<p align="center"><h3>Membership form for ITTS  2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    </p>
    <hr>
	
	<head>
  
	<p align="center"><h3>Activities form for Info Tech Titan System Club</h3></p>
	<header id="activity">
    <a href="add_activity.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-light">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
           
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  
  
  <!-- First Collaboration-->
	<header id="collaboration">
	<div class="container">

    <?php
	
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
	 
    ?>
	<p align="center"><h3>Info Tech Titan System Club Collaboration</h3></p>
    <a href="add_club.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-light">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
  
  <!-- Contact Committee -->
   <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<p align="center"><h3>Contact Our Committees For More Details</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-light">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Id Number</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
        </tr> 
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <!-- Activities -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Updated Activities </h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Solat Hajat</div>
        <img src="photo/solat.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Guest Speaker Event</div>
        <img src="photo/datascience.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Workshop and Training Sessions</div>
        <img src="photo/workshop.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Project Showcase</div>
        <img src="photo/shop.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Team Building</div>
        <img src="photo/team.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Code Review Session</div>
        <img src="photo/code.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Gala Night</div>
        <img src="photo/gala.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Family Day</div>
        <img src="photo/family.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>
  
   <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Info Tech Titan Club</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p><a href="mailto:"bahiyyahhusna01@gmail.com">bahiyyahhusna01@gmail.com</a></p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p><a href="https://www.google.com/maps/place/UiTM+Kelantan,+Kampung+Belukar,+18500+Machang,+Kelantan/@5.7566862,102.268311,16z/data=!4m15!1m8!3m7!1s0x31b68fe65e3204eb:0xa006e56b9730a2c8!2sUiTM+Kelantan,+Kampung+Belukar,+18500+Machang,+Kelantan!3b1!8m2!3d5.7569317!4d102.2733965!16s%2Fg%2F11h07pgy2v!3m5!1s0x31b68fe65e3204eb:0xa006e56b9730a2c8!8m2!3d5.7569317!4d102.2733965!16s%2Fg%2F11h07pgy2v?entry=ttu" target="_blank">UiTM Cawangan Kelantan</a></p>
		
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p> <img src="photo/qrcode.png" width ="100" height="100"> </p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>


  
</body>
</html>
