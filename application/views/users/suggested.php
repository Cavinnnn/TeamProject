<style>
#topArtists{
  margin:10px;
  color:#696969;
}
body{
  background-color: #D9DFDF;
}
#suggested{
    margin-top:30px;
    display:inline-block;
    margin-bottom:30px;
    color:#696969;
}
.demo-card-square.mdl-card {

  width: 320px;
  height: 320px;
  margin:3.8%;
  margin-bottom:7px;
  float:left;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  
}
.boxed{
  height:100%;
  width:50%;
  margin:0px;
  padding:0px;
  
}
    #sug4{
      display:inline-block;
    }
    #sug3{
      display:none;
    }
    #sug2{
      display:none;
    }
@media screen and (max-width: 1439px) {
    #sug4{
      display:none;
    }
    #sug3{
      display:inline-block;
    }
    #sug2{
      display:none;
    }
}
@media screen and (max-width: 720px) {
    #sug4{
      display:none;
    }
    #sug3{
      display:none;
    }
    #sug2{
      display:inline-block;
    }
}

</style>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
 
 
 
 
 
 
 
    
    
    
      <center>
        <h1 id="topArtists">Top Artists</h1>
      </center>
			  
			  <div id="sug4">
			    
			    <center>
            <?php
        						$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93&limit=4");
        						$suggested = count($xml->tracks->children());
        							for($x = 0; $x < $suggested; $x++){
            							echo '<div  class="demo-card-square mdl-card mdl-shadow--2dp">
                                <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                      by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                                </div>
                               
                              </div>';
                          }
                      ?>
            </center>
      </div>
      <div id="sug3">
			    
			    <center>
            <?php
        						$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93&limit=3");
        						$suggested = count($xml->tracks->children());
        							for($x = 0; $x < $suggested; $x++){
            							echo '<div style="margin:50px;" class="demo-card-square mdl-card mdl-shadow--2dp">
                                <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                      by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                                </div>
                               
                              </div>';
                          }
                      ?>
            </center>
      </div>
      <div id="sug2">
			    
			    <center>
            <?php
        						$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93&limit=2");
        						$suggested = count($xml->tracks->children());
        							for($x = 0; $x < $suggested; $x++){
            							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                                <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                                  <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                      by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                                </div>
                               
                              </div>';
                          }
                      ?>
            </center>
      </div>
      
       


       
     <center >
        <br>
        <h1 style="" id="suggested">Suggested Music</h1>
        <br>
               <!-- <div class="boxed">
                  <iframe height="400px" src="https://www.youtube.com/embed/JGwWNGJdvx8?autoplay=1" frameborder="0" ></iframe>
              </div>
      

     






<div id="Like">
  <center>
    <button  type="button" style="margin:40px;height:50px;width:70px; color:green;">Like</button> 
    <button  type="button" style="margin:40px;height:50px;width:70px; color:red;">Dislike</button> 
    
  </center>
</div>-->
<!--BELOW CODE BUILDS A SELECT TO QUERY THE DATABASE ON A RANDOM SEED THAT THE USER HAS LIKED -->
<?php
$servername = "localhost";
$username = "cavinn";
$password = "";
$dbname = "c9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user = $user['id'];
$sql2 = "SELECT seed1, seed2, seed3, seed4, seed5 FROM users WHERE id='$user'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        if($row['seed1'] == ""){
            $mbid = "b8a7c51f-362c-4dcb-a259-bc6e0095f0a6";
        }elseif($row['seed2'] == ""){
            $mbid = $row['seed1'];
        }elseif($row['seed3'] == ""){
           $mbid = $row['seed2'];
        }elseif($row['seed4'] == ""){
            $mbid = $row['seed3'];
        }elseif($row['seed5'] == ""){
            $mbid = $row['seed4'];
        }else{
            $randNum = rand(1,5);
            $seed = "seed$randNum";
            $mbid = $row[$seed];
        }
    }
} else {
    $mbid = "b8a7c51f-362c-4dcb-a259-bc6e0095f0a6";
}

$conn->close();
$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&mbid=$mbid&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
			     $charts = count($xml->similarartists->children());
					for($x = 0; $x < $charts; $x++){
					  
							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div style="background:url(\''; echo $xml->similarartists->artist[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                      <h2 class="mdl-card__title-text">'; echo $xml->similarartists->artist[$x]->name; echo '</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                     Suggestion Match: '; $match = (float)$xml->similarartists->artist[$x]->match; $match = $match * 100; if($match == 100){echo $match;}else{ echo number_format((float)$match, 2, '.', '');} echo '%
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a href="../like.php?mbid='; echo $xml->similarartists->artist[$x]->mbid; echo'&user='; echo $user; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-up"></span>
                      </a>
                      <a href="" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        <span class="fa fa-thumbs-o-down"></span>
                      </a>
                    </div>
                  </div>';
              }

?></center>