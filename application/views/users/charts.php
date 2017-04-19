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
       <div id="buttonLoad">
            <center>
                <a href="/users/charts?artists=true"><button class="btn" >Top Artists</button></a>
                <a href="/users/charts?tracks=true"><button class="btn" >Top Tracks</button></a>

            
                <a href="/users/charts?genre=Hip-Hop"><button class="btn" >Hip-Hop Chart</button></a>
                <!-- to here and input where ?genre= whatever genre and also change the text to make more genres-->
                <a href="/users/charts?genre=Pop"><button class="btn" >Pop Chart</button></a>
                <a href="/users/charts?genre=RnB"><button class="btn" >RnB Chart</button></a>
                <a href="/users/charts?genre=Rock"><button class="btn" >Rock Chart</button></a>
                <a href="/users/charts?genre=EDM"><button class="btn" >EDM Chart</button></a>
                <a href="/users/charts?genre=Country"><button class="btn" >Country Chart</button></a>
                <a href="/users/charts?genre=Office"><button class="btn" >Office Chart</button></a>
                  <a href="/users/charts?genre=Indie"><button class="btn" >Indie Chart</button></a>
                 
                <!--example above-->
            </center>
        </div>
			<div style="margin-top:50px;">
			 
			   <?php
			   if(isset($_GET['genre'])){
			     $genre = $_GET['genre'];
			     $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$genre&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
			     $charts = count($xml->tracks->children());
			     echo '<h1>Top '; echo $genre; echo' Charts</h1>';
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
