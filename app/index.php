<?php
include 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect();
?>
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
	    <div id="close2" ><img src="images/close.png"></div>
		<div class="video_content"></div>
        <div class="video_thumb">
        <?php for($i=0;$i<13; $i++){ ?>
            <div id="video_thumb_div<?= $i ?>" class="video_thumb_div" ></div> 
		<?php } ?>            
        </div>
	</div>
    
    
    <div id="bio_modal">
    	<div id="close" ><img src="images/close.png"></div>
		<div class="bio_content"></div>
        
	</div>
    
    
    <div id="about_modal">
   		<div id="close1" ><img src="images/close.png"></div>
    	<h2 style="color:#c58612">The Injustice Battle Arena </h2><BR>
    		Over the span of ten weeks, sixteen of the biggest DC heroes and villains faced off in a bracket-style tournament that let the audience vote for who they think would win. We placed Wonder Woman versus Harley Quinn, Flash versus Shazam! and Lex Luthor versus Joker, and left their fate in your hands. Every week, YouTube personality Taryn Southern not only introduced us to the match ups for that round, but also took to the streets to get the opinion of the average man on the street. We also got the opinions of some fantastic celebrity experts to help start the discussion of why one character should win over the other. In the end, The Dark Knight himself, Batman blew away the competition and flew straight to the final round. He ended up squaring off against the Man of Steel, Superman for supreme Battle Arena victory. Take a look at how each week went down as we present the entire road to the championships here on the Injustice Battle Arena recap site. 
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
                    <div id="menu_<?= $i ?>" style="cursor:pointer"><img id="menu_off<?= $i ?>" src="images/menu_<?= $i ?>.png"><img  id="menu_on<?= $i ?>"src="images/menu_<?= $i ?>_on.png" style="display:none"></div>
                    <?php } ?>
                    
                <div id="about" style="margin-top:-5px; cursor:pointer"><img src="images/about.png"><img src="images/about_on.png" class="displayNone"></div>
                <!-- BRICKS MOVIE 
                <div id="movieDiv" >
                    <div id='movie'></div>
                   
                </div>
                 -->
               
            </nav>
    	</header>
       
    
        
        <div id="main-content">
        	<div><img src="images/main_bg.jpg"></div>
            <!-- Batman -->
            <div id="batman" ><img src="images/batman_large.png"></div>
            <!-- Batman Glow -->
            <div id="batmanGlow" ><img src="images/batman_large_glow.png" ></div>
            <!-- Transparent div for mouseover glow effect-->
            <div id="batmanClick" ></div>
            <!-- Battle Arena Champion : BATMAN -->
            <div id="champion" ><img src="images/champion.png"></div>
        
   	    <div id="cardsDiv">
        		<?php
				$cardsArr = array('bane','wonder-woman','joker', 'shazam', 'greenlantern', 
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
        	<img src="images/superfights.jpg" id="superfightsOff"><img src="images/superfights_on.jpg"  id="superfightsOn" class="displayNone">
            <?php for($i=1;$i<5;$i++){ ?>
        	<div id="playlist<?= $i ?>" class="vs_divs"><img src="images/superfight<?= $i ?>.jpg" class="imgSet1"><img src="images/superfight<?= $i ?>_on.jpg" class="displayNone imgSetOn1"></div>
            <?php } ?>
        </div><!-- superfights -->
        
        <div id="quarter_finals" class="roundTitle">
        	<img src="images/quarter_finals.jpg" id="quarter_finalsOff"><img src="images/quarter_finals_on.jpg" class="displayNone" id="quarter_finalsOn">
        	<?php for($i=1;$i<5;$i++){ ?>
        	<div id="playlist<?= (4+$i) ?>" class="vs_divs"><img src="images/quarter_finals<?= $i ?>.jpg"  class="imgSet2"><img src="images/quarter_finals<?= $i ?>_on.jpg" class="displayNone imgSetOn2"></div>
            <?php } ?>
        </div><!-- quarter_finals -->
        
        
        <div id="semifinals" class="roundTitle">
        	<img src="images/semifinals.jpg" id="semifinalsOff"><img src="images/semifinals_on.jpg" id="semifinalsOn" class="displayNone">
        	<?php for($i=1;$i<3;$i++){ ?>
        	<div id="playlist<?= (8+$i) ?>" class="vs_divs"><img src="images/semifinals<?= $i ?>.jpg" class="imgSet3"><img src="images/semifinals<?= $i ?>_on.jpg" class="displayNone imgSetOn3"></div>
            <?php } ?>
        </div><!-- semifinals -->
        
        
        <div id="finale" class="roundTitle">
        	<img src="images/finale.jpg"  id="finaleOff"><img src="images/finale_on.jpg"  id="finaleOn" class="displayNone">
        	
        	<div id="playlist11" class="vs_divs"><img src="images/finale1.jpg" class="imgSet4"><img src="images/finale1_on.jpg" class="displayNone imgSetOn4"></div>
           
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
            	INJUSTICE: GODS AMONG US software © 2012 Warner Bros. Entertainment Inc. Developed by NetherRealm Studios. All other trademarks and copyrights are the property of their respective owners. "PlayStation" and the "PS" Family logo are registered trademarks and the "PS3" and the PlayStation Network logo are trademarks of Sony Computer Entertainment Inc. Microsoft, Xbox, Xbox 360, Xbox LIVE, and the Xbox logos are trademarks of the Microsoft group of companies and are used under license from Microsoft. Nintendo trademarks and copyrights are properties of Nintendo. All rights reserved.<br>
<br>
&nbsp;
                <div class="left_float"><img src="images/wb_logo.jpg"  style="padding-right:5px;"></div>
                <div>DC LOGO, and all characters, their distinctive likenesses, and related elements are trademarks of DC Comics © 2012.
NETHERREALM STUDIOS LOGO, WB GAMES LOGO, WB SHIELD: ™ & © Warner Bros. Entertainment Inc.
(s12)</div>
            </div><!-- /legal1 -->
            
            <div id="legal2">
            	
                <div class="left_float"><a href="http://www.esrb.org/" target="_blank"><img src="images/rating.jpg"></a></div>
                <div class="left_float"><a href="http://www.pegi.info/en/" target="_blank"><img src="images/footerIcon1.jpg"></a></div>
                <div class="left_float"><a href="http://www.usk.de/en/" target="_blank"><img src="images/footerIcon2.jpg"></a></div>
                

				<div style="float:right;"> <a href="http://www.warnerbros.com/privacy/terms.html" target="_blank" style="color:#666">TERMS OF USE</a> &nbsp; &nbsp; <a href="http://www.warnerbros.com/privacy/policy.html" target="_blank" style="color:#666">PRIVACY POLICY</a></div>
            </div><!-- /legal2 -->
        	<div id="extraSpace"><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
&nbsp;</div>
        </div><!-- /footer -->
        
    </div><!--/center-column -->
    
    <!--Right Background Margin -->
    <div id="right-side-outer">
    	<div id="right-side"></div>
    </div><!--Right Background Margin -->



<script src="lib/jquery-latest.min.js" language="javascript"></script>
<script src="lib/jquery.bpopup.min.js" language="javascript"></script><!-- Modal http://dinbror.dk/blog/bPopup/ -->
<script src="lib/jquery.sticky.js" language="javascript"></script><!-- http://labs.anthonygarand.com/sticky/ -->
<script src="lib/waypoints.min.js"language="javascript"></script><!-- http://imakewebthings.com/jquery-waypoints/ -->
<!-- <script src="lib/jquery.jsmovie.1.4.3b.min.js" language="javascript"></script> --><!-- jsMovie https://code.google.com/p/jsmovie/ -->
<script src="lib/jquery.easing.min.js" language="javascript"></script>
<script>
	
    $(document).ready(function (){
		
		/************************************************************************************
		BRICKS ANIMATION
		*************************************************************************************/		
		/*
		$('#movie').jsMovie({
			
			images : ['Breaking-Frames.png'],
		   	folder : 'images/',
			height : 1080, width: 1280,
		   	grid   : {height:1080, width:1280, columns:15, rows:1},
		   	showPreLoader : false,
		   	playOnLoad    : false,
			repeat		: false,
		   	fps:15     
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
		*/
		var navbarHeight=90;//for the scrollTo
		
		function showBlock(blockNum){
			$(".imgSet"+blockNum).hide();
			$('.imgSetOn'+blockNum).addClass('<?php if (!$detect->isMobile()) { echo 'grayScale'; } ?> imgSetOn'+blockNum);
			$('.imgSetOn'+blockNum).show();
			if(blockNum=='1'){
				$('#menu_off1, #menu_off2, #menu_off3, #menu_off4').hide();
				$('#menu_on1, #menu_on2, #menu_on3, #menu_on4').show();	
			}else{
				menuBlock = parseInt(blockNum)+3;
				$('#menu_off'+menuBlock).hide();
				$('#menu_on'+menuBlock).show();
			}
			
		}
		
		function hideBlock(blockNum){
			$('.imgSet'+blockNum).show();
			$('.imgSetOn'+blockNum).hide();
			
			if(blockNum=='1'){
				$('#menu_off1, #menu_off2, #menu_off3, #menu_off4').show();
				$('#menu_on1, #menu_on2, #menu_on3, #menu_on4').hide();	
			}else{
				menuBlock = parseInt(blockNum)+3;
				$('#menu_off'+menuBlock).show();
				$('#menu_on'+menuBlock).hide();
			}
			
		}
		
		
		<?php $blocksArray = array('superfights', 'quarter_finals', 'semifinals', 'finale'); 
			$blockNum=1;
			foreach($blocksArray as $block):
		?>
		var <?= $block ?>Top = false;
		$('#<?= $block ?>').waypoint(function() {
		 	<?= $block ?>Top=true;
			$("#<?= $block ?>Off").hide();
			$("#<?= $block ?>On").show();
			
			showBlock(<?= $blockNum ?>)
			//adding dark color to fights
			
			
		}, { offset: navbarHeight });
		
		
		var <?= $block ?>Top = false;
		$('#<?= $block ?>').waypoint(function() {
		 	<?= $block ?>Top=true;
			$("#<?= $block ?>Off").hide();
			$("#<?= $block ?>On").show();
			
			showBlock(<?= $blockNum ?>);
			//adding dark color to fights
			
			
		}, { offset: navbarHeight-200 });
		
		
		var <?= $block ?>Top = false;
		$('#<?= $block ?>').waypoint(function() {
		 	<?= $block ?>Top=true;
			$("#<?= $block ?>Off").hide();
			$("#<?= $block ?>On").show();
			
			showBlock(<?= $blockNum ?>)
			//adding dark color to fights
			
			
		}, { offset: navbarHeight+200 });



		$('#<?= $block ?>').waypoint(function() {
		 	<?= $block ?>Top = false;
			$("#<?= $block ?>Off").show();
			$("#<?= $block ?>On").hide();
			
			//adding dark color to fights
			hideBlock(<?= $blockNum ?>);
			
			
		}, { offset: navbarHeight-290 });
		
		
		$('#<?= $block ?>').waypoint(function() {
		 	<?= $block ?>Top = false;
			$("#<?= $block ?>Off").show();
			$("#<?= $block ?>On").hide();
			
			//adding dark color to fights
			hideBlock(<?= $blockNum ?>);
			
			
		}, { offset: navbarHeight+250 });

		<?php $blockNum++; 
				endforeach; ?>





		
		/************************************************************************************
		Sticky Nav
		*************************************************************************************/
		
		
		$("#navbar").sticky({topSpacing:0});
		$("#navbar_bg").sticky({topSpacing:-77});
		
		
		/************************************************************************************
		Nav Menu scroll to with easing effect
		*************************************************************************************/
		
		
		
        $("#menu_1, #menu_2, #menu_3, #menu_4").click(function (e){
            e.preventDefault();
			/*
			if($(window).scrollTop() != $("#superfights").offset().top - navbarHeight)
				playMovie();
			*/
			var blockName = 'superfights';
			$("#"+blockName+"Off").hide();
			$("#"+blockName+"On").show();
			showBlock(1);
			
			$('html, body').animate({
				scrollTop: $("#"+blockName).offset().top - navbarHeight
				}, { 
				<?php if ($detect->isMobile()) { echo '//'; } ?>easing: 'easeOutBounce',
				duration: 1000});

		
        });
		
		$("#menu_5").click(function (e){
            e.preventDefault();
			
			
			
			
			$('html, body').animate({
				scrollTop: $("#quarter_finals").offset().top-navbarHeight
				}, {
				<?php if ($detect->isMobile()) { echo '//'; } ?>easing: 'easeOutBounce',
				duration: 1000});
			/*	
			if($(window).scrollTop() != $("#quarter_finals").offset().top - navbarHeight)
				playMovie();
			*/
	
			
			

        });
		
		$("#menu_6").click(function (e){
            e.preventDefault();
			
			$('html, body').animate({
				scrollTop: $("#semifinals").offset().top-navbarHeight
				}, {
				<?php if ($detect->isMobile()) { echo '//'; } ?>easing: 'easeOutBounce',
				duration: 1000});
			/*	
			if($(window).scrollTop() != $("#semifinals").offset().top - navbarHeight)
				playMovie();
			*/

		
        });
		
		$("#menu_7").click(function (e){
            e.preventDefault();
			
			$('html, body').animate({
				scrollTop: $("#finale").offset().top-navbarHeight
				}, {
				<?php if ($detect->isMobile()) { echo '//'; } ?>easing: 'easeOutBounce',
				duration: 1000});
			/*
			if($(window).scrollTop() != $("#finale").offset().top - navbarHeight)
				playMovie();
			*/

		
        });
		
		
		<?php if (!$detect->isMobile()): ?>
		
		
		<?php for($i=1;$i<8; $i++){ ?>
        $("#menu_<?= $i ?>").mouseover(function (e){
            e.preventDefault();
			<?php if($i<5){ ?>
				
			 $("#menu_off1, #menu_off2, #menu_off3, #menu_off4").hide();
			 $("#menu_on1, #menu_on2, #menu_on3, #menu_on4").show();
			
			<?php }else{ ?>
				$("#menu_off<?= $i ?>").hide();
			 	$("#menu_on<?= $i ?>").show();
			<?php } ?>
			
		
        });
		<?php } ?>
		
		
		
		
		<?php for($i=1;$i<8; $i++){ ?>
        $("#menu_<?= $i ?>").mouseout(function (e){
            e.preventDefault();
			<?php if($i<5){ ?>
				
			 $("#menu_off1, #menu_off2, #menu_off3, #menu_off4").show();
			 $("#menu_on1, #menu_on2, #menu_on3, #menu_on4").hide();
			
			<?php }else{ ?>
				$("#menu_off<?= $i ?>").show();
			 	$("#menu_on<?= $i ?>").hide();
			<?php } ?>
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
		
		
		<?php endif; ?>
		
		$("#about").click(function (e){
            e.preventDefault();
			$('#about_modal').bPopup();
			
			
			
		
        });
		
		/************************************************************************************
		mouseover  class="roundTitle"
		*************************************************************************************/
		
		<?php if (!$detect->isMobile()): ?>
		
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
			
			
			
			<?php 
				//keep title color lit if it is on top			
				$blockNum=1;
				foreach($blocksArray as $block):
			?>
			
			if(<?= $block ?>Top && this.id=='<?= $block ?>') return;
			
			<?php $blockNum++; endforeach; ?>
			
			
			
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
			var orgClass = imgArrayMenu[1].className;
			
			var newClass = orgClass.replace('grayScale', ' ');
			//alert(orgClass+"  "+newClass);
			imgArrayMenu[1].className = newClass;
			
			
		
        });
		
		
		
		 $(".vs_divs").mouseout(function (e){
            e.preventDefault();
				
			var imgArrayMenu = $(this).children('img').map(function(){
				return this;
			}).get();
			
			<?php 
				$blockNum=1;
				foreach($blocksArray as $block):
			?>
			
			if(<?= $block ?>Top && imgArrayMenu[0].className=='imgSet<?= $blockNum ?>'){
				imgArrayMenu[1].className = 'imgSetOn<?= $blockNum ?> grayScale';
				return;
			}
			
			<?php $blockNum++; endforeach; ?>
			
				imgArrayMenu[0].style.display='inline';
				imgArrayMenu[1].style.display='none';
			
			
        });
		
		<?php endif; ?>
		
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
					
					bioContent.html('<iframe width="804" height="550" frameborder="0" style="overflow:hidden" scrolling="no" src="/#/bios/'+charName+'"></iframe>' || '');
					 //bioContent.html('<iframe  src="test.html" ></iframe>' || '');
				},
				onClose: function() {
					bioContent.empty();
					
	
				
				}
			});
					
		
		 });//playercard CLICK
		 
		 
		 
		 
		 $('#batmanClick').on('click', function(e) {
			
         	e.preventDefault();
			
			bioContent = $('.bio_content'); 
			$('#bio_modal').bPopup({
				onOpen: function() {
					
					bioContent.html('<iframe width="804" height="550" frameborder="0"  style="overflow:hidden" scrolling="no" src="/#/bios/batman"></iframe>' || '');
					 //bioContent.html('<iframe  src="test.html" ></iframe>' || '');
				},
				onClose: function() {
					bioContent.empty();
					
	
				
				}
			});
					
		
		 });//playercard CLICK
		 
		 
		 $('#close').on('click', function(e) {
		 	$('#bio_modal').bPopup().close();
		 });
		 
		  $('#close1').on('click', function(e) {
		 	$('#about_modal').bPopup().close();
		 });
		 
		  $('#close2').on('click', function(e) {
		 	$('#video_modal').bPopup().close();
		 });
		 
		 
    });//document ready
	
	
	
	
	
	
	
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40619940-1', 'dccomics.com');
  ga('send', 'pageview');

</script>

</body>
</html>
