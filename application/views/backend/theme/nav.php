<style>
.nav{
width:100%;
float:left;
border-radius: 5px;
}
ul { 

list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;

}

li {
display: inline-block;
text-align:center; 
color: white;
}

li a {
display: inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;

}

li a:hover {
   color: white;
    
}
.heightNav{
    height:1%;
    margin-bottom:50px;
    padding:0px;
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


		<script type="text/javascript">
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
	<!-- BODY -->
	
	<body>
	
		<!-- HEADER -->
	
		<header>

        <div class=" topnav" id="myTopnav">
            <img style="margin-left:10px;margin-right:10px;margin-top:4px;float:left;" height="40px" src="/backend-assets/css/images/BeefRapLogo.png" />
            <a href="/search">Search</a>
            <a href="/suggested">Suggested</a>
            <a href="/charts">Charts</a>
            <a href="/underground">Underground</a>
            <a class="float" href="/logout">Logout</a>
            <a class="float" href="/dashboard"><?php echo $user['name']; ?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

 </header>
		
	</body>