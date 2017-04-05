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

h1 {font-family: sans-serif;
text-align: center;
color: teal;}

table {
  font-family: sans-serif;
  text-align: center;
  position: relative;
  width: 500px;
}

th {
  display: none;
}

tr {
  position: absolute;
  opacity: 0.5;
  border-radius: 50%;
}

.adele {
  background-color: black;
  width: calc(2000000/2000000*300px);
  height: calc(2000000/2000000*300px);
  left: 300px;
  top: 100px;
}

.ed {
  background-color: green;
  width: calc(893000/2000000*300px);
  height: calc(893000/2000000*300px);
  left: 80px;
  top: 200px;
}

.sam {
  background-color: blue;
  width: calc(881000/2000000*300px);
  height: calc(881000/2000000*300px);
  left: 500px;
  top: 60px;
}

.elvis {
  background-color: pink;
  width: calc(881000/2000000*300px);
  height: calc(881000/2000000*300px);
  left: 600px;
  top: 200px;
}

.justin {
  background-color: teal;
  width: calc(645000/2000000*300px);
  height: calc(645000/2000000*300px);
  left: 600px;
  top: 100px;
}

.name {position: absolute;
width: 100%;
top: 45%;
font-size: 10px;
color: white;}

.sales {position: absolute;
width: 100%;
top: 55%;
  color: white;
font-size: 10px;}




</style>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    
    
    <h1>Top 5 Album Sales in 2015</h1>

<table cellspacing=0>
  <tr>
    <th class="x">Artist</th>
    <th class="y">Sales</th>
  </tr>
  
  
  <tr class="adele">
    <td class="name">Adele (25)</td>
    <td class="sales">2 million</td>
  </tr>

  <tr class="ed">
    <td class="name">Ed Sheeran (X)</td>
    <td class="sales">893K</td>
  </tr>

  <tr class="sam">
    <td class="name">Sam Smith (The Lonely Hour
)</td>
    <td class="sales">881K</td>
  </tr>

  <tr class="elvis">
    <td class="name">Elvis Presley (Id I Can Dream)</td>
    <td class="sales">881K</td>
  </tr>
  
  <tr class="justin">
    <td class="name">Justin Bieber (Purpose)</td>
    <td class="sales">645KK</td>
  </tr>
  

</table>
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
