<style>
#discover{
    margin: auto;
    width:97%;
    
}
.demo-card-square.mdl-card {

  width: 320px;
  height: 320px;
  margin:3px;
  margin-bottom:7px;
  float:left;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  
}
</style>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <center>
			<div style="margin-top:50px;">
			 <h1>Discover</h1>
    <?php
    require_once 'spotify/Request.php';
    require_once 'spotify/Session.php';
    require_once 'spotify/SpotifyWebAPI.php';
    require_once 'spotify/SpotifyWebAPIException.php';

$session = new SpotifyWebAPI\Session('104f0adc29f64208a89b84139435d55f', 'e12be27b7762488c87444f678459ec29', 'https://teamproject-cavinn.c9users.io/users/discover');
$api = new SpotifyWebAPI\SpotifyWebAPI();

// Request a access token with optional scopes
$scopes = array(
    'playlist-read-private',
    'user-read-private'
);

$session->requestCredentialsToken($scopes);
$accessToken = $session->getAccessToken(); // We're good to go!

// Set the code on the API wrapper
$api->setAccessToken($accessToken);
$options = [
            'limit' => 20,
            'seed_tracks' => ['0c6xIDDpzE81m2q797ordA'],
        ];
$releases = $api->getRecommendations($options);


// Start using the API!
    if(isset($_POST['search'])){
      $searchTerm = $_POST['search'];
      $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$searchTerm&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
						$discover = count($xml->tracks->children());
							for($x = 0; $x < $discover; $x++){
    							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="'; echo $xml->tracks->track[$x]->url; echo '" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Add to Collection(Link to track)
                          </a>
                        </div>
                      </div>';
                  }
    }else{
      $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=tag.gettopartists&tag=adele&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
     foreach ($releases->tracks as $album) {
       $artistName = $album->artists[0]->name;
       $x = 0;
                  $id = $album->id;
                   $tracks1 = $api->getTrack($id);
    							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="width: 320px;height: 320px;background:url(\'\') top right 15% no-repeat #46B6AC;background-size:100% 100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $album->name; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by ';  echo $album->artists[0]->name; echo' | Preview:
                              
 
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="'; echo $album->external_urls->spotify; echo '" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Add to Collection(Link to track)
                          </a>
                        </div>
                      </div>';
                  }
    }
						
              ?>
      </div>
</center>