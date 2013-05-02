<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Injustice Results</title>
	<link  rel="stylesheet"  href="css/injustice-style.css" type="text/css">
   
</head>

<body>
	
    <!-- MODALS -->

    <div id="video_modal">
		<div class="video_content"></div>
        <div class="video_thumb">
        <?php for($i=0;$i<13; $i++){ ?>
            <div id="video_thumb_div<?= $i ?>" class="video_thumb_div" ></div> 
		<?php } ?>            
        </div>
	</div>
    
    
    <div id="bio_modal">
		<div class="bio_content"></div>
        
	</div>
    
    
    <div id="about_modal" style="display:none; width:870px; height:530px; background-color:#000; padding:30px; color:#c2c2c2">
    	<h2 style="color:#c58612">ABOUT BATTLE ARENA +</h2><BR>
    		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.<br><br> 
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?<br>
<br>

Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
    </div>
    
    
    <!-- PAGE BEGINGS -->
    
	<!--Left Background Margin -->
    <div id="left-side-outer">
    	<div id="left-side"></div>
    </div><!-- /Left Background Margin -->
    
    
    <div id="center-column">
    	<header>
            <div id="top_header">
                <div><img src="images/gods_among_us.jpg"></div>
                <div><img src="images/battle_arena.jpg"></div>
                <div><p style="font-size:10px; color:#393939">Brought to you by <a href="http://www.dccomics.com/" target="_blank">DCcomics.com</a> and <a href="http://www.injustice.com/" target="_blank">Injustice: Gods Among Us</a></p></div>
            </div><!-- /top header -->
            <div id="navbar_bg"></div>
            <nav id="navbar" >
                
                    <?php for($i=1; $i<8; $i++){  ?>
                    <div id="menu_<?= $i ?>" style="cursor:pointer"><img src="images/menu_<?= $i ?>.png"><img src="images/menu_<?= $i ?>_on.png" style="display:none"></div>
                    <?php } ?>
                    
                <div id="about" style="margin-top:-5px; cursor:pointer"><img src="images/about.png"><img src="images/about_on.png" class="displayNone"></div>
                <!-- BRICKS MOVIE -->
                <div id="movieDiv" style="position:absolute; top:70px; z-index:9998; width:1000px; margin-left:140px; display:none">
                    <div id='movie'></div>
                   
                </div>
            </nav>
    	</header>
       
    
        
        <div id="main-content">
        	<div><img src="images/main_bg.jpg"></div>
            <!-- Batman -->
            <div id="batman" ><img src="images/batman_large.png"></div>
            <!-- Batman Glow -->
            <div id="batmanGlow" ><img src="images/batman_large_glow.png" ></div>
            <!-- Transparent div for mouseover glow effect-->
            <div id="batmanClick" class="playerCard" data-card="batman" ></div>
            <!-- Battle Arena Champion : BATMAN -->
            <div id="champion" ><img src="images/champion.png"></div>
        
   	    <div style="width:754px; height:752px; position:absolute; z-index:7; left:527px; top:0px">
        		<?php
				$cardsArr = array('bane','wonderwoman','joker', 'shazam', 'greenlantern', 
				'hawkgirl', 'greenarrow', 'aquaman', 'flash', 'harleyquinn',
				'cyborg', 'lex', 'sinestro',
				'grundy','superman');
				for($i=0; $i<sizeOf($cardsArr); $i++){ ?>
            	<div id="playerCard<?= $i ?>" class="playerCard" data-card="<?= $cardsArr[$i] ?>" ><img src="images/<?= $cardsArr[$i] ?>.png" class="grayScale"></div>
				<?php } ?>
                <div id="capeMask" ><img src="images/cape_mask.png" ></div>
          </div>
        </div><!-- main-content -->
        
         <div id="superfights" class="roundTitle">
        	<img src="images/superfights.jpg"><img src="images/superfights_on.jpg" class="displayNone">
            <?php for($i=1;$i<5;$i++){ ?>
        	<div id="playlist<?= $i ?>" class="vs_divs"><img src="images/superfight<?= $i ?>.jpg"><img src="images/superfight<?= $i ?>_on.jpg" class="displayNone"></div>
            <?php } ?>
        </div><!-- superfights -->
        
        <div id="quarter_finals" class="roundTitle">
        	<img src="images/quarter_finals.jpg"><img src="images/quarter_finals_on.jpg" class="displayNone">
        	<?php for($i=1;$i<5;$i++){ ?>
        	<div id="playlist<?= (4+$i) ?>" class="vs_divs"><img src="images/quarter_finals<?= $i ?>.jpg"><img src="images/quarter_finals<?= $i ?>_on.jpg" class="displayNone"></div>
            <?php } ?>
        </div><!-- quarter_finals -->
        
        
        <div id="semifinals" class="roundTitle">
        	<img src="images/semifinals.jpg"><img src="images/semifinals_on.jpg" class="displayNone">
        	<?php for($i=1;$i<3;$i++){ ?>
        	<div id="playlist<?= (8+$i) ?>" class="vs_divs"><img src="images/semifinals<?= $i ?>.jpg"><img src="images/semifinals<?= $i ?>_on.jpg" class="displayNone"></div>
            <?php } ?>
        </div><!-- semifinals -->
        
        
        <div id="finale" class="roundTitle">
        	<img src="images/finale.jpg"><img src="images/finale_on.jpg" class="displayNone">
        	
        	<div id="playlist11" class="vs_divs"><img src="images/finale1.jpg"><img src="images/finale1_on.jpg" class="displayNone"></div>
           
        </div><!-- finale -->
        
        
        <div id="footer">
        	<div id="icon_links">
            	<ul>	
                	<li><a href="http://www.xbox.com/" target="_blank"><img src="images/xbox360.jpg"></a></li>
                    <li><a href="http://www.xbox.com/" target="_blank"><img src="images/xboxlive.jpg"></a></li>
                    <li><a href="http://us.playstation.com/" target="_blank"><img src="images/ps3.jpg"></a></li>
                    <li><a href="http://us.playstation.com/psn/" target="_blank"><img src="images/psn.jpg"></a></li>
                    <li><a href="http://www.nintendo.com/wiiu" target="_blank"><img src="images/wii.jpg"></a></li>
                    <li><a href="http://www.netherrealm.com/" target="_blank"><img src="images/nether.jpg"></a></li>
                    <li><a href="http://www.dccomics.com/" target="_blank"><img src="images/dccomics.jpg"></a></li>
                    <li><a href="http://www.warnerbros.com/" target="_blank"><img src="images/wb.jpg"></a></li>
                </ul>
            </div><!-- /icon_links -->
            
            <div id="legal1">
            	INJUSTICE: GODS AMONG US software © 2012 Warner Bros. Entertainment Inc. Developed by NetherRealm Studios. All other trademarks and copyrights are the property of their respective owners. "PlayStation" and the "PS" Family logo are registered trademarks and the "PS3" and the PlayStation Network logo are trademarks of Sony Computer Entertainment Inc. Microsoft, Xbox, Xbox 360, Xbox LIVE, and the Xbox logos are trademarks of the Microsoft group of companies and are used under license from Microsoft. Nintendo trademarks and copyrights are properties of Nintendo. All rights reserved.
            </div><!-- /legal1 -->
            
            <div id="legal2">
            	
                <div class="left_float"><img src="images/rating.jpg"></div>
                <div class="left_float"><img src="images/wb_logo.jpg"></div>
                <div  >DC LOGO, and all characters, their distinctive likenesses, and related elements are trademarks of DC Comics © 2012.
NETHERREALM STUDIOS LOGO, WB GAMES LOGO, WB SHIELD: ™ & © Warner Bros. Entertainment Inc.
(s12)</div>
            </div><!-- /legal2 -->
        
        </div><!-- /footer -->
        
    </div><!--/center-column -->
    
    <!--Right Background Margin -->
    <div id="right-side-outer">
    	<div id="right-side"></div>
    </div><!--Right Background Margin -->


</body>
<script src="http://code.jquery.com/jquery-latest.min.js" language="javascript"></script>
<script src="lib/jquery.bpopup.min.js" language="javascript"></script><!-- Modal http://dinbror.dk/blog/bPopup/ -->
<script src="lib/jquery.sticky.js" language="javascript"></script><!-- http://labs.anthonygarand.com/sticky/ -->
<script src="lib/jquery.jsmovie.1.4.3b.min.js" language="javascript"></script><!-- jsMovie https://code.google.com/p/jsmovie/ -->
<script src="lib/jquery.easing.min.js" language="javascript"></script>
<script>
	
    $(document).ready(function (){
		
		/************************************************************************************
		BRICKS ANIMATION
		*************************************************************************************/		
		
		$('#movie').jsMovie({
			
			images : ['Breaking-Frames.png'],
		   	folder : 'images/',
			height : 844, width: 923,
		   	grid   : {height:844, width:923, columns:25, rows:1},
		   	showPreLoader : false,
		   	playOnLoad    : false,
			repeat		: false,
		   	fps:18     
		});
		
		$('#movie').on('ended', function(e) {
			$('#movieDiv').hide();
		});
		$('#play').click(function(){
			$('#movie').jsMovie('play');
		});
	
		$('#stop').click(function(){
			$('#movie').jsMovie('stop');
		});
	
		$('#pause').click(function(){
			$('#movie').jsMovie('pause');
		});

		function playMovie(){
			setTimeout(function(){
				$('#movieDiv').show();
				$('#movie').jsMovie('play');
			},500);	
		}
		/************************************************************************************
		Sticky Nav
		*************************************************************************************/
		$("#navbar").sticky({topSpacing:0});
		$("#navbar_bg").sticky({topSpacing:-77});
		
		var navbarHeight=90;//for the scrollTo
		/************************************************************************************
		Nav Menu scroll to with easing effect
		*************************************************************************************/
		<?php for($i=1;$i<5; $i++){ ?>
        $("#menu_<?= $i ?>").click(function (e){
            e.preventDefault();
			if($(window).scrollTop() != $("#superfights").offset().top - navbarHeight)
				playMovie();
			
			$('html, body').animate({
				scrollTop: $("#superfights").offset().top - navbarHeight
				}, { 
				easing: 'easeOutBounce',
				duration: 1500});
			
			
			
			
			
			
			var imgArray = $("#superfights").children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='none';
			imgArray[1].style.display='inline';
			
			
			
		
		
        });
		<?php } ?>
		$("#menu_5").click(function (e){
            e.preventDefault();
			
			$('html, body').animate({
				scrollTop: $("#quarter_finals").offset().top-navbarHeight
				}, {
				easing: 'easeOutBounce',
				duration: 1700});
				
			if($(window).scrollTop() != $("#quarter_finals").offset().top - navbarHeight)
				playMovie();
				
			var imgArray = $("#quarter_finals").children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='none';
			imgArray[1].style.display='inline';
		
        });
		
		$("#menu_6").click(function (e){
            e.preventDefault();
			
			$('html, body').animate({
				scrollTop: $("#semifinals").offset().top-navbarHeight
				}, {
				easing: 'easeOutBounce',
				duration: 1800});
				
			if($(window).scrollTop() != $("#semifinals").offset().top - navbarHeight)
				playMovie();
				
			var imgArray = $("#semifinals").children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='none';
			imgArray[1].style.display='inline';	
		
        });
		
		$("#menu_7").click(function (e){
            e.preventDefault();
			
			$('html, body').animate({
				scrollTop: $("#finale").offset().top-navbarHeight
				}, {
				easing: 'easeOutBounce',
				duration: 2000});
			
			if($(window).scrollTop() != $("#finale").offset().top - navbarHeight)
				playMovie();
				
			var imgArray = $("#finale").children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='none';
			imgArray[1].style.display='inline';	
		
        });
		
		
		
		
		
		<?php for($i=1;$i<8; $i++){ ?>
        $("#menu_<?= $i ?>").mouseover(function (e){
            e.preventDefault();
			
			
			
			var imgArrayMenu = $("#menu_<?= $i ?>").children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='none';
			imgArrayMenu[1].style.display='inline';
			
			
		
        });
		<?php } ?>
		
		
		
		
		<?php for($i=1;$i<8; $i++){ ?>
        $("#menu_<?= $i ?>").mouseout(function (e){
            e.preventDefault();
			
			
			
			var imgArrayMenu = $("#menu_<?= $i ?>").children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='inline';
			imgArrayMenu[1].style.display='none';
			
			
		
        });
		<?php } ?>
		
		
		$("#about").mouseover(function (e){
            e.preventDefault();
			
			
			
			var imgArrayMenu = $("#about").children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='none';
			imgArrayMenu[1].style.display='inline';
			
			
		
        });
		
		$("#about").mouseout(function (e){
            e.preventDefault();
			
			
			
			var imgArrayMenu = $("#about").children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='inline';
			imgArrayMenu[1].style.display='none';
			
			
		
        });
		
		$("#about").click(function (e){
            e.preventDefault();
			$('#about_modal').bPopup();
			
			
			
		
        });
		
		/************************************************************************************
		mouseover  class="roundTitle"
		*************************************************************************************/
		$(".roundTitle").mouseover(function (e){
            e.preventDefault();
			var imgArray = $(this).children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='none';
			imgArray[1].style.display='inline';
		});//roundTitle mouseover
		
		$(".roundTitle").mouseout(function (e){
            e.preventDefault();
			var imgArray = $(this).children('img').map(function(){
				return this;
			}).get();
			imgArray[0].style.display='inline';
			imgArray[1].style.display='none';
		});//roundTitle mouseout
		
		/************************************************************************************
		mouseover  Batman - glow
		*************************************************************************************/
		$("#batmanClick").mouseover(function (e){
            e.preventDefault();
			$("#batmanGlow").animate({
				opacity:'1'
			
				}, {
				easing: 'easeOutBounce',
				duration: 1000});
		});//batmanClick
		
		$("#batmanClick").mouseout(function (e){
            e.preventDefault();
			$("#batmanGlow").animate({
				opacity:'0'
				
				}, {
				easing: 'easeOutBounce',
				duration: 1000});
		});//batmanClick
		
		/************************************************************************************
		mouseover  cards
		*************************************************************************************/
		$(".playerCard").mouseover(function (e){
            e.preventDefault();
			var childImg = $(this).children('img');
			curHeight = childImg.height();
			autoHeight =childImg.css('height', 'auto').height();
			
			childImg.removeClass();
			childImg.animate({
				height:'220px'
				}, {	
				easing: 'easeInSine',			
				duration: 100
			});//animate			
			$(this).css('z-index','20');
			
			
		});//playerCard
		
		$(".playerCard").mouseout(function (e){
            e.preventDefault();
			$(this).children('img').addClass('grayScale');					
			$(this).children('img').animate({
				height:autoHeight
				}, {
				easing: 'easeOutSine',	
				duration: 500
			});//animate
			$(this).css('z-index','auto');
			
			
		});//playerCard
		
		/************************************************************************************
		mouseover  vs divs
		*************************************************************************************/	
		
		
		
		
		 $(".vs_divs").mouseover(function (e){
            e.preventDefault();
				
			var imgArrayMenu = $(this).children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='none';
			imgArrayMenu[1].style.display='inline';
			
			
		
        });
		
		
		
		 $(".vs_divs").mouseout(function (e){
            e.preventDefault();
				
			var imgArrayMenu = $(this).children('img').map(function(){
				return this;
			}).get();
			imgArrayMenu[0].style.display='inline';
			imgArrayMenu[1].style.display='none';
        });
		
		/************************************************************************************
		MODAL
		*************************************************************************************/	
		var playlists = new Array(
		'PL07cv15WuZRV0n861i9T_UKZTl5JnjN_u',//superfight1
		'PL07cv15WuZRUSud6sOzN2n4U9kkZTjIXz',//superfight2
		'PL07cv15WuZRUJ2BHgptHBPs2Z9o-QgVjR',//superfight3
		'PL07cv15WuZRUJ2BHgptHBPs2Z9o-QgVjR',//superfight4
		'PL07cv15WuZRX4l4AtgBsJ-MitZXGzHAdQ',//QF
		'PL07cv15WuZRX4l4AtgBsJ-MitZXGzHAdQ',//QF
		'PL07cv15WuZRX4l4AtgBsJ-MitZXGzHAdQ',//QF
		'PL07cv15WuZRX4l4AtgBsJ-MitZXGzHAdQ',//QF
		'PL07cv15WuZRU_em35hXIflPGfp311ST32', //SM
		'PL07cv15WuZRU_em35hXIflPGfp311ST32', //SM
		'PL07cv15WuZRXMjBUHfLPObPxKouWug6mN');//F
		
		$('.vs_divs').on('click', function(e) {
			
                e.preventDefault();
				playlistIndex = parseInt(this.id.substr(8))-1;
				
				
				var playlistToPlay = playlists[playlistIndex];
				var playlistURL = 'http://gdata.youtube.com/feeds/api/playlists/'+playlistToPlay+'?v=2&alt=json';
				var youURL = 'http://www.youtube.com/watch?v=';
				
				
				var videosCount=0;
				var thumbs = new Array();
				var videoIDs = new Array();
				var currentVideo = 0;
				//retrieve json
				jQuery.getJSON(playlistURL, function(data) {
				
					jQuery.each(data.feed.entry, function(i, item) {
						var feedTitle = item.title.jQueryt;
						var feedURL = item.link[1].href;
						var fragments = feedURL.split("/");
						videoIDs[i] = fragments[fragments.length - 2];
						//urls[i] = youURL + videoID;
						thumbs[i] = "http://img.youtube.com/vi/"+ videoIDs[i] +"/1.jpg";
						videosCount = data.feed.entry.length;
						
						
					});

		
					 content = $('.video_content'); 
					
					 //loading thumbs
					 var divCounter=0;
					 for(var j=0;j<videosCount; j++){
					 	$('<img  class="thumbs" id="'+videoIDs[j]+'" src="http://img.youtube.com/vi/'+ videoIDs[j] +'/1.jpg">').load(function() {						 
						 	$(this).width('120px').height('90px').appendTo('#video_thumb_div'+divCounter);
						  	divCounter++;
						});
					 }
					
					
					$('#video_modal').bPopup({
						onOpen: function() {
							content.html('<iframe width="946" height="532" src="http://www.youtube.com/embed/'+videoIDs[0]+'" frameborder="0" allowfullscreen></iframe>' || '');
							 
						},
						onClose: function() {
							content.empty();
							<?php for($i=0;$i<13; $i++){ ?>
							$('#video_thumb_div<?= $i ?>').empty();
							<?php } ?>
	
						
						}
					});
					
					$('.video_thumb_div').on('click', function(e) {
						 videoId = this.id.substr(15)//remove "video_thumb/div"
						 content.html('<iframe width="946" height="532" src="http://www.youtube.com/embed/'+videoIDs[videoId]+'" frameborder="0" allowfullscreen></iframe>' || '');
						 //replacing the thumb image
						 /*
						 $(this).empty();
						 $('<img  class="thumbs" id="'+videoIDs[currentVideo]+'" src="http://img.youtube.com/vi/'+ videoIDs[currentVideo] +'/1.jpg">').load(function() {						 
						 	$(this).width('120px').height('90px').appendTo('#video_thumb_div'+currentVideo);
						  	currentVideo = videoId;
						});
						*/
						 
						 
						 
					 })//thumbs click
					
					
					
			 });//JSON
		 });//vs_divs CLICK
		 
		 
		 
		 
		 
		 
		 $('.playerCard').on('click', function(e) {
			
         	e.preventDefault();
			var charName = this.getAttribute('data-card')
			bioContent = $('.bio_content'); 
			$('#bio_modal').bPopup({
				onOpen: function() {
					
					bioContent.html('<iframe width="802" height="507"  src="/#/bios/'+charName+'"></iframe>' || '');
					 //bioContent.html('<iframe  src="test.html" ></iframe>' || '');
				},
				onClose: function() {
					bioContent.empty();
					
	
				
				}
			});
					
		
		 });//playercard CLICK
		 
		 
		 
		 
		 
    });//document ready
	
	
	
	
	
	
	
</script>




</html>
