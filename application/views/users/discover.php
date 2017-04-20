<style>
#discover{
    margin: auto;
    width:97%;
    
}
body{
  background-color: #D9DFDF;
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
</style>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <center>
			<div style="margin-top:50px;margin 0 auto;">
			 <h1>Discover</h1>
		<div>
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

$user = $user['id'];
// Start using the API!
    if(isset($_POST['search'])){
      $searchTerm = $_POST['search'];
      $xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$searchTerm&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
						$discover = count($xml->tracks->children());
			      if($discover > 0){
							for($x = 0; $x < $discover; $x++){
    							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->tracks->track[$x]->image[3]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->tracks->track[$x]->name; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->tracks->track[$x]->artist->name; echo' | Played: '; echo number_format(intval($xml->tracks->track[$x]->playcount)); echo '
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="../like.php?mbid='; echo $xml->tracks->track[$x]->artist->mbid; echo'&user='; echo $user; echo'" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            <span class="fa fa-thumbs-o-up"></span>
                          </a>
                          <a href="" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            <span class="fa fa-thumbs-o-down"></span>
                          </a>
                        </div>
                      </div>';
                  }
			      }else{
			        echo '<h2>Theres no results for the search term '; echo $searchTerm; echo '</h2><br/><p>try searching things like artist name or track name or even a genre like pop or rock</p>';
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
            $mbid = $row['seed5'];
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
                        Like
                      </a>
                      <a href="" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Dislike
                      </a>
                    </div>
                  </div>';
              }
    }
						
              ?>
      </div>
    </div>
</center>