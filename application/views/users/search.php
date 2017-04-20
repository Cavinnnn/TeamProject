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
.wrapper {
  width: 65%;
  margin: 0 auto;
  padding-top:35vh;
}
.wrapper h1 {
  text-transform: uppercase;
  text-align: center;
}

.field {
  position: relative;
  height: 48px;
  padding: 16px 0 8px 0;
}
.field:after, .field:before {
  content: '';
  height: 2px;
  width: 80%;
  position: absolute;
  bottom: 10px;
  left: 10%;
  background-color: #cc9966;
}
.field:after {
  background-color: #7bafaf;
  -moz-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  transition: transform 0.3s;
}
.field .field-label {
  position: relative;
  margin: 0;
  display: block;
  font-size: 16px;
  line-height: 16px;
  color: #7bafaf;
  font-weight: 400;
  -moz-transform: translateY(24px);
  -ms-transform: translateY(24px);
  -webkit-transform: translateY(24px);
  transform: translateY(24px);
  transition: transform 0.3s;
  transform-origin: 0 50%;
}
.field .field-input {
  position: relative;
  display: block;
  border-radius:10px;
  width: 100%;
  padding: 8px 0;
  height: 32px;
  font-family: 'Roboto', sans-serif;
  line-height: 16px;
  font-size: 16px;
  background: #D9DFDF;
  border: none;
  -webkit-appearance: none;
  outline: none;
}

.has-label .field-label {
  -moz-transform: translateY(0);
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

.is-focused .field-label {
  color: #7bafaf;
}

.field.is-focused::after {
  -moz-transform: scaleX(1);
  -ms-transform: scaleX(1);
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

</style>




	
	
<script src="https://api.spotify.com/v1/artists/1vCWHaC5f2uS3yhpwWbIA6/albums?album_type=SINGLE&offset=20&limit=10"></script>

<!-- video taken from: https://videos.pexels.com/videos/a-running-amplifier-1336 -->
<video id="video" width="100%" height="100%" autoplay muted loop>
	 <source src="../../backend-assets/video/video.mp4" type="video/mp4">
	 
 </video>
 
 
 <script>
     $(document).ready(function(){
    		$('.field-input').focus(function(){
            		$(this).parent().addClass('is-focused has-label');
        	});
    
        	$('.field-input').blur(function(){
        		$parent = $(this).parent();
    
    	        if($(this).val() == ''){
    		            $parent.removeClass('has-label');
    	        }
    
    	        $parent.removeClass('is-focused');
    	    });
    });
 </script>
 <section class="blue">
	 <div id="form" class="wrapper" >
		 <center>
			 <form action="/discover" method="post" >
			     <div class="field" >
			         <label for="myinput" class="field-label">Search</label>
    				 <input style="font-color:white;" placeholder="Search" type="text" required name="search" id="myinput" class="field-input"/><br>
    				 <input type="submit" id="search" class="btn btn-primary" value="Search" />
    		     </div>
			</form>
		</center>
	</div>
	
 </section>
 


 
 

