<!-- code from https://codepen.io/chrisfrees/pen/bpjxc  -->

<style>
body{
  
  font-family: 'Rubik Mono One', sans-serif;
  
}
/* nav */

nav{
width:100%;
border-radius: 5px;

}
ul{ 
  
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;

}

li {
display: inline-block;
color: black;


}

li a {
display: inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;

}

.heightNav{
    height:1%;
    padding:0px;
}

/* carousel slider */

.slider {
  max-width: 100%;
  margin-top:-1px;
  height: 750px;/* reajust size of images*/

  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url(http://media.gq.com/photos/57ffebd7e5dad068275d781e/master/pass/1616-GQ-FEKL12-01-KL-GQstyle.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(http://i.onionstatic.com/avclub/5031/50/16x9/1200.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(https://i.ytimg.com/vi/tV04o-5mRH0/maxresdefault.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}

#about{
    margin-top:-25px;
    background:#999999; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#EAECEE, #D5D8DC); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#EAECEE, #D5D8DC); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#EAECEE, #D5D8DC); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#EAECEE, #D5D8DC); /* Standard syntax */
    /* taken from https://www.w3schools.com/css/css3_gradients.asp */
    padding:80px;
    float:left;
    height:100%;

}
#about2{ /* #bbbec1*/
  margin-top:-25px;
  
  background:#999999; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(#d5d8dc, #d5d8dc); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#d5d8dc, #d5d8dc); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#d5d8dc, #d5d8dc); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#d5d8dc, #d5d8dc); /* Standard syntax */
  text-align:right;
  margin-bottom:-1.5%;
  padding:100px;
  height:100%;
}
about2Div{
  
}

#tableSection{
  margin-top:0.2em;
  padding-bottom:0em;
  text-align:center;
  
  
}
#table{

  background: #f2f2f2; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#f2f2f2, #EAECEE); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#f2f2f2, #EAECEE); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#f2f2f2, #EAECEE); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#f2f2f2, #EAECEE); /* Standard syntax */
    
min-height: 100%;


}
#basic{
  background-color:#ECF0F1;
  border:1px solid #DDDCD8;
  width:200px;
  
}
#exclusive{
 
  background-color:#ECF0F1;
   border:1px solid #DDDCD8;
   width:200px;
   
}
#pro{
  background-color:#ECF0F1;
  border:1px solid #DDDCD8;
  width:200px;

}

#proc{
color:#FFFFFF;  
}


.buttonBlue{
  background-color:#333333;
   border: 1px solid #989A8F;
   padding: 10px 40px;
   -webkit-border-radius: 6px;
   -moz-border-radius: 6px;
   border-radius: 6px;
   color:white;
   font-size: 14px;
   text-decoration: none;
   vertical-align: middle;
    font-size:17px;
    margin:10px;
}
.blueClass{
   background-color:#333333;
   color:white;
   padding:1%;
   width:100%;
   height:100px;
   margin-bottom:10px auto;
   
}
.tableBottom{
margin-top:50px;
  
  }
#vinyl{
  position:relative;
  float:left;
  
  
  padding-right:10%;
}

#aboutpage{
float:right;
margin:6%;
}

.button {
  border: 1px solid #989A8F;
  padding: 10px 40px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  color: #989A8F;
  font-size: 14px;
  text-decoration: none;
  vertical-align: middle;
  font-size:17px;
  margin:10px;
}
.float{
  float:right!important;
}
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<script>
  
   $(document).ready(function(){
     $("#homeBtn").click(function() {
          $('html, body').animate({
              scrollTop: $("#section1").offset().top
          }, 2000);
      });
      $("#paymentBtn").click(function() {
          $('html, body').animate({
              scrollTop: $("#section2").offset().top
          }, 2000);
      });
      $("#aboutBtn").click(function() {
          $('html, body').animate({
              scrollTop: $("#section3").offset().top
          }, 2000);
      });
      $("#servicesBtn").click(function() {
          $('html, body').animate({
              scrollTop: $("#section4").offset().top
          }, 2000);
      });
    });
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>



    
  <div class="heightNav topnav" id="myTopnav" >
    <img style="margin-left:10px;margin-right:10px;margin-top:4px;float:left;" height="40px" src="/backend-assets/css/images/BeefRapLogo.png" />
      <a id="homeBtn" href="#section1">Home</a>
      <a id="paymentBtn" href="#section2">Payment</a>
      <a id="aboutBtn" href="#section3">About Us</a>
      <a id="servicesBtn" href="#section4">Services</a>
      <a class="float" href="/login">Sign In</a>
      <a class="float" href="/registration">Register</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>


<!-- code from https://codepen.io/davidhc/pen/nLpJk -->  
       
<div class='slider' id="section1">
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
</div>

  
  <center>
    
  
  <!-- https://codepen.io/chrisfrees/pen/bpjxc motivation for the table-->  
    
<div id="tableSection" > 
<ul id="table">
  <li id="basic">
  <div class="top">
    <h1 id="section2">BASIC</h1>
    
  </div>
    <div class="tableBottom">
    <p><span>€1.00</span> euro(s)</p>
    <p><span>20</span> hours</p>
    <p><span>20</span> artists</p>
    <p><span></span> Limited Streaming Time</p>
    <div class="sign">
    <a href='/users/registration' class='button'>SIGN UP</a>
    </div>
  </div>
</li>
  
<li id="exclusive">
  <div class="blueClass">
  
    <h1>PRO</h1>
    
  </div>
    <div class="tableBottom">
    <p><span>€1.50</span> euro(s)</p>
    <p><span>40</span> hours</p>
    <p><span>50</span> artists</p>
    <p><span></span> Limited Streaming Time</p>
    <div class="sign">
    <a href='/users/registration' class="buttonBlue" >SIGN UP</a>
    </div>
  </div>
</li>

<li id="pro">
  <div class="top">
    <h1>ULTRA</h1>

  </div>
    <div class="tableBottom">
    <p><span>€2.00</span> euro(s)</p>
    <p><span>Unlimeted</span> hours</p>
    <p><span>Unlimeted</span> artists</p>
    <p><span></span> Unlimeted Streaming Time</p>
    <div class="sign">
    <a href='/users/registration' class='button'>SIGN UP</a>
    </div>
  </div>
</li>
  
</ul>
  
  
  
  </center>
</div>




<section id="about">
  <div id="aboutpage">
  <img src="/backend-assets/css/images/logo.png">
  </div>
  <h1 id="section3">About Us!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed est purus. Suspendisse sodales, ex sit amet sodales molestie, elit ex tincidunt tellus,
    vel convallis nunc sapien at dolor. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci, non iaculis massa auctor venenatis. Nullam eget lectus varius,
    dictum nisl eget, consequat massa. Suspendisse at eros eu magna sollicitudin pulvinar. Donec sit amet quam ante. Maecenas quis elementum ipsum. Nunc placerat elementum
    vulputate. Nulla consectetur venenatis mollis. </p>
  
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed est purus. Suspendisse sodales, ex sit amet sodales molestie, elit ex tincidunt tellus,
    vel convallis nunc sapien at dolor. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci. </p>
    

 

  
</section>

<section id="about2">
  <h2>What else do our services provide?</h2>
  
  <div style="max-width:100%;" id="vinyl">
  <img style="max-width:75%;" src="/backend-assets/css/images/vinyl 500.png" >
  </div>
  
  
  <p id="section4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed est purus. Suspendisse sodales, ex sit amet sodales molestie, elit ex tincidunt tellus,
    vel convallis nunc sapien at dolor. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci, non iaculis massa auctor venenatis. Nullam eget lectus varius,
    dictum nisl eget, consequat massa. Suspendisse at eros eu magna sollicitudin pulvinar. Donec sit amet quam ante. Maecenas quis elementum ipsum. Nunc placerat elementum
    vulputate. Nulla consectetur venenatis mollis. </p>
  
  
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed est purus. Suspendisse sodales, ex sit amet sodales molestie, elit ex tincidunt tellus,
    vel convallis nunc sapien at dolor. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci, non iaculis massa auctor venenatis. Nullam eget lectus varius,
    dictum nisl eget, consequat massa. Suspendisse at eros eu magna sollicitudin pulvinar. Donec sit amet quam ante. Maecenas quis elementum ipsum. Nunc placerat elementum
    vulputate. Nulla consectetur venenatis mollis. </p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed est purus. Suspendisse sodales, ex sit amet sodales molestie, elit ex tincidunt tellus,
    vel convallis nunc sapien at dolor. Pellentesque scelerisque ligula enim, commodo tristique eros ultricies nec. Cras pulvinar felis mi. Nunc risus lacus, 
    placerat non porta ac, semper a nisi. Mauris sit amet ultrices orci. Integer ullamcorper tellus orci, non iaculis massa auctor venenatis. Nullam eget lectus varius,
    dictum nisl eget, consequat massa. Suspendisse at eros eu magna sollicitudin pulvinar. Donec sit amet quam ante. Maecenas quis elementum ipsum. Nunc placerat elementum
    vulputate. Nulla consectetur venenatis mollis. </p>
  
</section>
