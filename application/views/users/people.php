            
<style>
body{
  background-color: #D9DFDF;
}
#upload{
    width:100%;
    margin:0%;
    padding:0px;
    margin-bottom:9%;
}
#uploadImage{
    float:right;
    height:33%;
}
.demo-card-square.mdl-card {
  z-index:100!important;
  width: 320px;
  height: 320px;
  margin:3.5%;
  margin-bottom:7px;
  float:left;
  
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  
}

#peopleButton{
    width:100%;
    background-color:#f44336;
    height:4em;
}
.btn{
    position:relative;
    background-color: #f44336;
    color:white;


    padding: 17px 30px;
    text-decoration: none;
   }  

.btn:hover {
    background:#f45c42;
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
.undergroundWrapper{
    min-height:450px;
}





</style>


        <section id="upload" class="animated " style="padding:10px;">
        
                <div id="uploadImage">
                 <img style="height:50vh;max-height:338px;overflow:hidden;" src="http://simpleicon.com/wp-content/uploads/cloud-upload-1.png">
                </div>
                
                <h1>Would you like to upload music!?</h1>
                
                <p>This section our website is dedicated to upload music for underground artists. We try to sort music three different catogories based on what an admin likes.
                We feel that most up-and coming artists don't get enough recognition. If you can follow the link located underneath these paragraphs, you
                can upload music one it has previously been uploaded to soundcloud. The average waiting time for a link to be recognised is usually 3-5 hours.  
                </p>
                
                <p><a href="peopleExtend">
                Click here to upload.
                </a>
                </p>
        
        </section>
        
        <script>
            $(document).ready(function(){
                $("#all").show(1000);
                $("#wellDone").hide();
                $("#mRare").hide();
                $("#upload").hide().height('show');
                $("#upload").delay(2000).queue(function(next){
                    $("#upload").show().addClass("fadeInDown");
                    next();
                });
                $("#rareArea").hide();
                $("#wellDoneBtn").click(function(){
                    $("#all").hide();
                    $("#wellDone").show(1000);
                     $("#mRare").hide();
                    $("#rareArea").hide();
                    
                });
                
                
                $("#allBtn").click(function(){
                    
                    $("#all").show(1000);
                    $("#mRare").hide();
                    $("#wellDone").hide();
                    $("#rareArea").hide();
                });
                $("#mRareBtn").click(function(){
                    
                    $("#all").hide();
                    $("#mRare").show(1000);
                    $("#wellDone").hide();
                    $("#rareArea").hide();
                });
                $("#rareBtn").click(function(){
                    $("#all").hide();
                    $("#rareArea").show(1000);
                    $("#wellDone").hide();
                    $("#mRare").hide();
                });
             });
            
        </script>
        
        
        <section id="peopleButton">
            
        <div id="buttonLoad">
            <center>
                <button class="btn" id="allBtn">All</button>
                <button class="btn" id="wellDoneBtn">Well Done</button>
                <button class="btn" id="mRareBtn">Medium Rare</button>
                <button class="btn" id="rareBtn">Rare</button>
            </center>
        </div>
        </section>
        
        
        
                <div id="all" class="undergroundWrapper">
                    <?php
                        //Loads xml file with underground data in it
                        $xml = simplexml_load_file("rap.xml");
                        //counts how many child nodes(tracks) are in the xml data
            			$underground = count($xml->children());
            			//Created a variable to allow the storing of the number of approved child nodes as a string
            			$countedUnderground = "0";
            			//starts a loop to count the artists
            			for($x = 0; $x < $underground; $x++){
            			    //if statment stores the amount of approved child nodes in the countedUserground variable
            			    if($xml->music[$x]->approved["value"] == "1"){
            			        //add one to the coundedUnderground variable
            			        $countedUnderground++;
            			    }else{
            			        //do nothing
            			    }
            			   
            			}
            			//if the number of approved tracks is NOT 0
            			if($countedUnderground != "0"){
            			    //it will then run a loop to create the divs and styling for each track this is generated every time the page loads to insure the most recent data
            				for($x = 0; $x < $underground; $x++){
            				    if($xml->music[$x]->approved["value"] == "1"){
            				    $randnum = rand(1,999);
            				    //Prints xml
            					echo '<div style="z-index:-1;" class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->music[$x]->artist; echo'
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Play Track!
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
                                $("sc-widget'; echo $randnum; echo'").attr("src", $("sc-widget'; echo $randnum; echo'").attr("src"));
                            }
                    
                    
                        });
                    });
                    </script>
                      
                       <!-- link to the soundcloud api: https://developers.soundcloud.com/blog/html5-widget-api -->
                    
                    <div style="z-index: 999;" class="playerStyle" id="asidePeople'; echo $randnum; echo'">
                        <iframe style="z-index:9999;" id="sc-widget'; echo $randnum; echo'" src="https://w.soundcloud.com/player/?url='; echo $xml->music[$x]->soundcloud; echo'" width="100%" height="200" scrolling="no" frameborder="no"></iframe>
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
            				    }else{
            				      //do nothing if the track is not approved
            				    }
                  }
            			}else{
            			    //if there is no approved tracks it will display the following text
            			    //each text is different for admins and users
            			     if($user['admin']=="1"){
                                echo '<h3>There is currently no underground artists available!!</h3><br/><p>As an admin you can approve artists simply go to the dashboard by clicking your username in the top right</p>';
                              }else{
                                  echo '<h3>There is currently no underground artists available!!</h3>';
                              }
            			}
                  
                  
                  ?>
               </div>
               
               
               
               
               
               
               
               
               
                <div id="wellDone" class="undergroundWrapper">
                    <h1>This is The Well Done Section</h1>
                    <?php
                        //Loads xml file with underground data in it
                        $xml = simplexml_load_file("rap.xml");
                        //counts how many child nodes(tracks) are in the xml data
            			$underground = count($xml->children());
            			//Created a variable to allow the storing of the number of approved child nodes as a string
            			$countedUnderground = "0";
            			//starts a loop to count the artists
            			for($x = 0; $x < $underground; $x++){
            			    //if statment stores the amount of approved child nodes in the countedUserground variable
            			    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "0"){
            			        //add one to the coundedUnderground variable
            			        $countedUnderground++;
            			    }else{
            			        //do nothing
            			    }
            			   
            			}
            			//if the number of approved tracks is NOT 0
            			if($countedUnderground != "0"){
            			    //it will then run a loop to create the divs and styling for each track this is generated every time the page loads to insure the most recent data
            				for($x = 0; $x < $underground; $x++){
            				    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "0"){
            				    $randnum = rand(1,999);
            				    //Prints xml
            					echo '<div style="z-index:-1;" class="demo-card-square mdl-card mdl-shadow--2dp">
                        
                        <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
                        </div>
                        
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->music[$x]->artist; echo'
                         </div>
                        
                        <div class="mdl-card__actions mdl-card--border">
                          <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Play Track!
                          </a>
                        </div>
                    
                    
                    
                    
                    <!-- toggles widget -->
                    
                      </div>'; echo'
                    
                      
                     <script>
                    $(document).ready(function(){
                        $("#asidePeople'; echo $randnum; echo'").hide();
                        $("#playerBtn'; echo $randnum; echo'").click(function(){
                            if(!$("#asidePeople'; echo $randnum; echo'").is(\':visible\')){
                                $(".playerStyle").hide(1000);
                                $("#asidePeople'; echo $randnum; echo'").toggle(1000);
                            }else{
                                $(".playerStyle").hide(1000);
                                $("sc-widget'; echo $randnum; echo'").attr("src", $("sc-widget'; echo $randnum; echo'").attr("src"));
                            }
                    
                    
                        });
                    });
                    </script>
                      
                      
                      
                       <!-- link to the soundcloud api: https://developers.soundcloud.com/blog/html5-widget-api -->
                    
                    
                    
                    
                    <div class="playerStyle" id="asidePeople'; echo $randnum; echo'">
                        <iframe style="z-index:9999;" id="sc-widget'; echo $randnum; echo'" src="https://w.soundcloud.com/player/?url='; echo $xml->music[$x]->soundcloud; echo'" width="100%" height="200" scrolling="no" frameborder="no"></iframe>
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
            				    }else{
            				      //do nothing if the track is not approved
            				    }
                  }
            			}else{
            			    //if there is no approved tracks it will display the following text
            			    //each text is different for admins and users
            			     if($user['admin']=="1"){
                                echo '<h3>There is currently no underground artists available!!</h3><br/><p>As an admin you can approve artists simply go to the dashboard by clicking your username in the top right</p>';
                              }else{
                                  echo '<h3>There is currently no underground artists available!!</h3>';
                              }
            			}
                  
                  
                  ?>
               </div>
                
                
                
                
                
                
                
                
                
                
                
                <div id="mRare"  class="undergroundWrapper">
                    <h1>This is The Medium Rare Section</h1>
                    <?php
                        //Loads xml file with underground data in it
                        $xml = simplexml_load_file("rap.xml");
                        //counts how many child nodes(tracks) are in the xml data
            			$underground = count($xml->children());
            			//Created a variable to allow the storing of the number of approved child nodes as a string
            			$countedUnderground = "0";
            			//starts a loop to count the artists
            			for($x = 0; $x < $underground; $x++){
            			    //if statment stores the amount of approved child nodes in the countedUserground variable
            			    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "1"){
            			        //add one to the coundedUnderground variable
            			        $countedUnderground++;
            			    }else{
            			        //do nothing
            			    }
            			   
            			}
            			//if the number of approved tracks is NOT 0
            			if($countedUnderground != "0"){
            			    //it will then run a loop to create the divs and styling for each track this is generated every time the page loads to insure the most recent data
            				for($x = 0; $x < $underground; $x++){
            				    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "1"){
            				    $randnum = rand(1,999);
            				    //Prints xml
            					echo '<div style="z-index:-1;" class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->music[$x]->artist; echo'
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Play Track!
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
                                $("sc-widget'; echo $randnum; echo'").attr("src", $("sc-widget'; echo $randnum; echo'").attr("src"));
                            }
                    
                    
                        });
                    });
                    </script>
                      
                       <!-- link to the soundcloud api: https://developers.soundcloud.com/blog/html5-widget-api -->
                    
                    <div class="playerStyle" id="asidePeople'; echo $randnum; echo'">
                        <iframe style="z-index:9999;" id="sc-widget'; echo $randnum; echo'" src="https://w.soundcloud.com/player/?url='; echo $xml->music[$x]->soundcloud; echo'" width="100%" height="200" scrolling="no" frameborder="no"></iframe>
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
            				    }else{
            				      //do nothing if the track is not approved
            				    }
                  }
            			}else{
            			    //if there is no approved tracks it will display the following text
            			    //each text is different for admins and users
            			     if($user['admin']=="1"){
                                echo '<h3>There is currently no underground artists available!!</h3><br/><p>As an admin you can approve artists simply go to the dashboard by clicking your username in the top right</p>';
                              }else{
                                  echo '<h3>There is currently no underground artists available!!</h3>';
                              }
            			}
                  
                  
                  ?>
               </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div id="rareArea" class="undergroundWrapper">
                    <h1>This is The Rare Section</h1>
                    <?php
                        //Loads xml file with underground data in it
                        $xml = simplexml_load_file("rap.xml");
                        //counts how many child nodes(tracks) are in the xml data
            			$underground = count($xml->children());
            			//Created a variable to allow the storing of the number of approved child nodes as a string
            			$countedUnderground = "0";
            			//starts a loop to count the artists
            			for($x = 0; $x < $underground; $x++){
            			    //if statment stores the amount of approved child nodes in the countedUserground variable
            			    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "2"){
            			        //add one to the coundedUnderground variable
            			        $countedUnderground++;
            			    }else{
            			        //do nothing
            			    }
            			   
            			}
            			//if the number of approved tracks is NOT 0
            			if($countedUnderground != "0"){
            			    //it will then run a loop to create the divs and styling for each track this is generated every time the page loads to insure the most recent data
            				for($x = 0; $x < $underground; $x++){
            				    if($xml->music[$x]->approved["value"] == "1" && $xml->music[$x]->cat["value"] == "2"){
            				    $randnum = rand(1,999);
            				    //Prints xml
            					echo '<div style="z-index:-1;" class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->music[$x]->artist; echo'
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Play Track!
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
                                $("sc-widget'; echo $randnum; echo'").attr("src", $("sc-widget'; echo $randnum; echo'").attr("src"));
                            }
                    
                    
                        });
                    });
                    </script>
                      
                       <!-- link to the soundcloud api: https://developers.soundcloud.com/blog/html5-widget-api -->
                    
                    <div class="playerStyle" id="asidePeople'; echo $randnum; echo'">
                        <iframe style="z-index:9999;" id="sc-widget'; echo $randnum; echo'" src="https://w.soundcloud.com/player/?url='; echo $xml->music[$x]->soundcloud; echo'" width="100%" height="200" scrolling="no" frameborder="no"></iframe>
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
            				    }else{
            				      //do nothing if the track is not approved
            				    }
                  }
            			}else{
            			    //if there is no approved tracks it will display the following text
            			    //each text is different for admins and users
            			     if($user['admin']=="1"){
                                echo '<h3>There is currently no underground artists available!!</h3><br/><p>As an admin you can approve artists simply go to the dashboard by clicking your username in the top right</p>';
                              }else{
                                  echo '<h3>There is currently no underground artists available!!</h3>';
                              }
            			}
                  
                  
                  ?>
               </div>   
        </div>
        
		
		
	
        
      
    
