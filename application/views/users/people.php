<style>
#upload1{
    height:30px;
    width:300px;
    margin-top:10%;
}




</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <div>
            <center>
                <form >
                    <input type="text" name="textbox" id="upload1" placeholder="Name">
                    
                    <input id="submit" name="submit" type="submit" >
                </form>
            </center>
        </div>

			
    
		<div>
        <?PHP
          
          
          
          
          if (isset($_POST['submit'])) {
            $file ="rap.xml";
            
            
            $artist = $_POST['name'];
            
            $current = file_get_contents('rap.xml');
            
            
            $xml = simplexml_load_file($file) or die ("didn't load");
            
            $music = $xml->addChild('music');
            $genre = $xml->addChild('genre');
            $genre->addChild('name', $artist);
            
            file_put_contents($file,$xml->asXML());
            
            
            
            
            
            } 
          
          
          
        /*
        $xml = simplexml_load_file("rap.xml") or die ("didn't load");
        $underground = count($xml->children());
        for($x = 0; $x <  $underground; $x++){
            echo'name: '; echo $xml->genre[$x]->artist."<br>";
            echo'album: '; echo $xml->genre[$x]->album."<br>";
            echo'image: '; echo $xml->genre[$x]->image."<br>";
        }
        */
      
        ?>
      </div>
    
        
            <div class="panel panel-default">
               <div id="para">
                   <p>
                            <?php
                    
                    
                        $xml = simplexml_load_file("rap.xml") or die ("didn't load");
                       foreach($xml->children() as $genre) {
                       foreach($xml->children() as $artist){
                        
                        
                        $n = 1; // simple counter
                        echo "<tr>"; 
                        echo "<th scope=\"row\">" . $n . "</th>";
                        foreach($xml->children() as $artist){
                        echo "<td>" . $artist . "</td>";
                        echo "</tr>"; // end of row
                        $n++;
            
                        }
                       
                           
                       }
                       
                           
                       }
                          ?>
                        </p>
                 </div> 
            </div>
            
    
