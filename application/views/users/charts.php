<style>
#charts{
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
    <div style="margin-top:50px;">
			 <h1>Charts</h1>
    <center>
    <div>
    <?php
						$xml = simplexml_load_file("http://ws.audioscrobbler.com/2.0/?method=user.getweeklytrackchart&user=rj&api_key=a3ea499c8bd4464f8ea1ab89bf2a7a93");
						$charts = count($xml->weeklytrackchart->children());
							for($x = 0; $x < $charts; $x++){
    							echo '<div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div style="background:url(\''; echo $xml->weeklytrackchart->track[$x]->image[2]; echo'\') top right 15% no-repeat #46B6AC;background-size:100%;" class="mdl-card__title mdl-card--expand">
                          <h2 class="mdl-card__title-text">'; echo $xml->weeklytrackchart->track[$x]->name; echo '</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                              by '; echo $xml->weeklytrackchart->track[$x]->artist; echo' | Played: '; echo number_format(intval($xml->weeklytrackchart->track[$x]->playcount)); echo '
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="'; echo $xml->weeklytrackchart->track[$x]->url; echo '" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Add to Collection(Link to track)
                          </a>
                        </div>
                      </div>';
                  }
              ?>
      </div>
</center>
