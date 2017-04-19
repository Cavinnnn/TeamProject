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
  float:right;
}

</style>


		
	<!-- BODY -->
	
	<body>
	
		<!-- HEADER -->
	
		<header>

        <nav class="heightNav">
          <ul>
             <img style="margin-left:10px;" height="40px" src="/backend-assets/css/images/BeefRapLogo.png" />
            <li><a href="/users/search">Search</a></li>
            <!--<li><a href="/users/artists">Discover</a></li>-->
            <li><a href="/users/artists">Suggested</a></li>
            <li><a href="/users/charts">Charts</a></li>
            <li><a href="/users/people">People</a></li>
            <li><a href="/users/blank">HOMEPAGE</a></li>

            <li class="float"><a href="/users/account"><?php echo $user['name']; ?></a></li>
            
        </ul>
              
      </nav>

 </header>
		
	</body>