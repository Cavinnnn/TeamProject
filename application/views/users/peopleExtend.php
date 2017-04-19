<style>
body{
   background-image: url("/backend-assets/img/turntable-1109588_1920.jpg");
   background-attachment: fixed;
}
.margin-input{
    margin:10px;
    width:200px;
    border-radius: 4px;
    color: black
}

.margin-input:focus{
    border: 2px solid black;
}

.genre{
    border-radius: 4px;
    margin-bottom: 10px;
}

.genre:focus{
    border: 2px solid;
}

.btn{
    margin-bottom: 300px;
    margin-top: 10px;
    background-color: #006ab4;
    color: white;
    padding: 4px;
}

.btn:hover{
    background-color: #00538d;
    color: white;
}

h1{
    color: white;
}
    
}

</style>






    

<center>
    
    <h1>Welcome <?php echo $user['name']; ?>!</h1> 
        
        
        
<form action="peopleExtend" method="post">
   
    <select name="genre" class="genre">
    
      <option value="hip-hop">Hip-Hop</option>
      <option value="classical">Classical</option>
      <option value="pop">Pop</option>
      <option value="rock">Rock</option>
      <option value="indie">Indie</option>
      <option value="jazz">jazz</option>
      <option value="folk">Folk</option>
      <option value="melody">Funk</option>
      <option value="regga">Reggae</option>
      <option value="electronic">Electronic</option>
      <option value="techno">Techno</option>
    </select><br>
          
        
    
    <input type="text" name="artist" placeholder="Artist Name" class="margin-input" required><br>
    <input type="text" name="title" placeholder="Track Name" class="margin-input" required><br>
    <input type="url" name="img" placeholder="Link to track art" class="margin-input" required><br>
    <input type="text" name="tags" placeholder="Tags seperated by comma" class="margin-input" required><br>
    <input type="url" name="soundcloud" placeholder="Link to soundcloud track link" class="margin-input" required><br>
    
    <input type="submit" name="submit"  button class="btn" style="width:100px;"><br>
    
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
        	$label = $musicAdd->addChild("approved");
            $approved->addAttribute('value', 0);
        	$xml->asXML("rap.xml");
        	echo 'Congratulations, you have submitted your Music you will see it on the database once its approved!!, go back to the home page to view your submission. <a href="index.php">Click here</a>' ;
        }

    ?>
    
    
</form></center>



