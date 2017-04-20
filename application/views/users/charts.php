<style>
body{
  background-color: #D9DFDF;
}
#discover{
    margin: auto;
    width:97%;
    
}
.demo-card-square.mdl-card {

  width: 320px;
  height: 320px;
  margin:3.8%;
  margin-bottom:7px;
  float:left;
}
.demo-card-square > .mdl-card__title {
  color:#fff;
  
}

.btn {
  background-color: #2F4F4F;
  color: white;
}

.btn:hover{
  color: black;
}

.btn2{
  background-color: #2F4F4F;
  padding: 5px;
  margin: 5px;
  color: white;
}

</style>


<div id="chartContain">


<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <center>
       <div id="buttonLoad" style="margin-top:50px;">
            <center>
                <!--below is all of the buttons chosen by the admin-->
                <a href="/users/charts?artists=true"><button class="btn" >Top Artists</button></a>
                <a href="/users/charts?tracks=true"><button class="btn" >Top Tracks</button></a>

                <!--the href in each button has a query attached which below this section is used in the algorithm to find selected tag based songs 
                for example rock is a tag and is queried to the database of music-->
                <a href="/users/charts?genre=Hip-Hop"><button class="btn" >Hip-Hop Chart</button></a>
                <!-- to here and input where ?genre= whatever genre and also change the text to make more genres-->
                <a href="/users/charts?genre=Pop"><button class="btn" >Pop Chart</button></a>
                <a href="/users/charts?genre=RnB"><button class="btn" >RnB Chart</button></a>
                <a href="/users/charts?genre=Rock"><button class="btn" >Rock Chart</button></a>
                <a href="/users/charts?genre=EDM"><button class="btn" >EDM Chart</button></a>
                <a href="/users/charts?genre=Country"><button class="btn" >Country Chart</button></a>
                <a href="/users/charts?genre=Indie"><button class="btn" >Indie Chart</button></a>
                <a href="/users/charts?genre=Office"><button class="btn" >Office Mix</button></a>
                <!--example above-->
            </center>
        </div>
			<div style="margin-top:50px;">
			 
			   <?php
			   //if and elseif statments to change the content of the page bassed on the button pressed above and if no button was pressed then it loads the 
			   //default of top artists
			   if(isset($_GET['genre'])){
			     //if a genre is set in then it gets the genre from the url
			     $genre = $_GET['genre'];
			     //stores the xml in an object which stores the results
			     $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$genre&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
			     //counts how many results
			     $charts = count($xml->tracks->children());
			     //echos the title of the page so top [genre name] charts for example top pop charts
			     echo '<h1>Top '; echo $genre; echo' Charts</h1>';
					for($x = 0; $x < $charts; $x++){
					  //echos the styling using a for each loop to echo the exact amount of sections that the results have
							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div style="background:url(\'';//echos track image
                    echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                      <h2 class="mdl-card__title-text">';//echos track name
                      echo $xml->tracks->track[$x]->name; echo '</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                          by ';//echos artist name
                          echo $xml->tracks->track[$x]->artist->name; echo' | Played: ';//echos tracks amount of plays
                          echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                    <!--BELOW IS THE CODE PASSED TO THE LIKE.PHP PAGE WHEN A TRACK IS LIKED SO USER ID AND THE MBID OF THE ARTIST-->
                      <a href="like.php?mbid='; echo $xml->tracks->track[$x]->artist->mbid; echo'&user='; echo $user['id']; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-up"></span>
                      </a>
                      <a href="" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-down"></span>
                      </a>
                    </div>
                  </div>';
              }
			     //then the same thing below if the user selected top tracks
			   }elseif(isset($_GET['tracks'])){
			     $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
			     $charts = count($xml->tracks->children());
			     echo '<h1>Top 50 Charts</h1>';
					for($x = 0; $x < $charts; $x++){
					  
							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                      <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                          by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a href="like.php?mbid='; echo $xml->tracks->track[$x]->artist->mbid; echo'&user='; echo $user['id']; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-up"></span>
                      </a>
                      <a href="" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-down"></span>
                      </a>
                    </div>
                  </div>';
              }
			     //then below if the user selected either top artist or nothing
			   }else{
			     $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettopartists&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
			     $charts = count($xml->artists->children());
			     echo '<h1>Top Artists Charts</h1>';
					for($x = 0; $x < $charts; $x++){
					  
							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div style="background:url(\''; echo $xml->artists->artist[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                      <h2 class="mdl-card__title-text">'; echo $xml->artists->artist[$x]->name; echo '</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                     Played: '; echo number_format(intval($xml->artists->artist[$x]->playcount)); echo '
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a href="../like.php?mbid='; echo $xml->artists->artist[$x]->mbid; echo'&user='; echo $user['id']; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-up"></span>
                      </a>
                      <a href="" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-down"></span>
                      </a>
                    </div>
                  </div>';
              }
			     
			   }
          ?>
    </div><!--container-->
      
      
      
      
      </div>
</center>
