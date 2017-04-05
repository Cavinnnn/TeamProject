<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<style>
#upload{
    width:100%;
    margin:0%;
    padding:0px;
    
}
#uploadImage{
    float:right;
    width:33%;
    height:300px;
    
}
.demo-card-square.mdl-card {

  width: 320px;
  height: 320px;
  margin:20px;
  margin-bottom:7px;
  float:left;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  
}
#nav{
    height:5%;
    margin-top:200px;
}
#peopleNav{
    margin-top:100px;
    width:100%;
    
}
.nav1 {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #ff3300;
text-align:center; 
}

.nav2{
display: inline-block;
text-align:center; 
}


.playerStyle{
      width:35%;
   position:fixed;
   bottom:10px;
   right:10px;
}
.player{
                display:none!important;
                visibility:hidden!important;
            }





</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <section id="upload">
        
                <div id="uploadImage">
                 <img src="https://s3.amazonaws.com/catapult.images/web/upload.png">
                </div>
                
                
                <h1>Would you like to upload music!?</h1>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie nibh cursus tortor venenatis, non pharetra urna efficitur.Proin
                tincidunt dictum molestie. Morbi at arcu eros. Cras pellentesque enim sit amet augue volutpat, tempor mollis nisl pulvinar. Quisque aliquet
                rhoncus felis, quis scelerisque turpis finibus sit amet. Sed efficitur vulputate est, ac dictum quam. Etiam at congue augue. Sed quis lectus
                vitae neque commodo molestie. Proin semper elit a augue viverra, id mattis ante tristique. Sed at mollis ligula. Donec posuere ligula massa,
                ut porta ex ullamcorper quis.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie nibh cursus tortor venenatis, non pharetra urna efficitur.Proin
                tincidunt dictum molestie. Morbi at arcu eros. Cras pellentesque enim sit amet augue volutpat, tempor mollis nisl pulvinar. Quisque aliquet
                rhoncus felis, quis scelerisque turpis finibus sit amet. Sed efficitur vulputate est, ac dictum quam. Etiam at congue augue. Sed quis lectus
                vitae neque commodo molestie. Proin semper elit a augue viverra, id mattis ante tristique. Sed at mollis ligula. Donec posuere ligula massa,
                ut porta ex ullamcorper quis.
                </p>
                
                <p><a href="peopleExtend">
                Click here to upload.
                </a>
                </p>
        
        </section>
        
        
        
        <section id="peopleNav">
        
        <nav>
            <ul class="nav1"> 
            <li class="nav2"><a href="">Well Done</a></li>
            <li class="nav2"><a href="">Medium Rare</a></li>
            <li class="nav2"><a href="">Rare</a></li>
            
            </ul>
        </nav>
        <?php
        $xml = simplexml_load_file("rap.xml");
			$underground = count($xml->children());
				for($x = 0; $x < $underground; $x++){
				    $randnum = rand(1,999);//Prints xml
					echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
            <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
              <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
            </div>
            <div class="mdl-card__supporting-text">
                  by '; echo $xml->music[$x]->artist; echo'
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                Add to Collection(Source)
              </a>
            </div>
          </div>'; echo'
         
         
         <!-- toggles widget -->
         <script>
        $(document).ready(function(){
            $("#asidePeople'; echo $randnum; echo'").hide();
            $("#playerBtn'; echo $randnum; echo'").click(function(){
                if(!$("#asidePeople'; echo $randnum; echo'").is(\':visible\')){
                    $(".playerStyle").hide(1000);
                    $("#asidePeople'; echo $randnum; echo'").toggle(1000);
                }else{
                    $(".playerStyle").hide(1000);
                }
        
        
            });
        });
        </script>
          
           <!-- link to the soundcloud api: https://developers.soundcloud.com/blog/html5-widget-api -->
        
        <div class="playerStyle" id="asidePeople'; echo $randnum; echo'">
            <iframe id="sc-widget" src="https://w.soundcloud.com/player/?url='; echo $xml->music[$x]->soundcloud; echo'" width="100%" height="200" scrolling="no" frameborder="no"></iframe>
            <script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
            <script type="text/javascript">
              (function(){
                var widgetIframe = document.getElementById(\'sc-widget\'),
                    widget       = SC.Widget(widgetIframe);
            
                widget.bind(SC.Widget.Events.READY, function() {
                  widget.bind(SC.Widget.Events.PLAY, function() {
                    // get information about currently playing sound
                    widget.getCurrentSound(function(currentSound) {
                      console.log(\'sound \' + currentSound.get(\'\') + \'began to play\');
                    });
                  });
                  // get current level of volume
                  widget.getVolume(function(volume) {
                    console.log(\'current volume value is \' + volume);
                  });
                  // set new volume level
                  widget.setVolume(50);
                  // get the value of the current position
                });
            
              }());
            </script>
        </div>    ';
      }
      
      
      ?>
       
        
        
        
		</section>	
		
		<!-- Toggle button -->
         <script type="text/javascript">
            function showHideDiv(id) {
                var e = document.getElementById(id);
                if(e.style.display == null || e.style.display == "none") {
                    e.style.display = "block";
                } else {
                    e.style.display = "none";
                }
            }
            </script>
        
      
    
