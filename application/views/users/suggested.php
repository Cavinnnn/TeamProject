<style>
#topArtists{
  margin:10px;
  color:#696969;
}
#suggested{
    margin-top:30px;
    margin-bottom:30px;
    color:#696969;

}
.demo-card-square.mdl-card {
  width: 250px;
  height: 250px;
  margin:25px;
  margin-bottom:7px;
  float:left;
  padding:10px;
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
@media screen and (min-width: 1200px) {
    #sug4{
      display:block;
    }
    #sug3{
      display:none;
    }
    #sug2{
      display:none;
    }
}
@media screen and (max-width: 1200px) {
    #sug4{
      display:none;
    }
    #sug3{
      display:block;
    }
    #sug2{
      display:none;
    }
}
@media screen and (max-width: 920px) {
    #sug4{
      display:none;
    }
    #sug3{
      display:none;
    }
    #sug2{
      display:block;
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
      <div id="sug3">
			    
			    <center>
            <?php
        						$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93&limit=3");
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
               <div class="boxed">
                  <iframe height="400px" src="https://www.youtube.com/embed/JGwWNGJdvx8?autoplay=1" frameborder="0" ></iframe>
              </div>
      </center>

     






<div id="Like">
  <center>
    <button  type="button" style="margin:40px;height:50px;width:70px; color:green;">Like</button> 
    <button  type="button" style="margin:40px;height:50px;width:70px; color:red;">Dislike</button> 
    
  </center>
</div>

