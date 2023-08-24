<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
input[type=text], textarea {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus, textarea:focus {
  border: 3px solid #555;
}


 /* The Overlay (background) */
 .overlay {
  /* Height & width depends on how you want to reveal the overlay (see JS below) */   
  height: 100%;
  width: 0;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  background-color: rgb(0,0,0); /* Black fallback color */
  background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
  position: relative;
  top: 25%; /* 25% from the top */
  width: 100%; /* 100% width */
  text-align: center; /* Centered text/links */
  margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
}

/* The navigation links inside the overlay */
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block; /* Display block instead of inline */
  transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
} 

</style>


    
    <link href="style.css" rel="stylesheet">
 <title>Mary Wallace - Freelance Bookkeeper</title>
 </head>
 <body>
  <div class="hero-image"></div>
  <img class="mobile-image" src="woman.jpg">
  <div id="right">
<header>
<div style="">
    <h1>Mary Wallace</h1>
    <h2>Freelance Bookkeeper</h2>
    <h3>#555-342-1782</h3>
</div>
  </header>
  <section>
    <div>


    <p id="hired"></p>
<script>
var i = 0;
var txt = ' Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis gravida neque convallis a cras semper. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Sapien nec sagittis aliquam malesuada. Sed euismod nisi porta lorem. Enim tortor at auctor urna nunc id cursus. Nam aliquam sem et tortor consequat id porta nibh. Orci eu lobortis elementum nibh tellus molestie nunc non blandit. Ipsum consequat nisl vel pretium lectus. Ipsum dolor sit amet consectetur. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Iaculis nunc sed augue lacus. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. ';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("hired").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

    <center><button onclick="typeWriter()">My Services</button><button onclick="openNav()">Contact</button></center>

    
 <!-- The overlay -->
 <div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
<form method="POST" action="index.php" id="contact-form">
<p><label>First Name:</label> <br><input name="name" type="text" /></p>
<p><label>Email Address:</label><br> <input style="cursor: pointer;" name="email" type="text" /></p>
<p><label>Message:</label>  <br><textarea style="width:40%;height:10%;" name="message"></textarea> </p>

<p><button type="submit" name="submit">Send Message</button></p>
</form>
</div>

</div>




<div>
</div>

        <br>
</div>
    <?php




if (isset($_POST['submit'])) {

//change this to the email you want site contact form sent to
$to = 'andrea.crofoot@gmail.com';
$subject = 'New Message from your website!';
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($_POST['message'],70);
$msg = "From:" . $_POST['name'] . " @ " . $_POST['email'] . " | " . $msg;


// send email
mail($to,$subject,$msg);


} else {}

?>

</section>
<footer>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<br><center><small><small>Design Created By <a href="http://andreacrofoot.name">Andrea Crofoot</a></small></small></center>

</footer>
</div>


<script>
      /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}   
    </script>



 </body>
</html> 