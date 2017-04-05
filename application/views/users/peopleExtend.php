<style>
.margin-input{
    margin:10px;
}
</style>

<center>
    
    
<h1>Welcome *User*!</h1>

<form action="peopleExtend" method="post">
   
    <select name="genre">
    
      <option value="hip-hop">Hip-Hop</option>
      <option value="classical">Classical</option>
      <option value="pop">Pop</option>
      
    </select><br>
          
        
    
    <input type="text" name="artist" placeholder="Artist Name" class="margin-input"><br>
    <input type="text" name="title" placeholder="Track Name" class="margin-input"><br>
    <input type="text" name="img" placeholder="Link to track art" class="margin-input"><br>
    <input type="text" name="tags" placeholder="Tags seperated by comma" class="margin-input"><br>
    <input type="text" name="soundcloud" placeholder="Link to soundcloud track link" class="margin-input"><br>
    
    <input type="submit" name="submit"><br>
    
    <?php
    if (isset($_POST['submit'])) {
    	$data = "rap.xml";
    	$xml = simplexml_load_file("rap.xml");
    	$musicAdd = $xml->addChild("music");
    	$artist = $_POST["artist"];
    	$title = $_POST["title"];
    	$genre = $_POST["genre"];
    	$imglink = $_POST["img"];
    	$tags = $_POST["tags"];
    	$soundcloud = $_POST["soundcloud"];
    	$musicAdd->addChild("artist", $artist);
    	$musicAdd->addChild("title", $title);
    	$musicAdd->addChild("genre", $genre);
    	$musicAdd->addChild("soundcloud", $soundcloud);
    	$musicAdd->addChild("img", $imglink);
    	$musicAdd->addChild("tags", $tags);
    
    	$xml->asXML("rap.xml");
    	echo 'Congratulations, you have submitted your Music you will see it on the database once its approved!!, go back to the home page to view your submission. <a href="index.php">Click here</a>' ;
    }

?>
    
    
</form></center>



