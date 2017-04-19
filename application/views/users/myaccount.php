
<style>
     /* code taken from http://codepen.io/adamlindqvist/pen/wBOVaV */
     
    *, *:before, *:after {
  box-sizing: border-box;
}

body {
  font-family: "Montserrat", sans-serif;
}
/*pricing table*/


* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 10px;
    border-radius:8px;
}


.price {
    list-style-type: none;
    border: 1px solid #fff;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    border-radius:8px;
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
ul{
  background-color:#000;
}
.price .grey {
    background-color: #4caf50;
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

h1 {
  color: #FFF;
  font-size: 70px;
  text-align: center;
  line-height: 200px;
}

.container {
  margin: 5px auto; 
  max-width: 95%;

}

.sidebar {
  float:left;
  display: inline-block;
  width: 25%;
  border-radius: 3px;
  overflow: hidden;
}

.sidebar i {
  float:left;
  margin-right: 15px;
}
.demo-card-square.mdl-card {

  width: 320px;
  height: 320px;
  margin:10px;
  margin-bottom:7px;
  float:left;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  
}
.sidebar__header {
  vertical-align: top;
  background: #DFDFDF;
  padding: 20px;
  border-bottom: 1px solid #F0F1F2;
}
.sidebar__header img.sidebar__avatar {
  float: left;
  border-radius: 50%;
  margin-right: 10px;
}
.sidebar__header p {
  line-height: 3em;
  margin: 0;
}

.sidebar__menu-item {
  background: #FFF;
  padding: 20px;
  color: #AFAFAF;
  border-bottom: 1px solid #F0F1F2;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.sidebar__menu-item--active {
  color: #000;
  border-left: 3px solid #348AA7;
}
.sidebar__menu-item:hover {
  background: #f7f7f7;
  cursor: pointer;
}

.sidebar__badge {
  text-align: center;
  float: right;
  font-size: 70%;
  line-height: 1.8em;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  color: #FFF;
  background: #8ED081;
}

.main__avatar {
  background: url("<?php echo $user['pic']; ?>" );
  background-size: cover;
  width: 150px;
  height: 150px;
  display: block;
  vertical-align: middle;
  margin: 20px auto;
  border-radius: 50%;
  overflow: hidden;
}

.main__avatar:hover .main__avatar--overlay {
  opacity: 1;
  border-radius: 50%;
}
/*#595959, .6;*/
.main__avatar--overlay {
  opacity: 0;
  background: rgba(116, 116, 124, 0.6);
  color: #FFF;
  text-align: center;
  line-height: 150px;
  border-radius: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

.main__settings-form {
  max-width: 80%;
  display: block;
  margin: 0 auto;
}

.main__input-label {
  font-size: 80%;
  color: #C4C1C9;
  display: block;
  margin: 5px 5px 5px 5px;
}

.main__input {
  display: inline-block;
  width: 100%;
  border: 1px solid #F1F3F5;
  margin-bottom: 40px;
  outline: none;
  padding: 15px;
  border-radius: 3px;
  color: #000;
  font-family: "Montserrat", sans-serif;
}
.main__input:focus {
  border: 1px solid #348AA7;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.btn {
  margin-bottom: 20px;
  font-family: "Montserrat", sans-serif;
  border: none;
  outline: none;
  padding: 15px 25px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.main__save-button {
  color: #FFF;
  background-color: ##3F3F3F;
}
.main__save-button:hover {
  background-color: #67818A;
  cursor: pointer;
}

.main__cancel-button {
  color: #FFF;
  background: #CCC;
}
.main__cancel-button:hover {
  background-color: #b3b3b3;
  cursor: pointer;
}


@media (max-width: 764px) {
  .sidebar {
    width: 100%;
    margin-bottom: 20px;
  }

  .sidebar__menu-item {
    padding: 15px;
  }

  .main {
    width: 100%;
    margin: 0;
  }

  h1 {
    font-size: 44px;
  }

}

</style>
        
    <!-- toggles innerpages -->
         <script>
        $(document).ready(function(){
            $("#chpassArea").hide();
            $("#adminArea").hide();
            $("#upgrade").hide();
            $("#myDetails").show(1000);
            $("#changePass").click(function(){
              $(".main").hide(1000);
              $("#chpassArea").toggle(1000);
            });
            $("#myDetailsBtn").click(function(){
              $(".main").hide(1000);
              $("#myDetails").toggle(1000);
            });
            $("#adminDash").click(function(){
              $(".main").hide(1000);
              $("#adminArea").toggle(1000);
            });
            $("#upgradeBtn").click(function(){
              $(".main").hide(1000);
              $("#upgrade").toggle(1000);
            });
        });
        </script>
        <?php if($user['admin']=="1"){
          echo '<script>$(document).ready(function(){$("#myDetails").hide();$("#adminArea").show(1000);});</script>';
        }?>
<div class='container'>
  <div class='sidebar'>
    <div class='sidebar__header'>
      <img alt='profilepic' class='sidebar__avatar' src="<?php echo $user['pic']; ?>" height="48" width="48">
      <p>Hi <?php echo $user['name']; ?>!</p>
    </div>
      <?php if($user['admin']=="1"){
        echo '<div id="adminDash" class=\'sidebar__menu-item\'><i class=\'a\' >Admin Dahboard</i></div>';
      }?>
    <div id="myDetailsBtn" class='sidebar__menu-item'>
       <i class='a'>My Details</i>
    </div>
    <div id="upgradeBtn" class='sidebar__menu-item'>
       <i class='a'>Upgrade</i>
    </div>
    <div id="changePass" class='sidebar__menu-item'>
      <i class='a'>Change My Password</i>
    </div>
    <div class='sidebar__menu-item'>
      <a href="/users/logout"><i class='a'>Logout</i></a>
    </div>
   
<br>
  </div>
  <div class='main' id="upgrade" style="float:right;width:70%;">
    <div class='main__header'>
    </div>
    <div class='main__content'>
      <div class='main__avatar'>
        <div class='main__avatar--overlay'>
          <!-- echos users name here-->
          <?php echo $user['name']; ?>
        </div>
      </div>
      <div class='main__settings-form'>
        <h2>Upgrade</h2> 
        <br/>
        <!--this controls the display of the account type
        Firsty checks for admin if the user is an admin it will display that it is an admin account
        if the user is not an admin it will check if the package is 0 or 1 
        if the package is 0 it will be a free plan 
        if the package is 1 it is a paid plan-->
        <?php if($user['admin']=="1"){
          echo '<p style="color:green;font-size:25px;">Admin Account[Free]</p>';
        }elseif($user['package']=="0"){
          echo '<p style="color:red;font-size:25px;">Free Plan [Hours left Here]</p>';
        }else{
          echo '<p style="color:green;font-size:25px;">Paid Plan [Hours left Here]</p>';
        }
        
        ?>
        <br/>
        [TO BE INTEGRATED WITH PAYMENT SYSTEM]
        <br/><br/>
        <div class="columns">
          <ul class="price">
            <li class="header">Basic</li>
            <li class="grey">€1.00 / week</li>
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
        
        </div>
    </div>
  </div>
  <div class='main' id="myDetails" style="float:right;width:70%;">
    <div class='main__header'>
    </div>
    <div class='main__content'>
      <div class='main__avatar'>
        <div class='main__avatar--overlay'>
          <?php echo $user['name']; ?>
        </div>
      </div>
      <div class='main__settings-form'>
        <h2>My Details</h2> 
        <br/>
        <!--this controls the display of the account type
        Firsty checks for admin if the user is an admin it will display that it is an admin account
        if the user is not an admin it will check if the package is 0 or 1 
        if the package is 0 it will be a free plan 
        if the package is 1 it is a paid plan-->
        <?php if($user['admin']=="1"){
          echo '<p style="color:green;font-size:25px;">Admin Account[Free]</p>';
        }elseif($user['package']=="0"){
          echo '<p style="color:red;font-size:25px;">Free Plan [Hours left Here]</p>';
        }else{
          echo '<p style="color:green;font-size:25px;">Paid Plan [Hours left Here]</p>';
        }
        
        ?>
        <br/>
        <p style="font-size:20px;color:gray;">Username: <span style="color:black;"><?php echo $user['name']; ?></span></p>
        <p style="font-size:20px;color:gray;">E-Mail: <span style="color:black;"><?php echo $user['email']; ?></span></p>
        <p style="font-size:20px;color:gray;">Gender: <span style="color:black;"><?php echo $user['gender']; ?></span></p>
        <p style="font-size:20px;color:gray;">Phone: <span style="color:black;"><?php echo $user['phone']; ?></span></p>
        <p style="font-size:20px;color:gray;">Account Created: <span style="color:black;"><?php echo $user['created']; ?></span></p>
      </div>
    </div>
  </div>
  <div class='main' id="chpassArea" style="float:right;width:70%;">
    <div class='main__header'>
    </div>
    <div class='main__content'>
      <!--<div class='main__avatar'>
        <div class='main__avatar--overlay'>
          <?php echo $user['name']; ?>
        </div>
      </div>-->
      <div class='main__settings-form'>
        <h3>You Can Change Your Password Here</h3> 
        <form action='#' method='post'>
          <label class='main__input-label'>Your Current Password:</label>
          <input class='main__input' placeholder='Current Password' type='password'>
          <label class='main__input-label'>Your New Password:</label>
          <input class='main__input' placeholder='New Password' type='password'>
          <label class='main__input-label'>Confirm Your New Password:</label>
          <input class='main__input' placeholder='Confirm New Password' type='password'>
        </form>
        
        <button class='btn main__save-button'>Save</button>
        <button class='btn main__cancel-button'>Cancel</button>
      </div>
    </div>
  </div>
  <div class='main' id="adminArea" style="float:right;width:75%;">
    <div class='main__header'>
    </div>
    <div class='main__content'>
      <!--<div class='main__avatar'>
        <div class='main__avatar--overlay'>
          <?php echo $user['name']; ?>
        </div>
      </div>-->
      <div class='main__settings-form'>
        <h3>Admin Area</h3>
        <p>The following submitions are ready for approval.</p>
        <?php
        //checks the url to see if ?approved or &approved is set in the url meaning the admin has taken an action
        if (isset($_GET['approved'])) {
          //checks if approved is = 1 or 0
          if($_GET['approved']=="1"){
              //if it is 1 it means the track has been approved 
              //it will then open the xml file
            	$data = "rap.xml";
            	$xml2 = simplexml_load_file("rap.xml");
            	//set the tracks index number to x2
            	$x2 = $_GET['location'];
            	$cat = $_POST['cat'];
            	//gets the path of the track in the xml file and stores it in a result variable
            	$result = $xml2->xpath('/underground/music')[$x2];
            	//changes the approved value to 1 from 0
            	$result->approved["value"] = "1";
            	$result->cat["value"] = $cat;
            	//saves the tracks title to a titleSong variable
              $titleSong = $_GET['title'];
              //Saves the xml
            	$xml2->asXML("rap.xml");
            	//displays a notification to the user about the actions taken place
            	echo '<p style="float:left;color:green;">You have approved '; echo $titleSong; echo'!!</p><br/><br/>' ;
            
          }else{
              //if it is not 1 it means the track has been rejected 
              //it will then open the xml file
              $data = "rap.xml";
            	$xml2 = simplexml_load_file("rap.xml");
            	//set the tracks index number to x2
            	$x2 = $_GET['location'];
            	//gets the path of the track in the xml file and stores it in a result variable
            	$result = $xml2->xpath('/underground/music')[$x2];
            	//changes the approved value to 2 from 0(2 meaning it is rejected)
            	$result->approved["value"] = "2";
            	//saves the tracks title to a titleSong variable
              $titleSong = $_GET['title'];
              //saves the xml
            	$xml2->asXML("rap.xml");
            	//displays a notification to the user about the actions taken place
            	echo '<p style="float:left;color:red;">You have rejected '; echo $titleSong; echo'!!</p><br/><br/>' ;
            
          }
        }
        //loads the xml containing the underground data
        $xml = simplexml_load_file("rap.xml");
        //counts all the child nodes(tracks) in the underground xml file
			  $underground = count($xml->children());
			  //for loop to parse the data into divs and styling
  				for($x = 0; $x < $underground; $x++){
  				    $randnum = rand(1,999);
  				    //only displays tracks that have not been checked
  				    if($xml->music[$x]->approved["value"] == "0"){
  				      echo '<div style="" class="demo-card-square mdl-card mdl-shadow--2dp">
              <div style="background:url(\''; echo $xml->music[$x]->img; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">'; echo $xml->music[$x]->title; echo '</h2>
              </div>
              <div class="mdl-card__supporting-text">
                    by '; echo $xml->music[$x]->artist; echo'
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a id="playerBtn'; echo $randnum; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Play Song
                </a>
                <form method="post" action="'; echo base_url(); echo "users/account/?approved=1&location=$x&title="; echo $xml->music[$x]->title; echo'" style="max-width: 50%;display: inline-block;float: left;
">
                <select name="cat" style="margin-top:7px;"">
                  <option value="0">Well Done</option>
                  <option value="1">Medium Rare</option>
                  <option value="2">Rare</option>
                </select>
                <input style="margin-top:5px;" value="approve" type="submit" id="approvedBtn'; echo $randnum; echo'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"/>
                </form>
                <a id="rejectBtn'; echo $randnum; echo'" href="'; echo base_url(); echo "users/account/?approved=2&location=$x&title="; echo $xml->music[$x]->title; echo'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Reject
                </a>
                
              </div>
            </div>
           
            '; echo'
         
         
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
				      //do nothing
				    }
					
      }
      
      
      ?>
      </div>
    </div>
  </div>
</div>