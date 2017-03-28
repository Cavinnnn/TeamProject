<style>
.blue{
	
	height:500px;
	width:100%;
	
}
/* http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video */
#video{
	position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url() no-repeat;
    background-size: cover; 
}
footer{
	position:absolute;
}
</style>




	
	
<script src="https://api.spotify.com/v1/artists/1vCWHaC5f2uS3yhpwWbIA6/albums?album_type=SINGLE&offset=20&limit=10"></script>

<!-- video taken from: https://videos.pexels.com/videos/a-running-amplifier-1336 -->
<video id="video" width="100%" height="100%" autoplay muted loop>
	 <source src="../../backend-assets/video/video.mp4" type="video/mp4">
	 
 </video>
 
 
 
 <section class="blue">
	 <div id="form">
		 <center>
			 <form action="/users/discover" method="post">
				 <input type="text" name="search" placeholder="Search" style="height:20px; width:500px; margin-top:230px;"><br>
				 <input type="submit" id="search" class="btn btn-primary" value="Search" />
			</form>
		</center>
	</div>
	
 </section>
 


 
 

