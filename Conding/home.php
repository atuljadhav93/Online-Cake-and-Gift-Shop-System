<html>
<head>
<title>Home Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" /><style>

.mySlides {display:none;}


/*slide show css*/

.slider {
	width: 1100px;
	margin-top:30px;
	margin-bottom:4px;
	margin-left:200px;
	}

.slider-wrapper {
	width: 110%;
	height: 400px;
	position: relative;
}

.slide {
	float: left;
	position: absolute;
	width: 80%;
	height: 80%;
	opacity: 0;
	transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}

</style>
<script type="text/javascript">
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 440);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();
</script>



</head>
<body>
<div class="main">                              
  <div class="header">
    <div class="logo">
      <h1><span>Our</span>&nbsp;Motto<small>is Excellent Client Service</small></h1>
    </div>
    <div class="menu_nav" >
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="cake.php">Cake</a></li>
        <li><a href="gift wrap.php">Gift Wrap</a></li>
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
		
      </ul>
</div>
</div></div>
<br><br><br><br>
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="images/ice cake.jpg" alt="First" class="slide" /><!-- slides -->
				<img src="images/Happy-birthday-cupcake-tumblr-3.jpg" alt="First" class="slide" /><!-- slides -->
						<img src="images/20.jpg" alt="First" class="slide" /><!-- slides -->
		<img src="images/ice cake.jpg" alt="Second" class="slide" />
		<img src="images/gift wrap.jpg" alt="Third" class="slide" />
		<img src="images/cupcakes.jpg" alt="Third" class="slide" />
	</div>
	 </div>
<div class="content">
    <div class="mainbar">
      <div class="article">
        <h2><span>About Company</span></h2>
        
        <p id="my" onmousedown="mouseDown()" onmouseup="mouseUp()" style="font-size:20px; color:#000000;">At wish.in, we work hard to create a great confectionary experience by placing a premium on punctuality, customer service, premium quality sweet, hygiene and an abiding commitment to delighting our customers.
	       We always serve fresh and traditionally tasty sweet and our products are reasonably priced. This, we like to believe, is the secret of our success...
        
		
		</p>
							<script>
					function mouseDown() {
						document.getElementById("my").style.color = "red";
					}

					function mouseUp() {
						document.getElementById("my").style.color = "blue";
					}
					</script>
        
        <p class="spec">&nbsp;</p>
        <div class="clr"></div>
      </div>
      <div class="article">
        
	  </div>
      
    </div>
	
    <div class="sidebar">
      <div class="gadget">
        <div class="search">
          
          
        </div>
      </div>
	  
	  
	  <!--Start Side Bar Menu-->

      <div class="gadget" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
        <h2 class="star"><span>Sidebar</span> Menu</h2>
        
        <ul class="sb_menu"> 
		  <li><a href="signout.php">Logout</a></li>
		  <li><a href="login form/index.php">Admin Login</a></li>
		  <li><a href="#">Home</a></li>
          <li><a href="cake.php">Cake</a></li>
          <li><a href="gift wrap.php">Gift Wrap</a></li>
          <li><a href="About Us.php">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
	  
	   <!--End Side Bar Menu-->
</body>
</html>