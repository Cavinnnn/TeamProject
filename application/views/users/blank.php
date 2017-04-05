<!-- code from https://codepen.io/davidhc/pen/nLpJk -->


<style>

/* carousel slider */

.slider {
  max-width: 100%;
  height: 700px;
  margin: -5px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url(https://68.media.tumblr.com/d8d001998a324222f8d13658ab09c4e8/tumblr_inline_nxw3t26IBt1sc9cew_1280.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(http://img05.deviantart.net/d674/i/2012/254/c/c/quasimoto_sketch_by_dizzyskulz-d5ef5ur.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(https://i.ytimg.com/vi/niX4JPy2VOQ/maxresdefault.jpg)no-repeat center;
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



/*pricing table*/


* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 40px;
}


.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}



/*navbar*/


ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;
text-align:center; 
}

li {
display: inline-block;
text-align:center; 
}

li a {
display: inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;

}

li a:hover {
    background-color: #111;
    
}
.heightNav{
    height:1%;
    margin-bottom:50px;
    padding:0px;
}
.nav{
width:13em;
}

.test{
padding: 14px 16px;
margin-bottom:100px;
}

</style>




<div>
<nav class="heightNav" style="margin-bottom: 5px;">
<ul> 
<li class="nav"><a href="/users/blank">Home</a></li>
<li class="nav"><a href="/users/discover">Discover</a></li>
<li class="nav"><a href="/users/charts">Charts</a></li>
<li class="nav"><a href="/users/artists">Artists</a></li>
<li class="nav"><a href="/users/people">People</a></li>
</ul>
</nav>
</div>


<!-- code from https://codepen.io/davidhc/pen/nLpJk -->  
       
<div class='slider'>
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
</div>



<h2 style="text-align:center">Responsive Pricing Tables</h2>
<p style="text-align:center">Resize the browser window to see the effect.</p>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / year</li>
    <li>10GB Storage</li>
    <li>10 Emails</li>
    <li>10 Domains</li>
    <li>1GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Pro</li>
    <li class="grey">$ 24.99 / year</li>
    <li>25GB Storage</li>
    <li>25 Emails</li>
    <li>25 Domains</li>
    <li>2GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">$ 49.99 / year</li>
    <li>50GB Storage</li>
    <li>50 Emails</li>
    <li>50 Domains</li>
    <li>5GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>
