<!DOCTYPE html>
<html>
<head>
  <title>contact us VB</title>
  <link rel="stylesheet" type="text/css" href="css/style-contact.css">
 </head>
<body>
<div id="navbar"><a href="index.html">
  <img src="image\finallogo.png"></a>
   <div id="content">
   <ul class="snip1135">
    <li><a href="index.html" data-hover="Home">Home</a></li>
        <li><a href="about.html" data-hover="ABOUT US">ABOUT US</a></li>
        <li><a href="non-alcoholic.html" data-hover="NON-ALCOHOLIC">NON-ALCOHOLIC</a></li>
        <li><a href="alcoholic.html" data-hover="ALCOHOLIC">ALCOHOLIC</a></li>
        
        <li class="current"><a href="contact.php" data-hover="CONTACT US">CONTACT US</a></li>
      </ul>
      </div>
</div>
<div id="ryan">
</div>

<h3>Contact Us</h3>

<div class="container">
  <form name="contact-form" action="" method="post" id="contact-form">
    <label for="name"><span style="color: #CEBE31">First Name</span> </label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="email"><span style="color: #CEBE31">Email</span></label><br>
    <input type="email" id="lname" name="lastname" placeholder="Your mail"><br><br>

    <label for="country"><span style="color: #CEBE31">Country</span></label>
    <select id="country" name="country">
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject"><span style="color: #CEBE31">Subject</span></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
    
  </form>
  <div class="response_msg"></div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='firstname']").val() === '')
{
$("#contact-form [name='firstname']").css("border","1px solid red");
}
else if ($("#contact-form [name='lastname']").val() === '')
{
$("#contact-form [name='lastname']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "mail.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email],textarea").val("");
}
});
}
});

$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>



<div id="footer"><a href="index.html">
   <img src="image\finallogo.png"></a>
   <div id="address">
    <p><span style="color: white;font-style: georgia;">  Chennai-94,<br>Tamil Nadu,<br>India.</span></p>
   <a href="https://en-gb.facebook.com/login/" target="_blank">  <img id="fb" src="image\fbw.png"></a>
   <a href="https://www.instagram.com/accounts/login/" target="_blank"> <img id="insta" src="image\instaw.png"></a>
   <a href="https://twitter.com/login" target="_blank"> <img id="twitter" src="image\fb.png"></a>
 </div>
 </div>
</body>
</html>