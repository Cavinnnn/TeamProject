<style>
#discover{
    margin: auto;
    width:97%;
    
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
$files= array(
  'http://ws.audioscrobbler.com/2.0/?method=track.getsimilar&artist=ed%20sheeran&track=perfect&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93',
  'http://ws.audioscrobbler.com/2.0/?method=track.getsimilar&artist=cher&track=believe&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93'
);

$dom = new DOMDocument();
$dom->appendChild($dom->createElement('similartracks'));

foreach ($files as $filename) {
  $addDom = new DOMDocument();
  $addDom->load($filename);
  if ($addDom->documentElement) {
    foreach ($addDom->documentElement->childNodes as $node) {
      $dom->documentElement->appendChild(
        $dom->importNode($node, TRUE)
      );
    }
  }
}

$dom->save('merged.xml');
$xml = simplexml_load_file("merged.xml");
						$discover = count($xml->similartracks->children());
							foreach($xml->similartracks->track as $item){
    							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $item->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $item->name; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $item->artist->name; echo' | Played: '; echo number_format(intval($item->playcount)); echo '
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="'; echo $item->url; echo '" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Add to Collection(Link to track)
                          </a>
                        </div>
                      </div>';
                  
                  }
    }
						
              ?>
      </div>
</center>