<!DOCTYPE html>
<html lang="en">
<head>
<? include ("includes/header.php") ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Hometown Auto Repair :: Home</title>
<meta name="description" content="" />
<meta name="generator" content="concrete5 - 5.6.3.5" />
<script type="text/javascript">
var CCM_DISPATCHER_FILENAME = '/index.php';
var CCM_CID = 1;
var CCM_EDIT_MODE = false;
var CCM_ARRANGE_MODE = false;
var CCM_IMAGE_PATH = "/updates/concrete5.6.3.5_remote_updater/concrete/images";
var CCM_TOOLS_PATH = "/index.php/tools/required";
var CCM_BASE_URL = "http://www.hometownowasso.com";
var CCM_REL = "";

</script>

<link rel="stylesheet" type="text/css" href="/updates/concrete5.6.3.5_remote_updater/concrete/css/ccm.base.css" />
<script type="text/javascript" src="/updates/concrete5.6.3.5_remote_updater/concrete/js/jquery.js"></script>
<script type="text/javascript" src="/updates/concrete5.6.3.5_remote_updater/concrete/js/ccm.base.js"></script>
<link rel="stylesheet" type="text/css" href="/updates/concrete5.6.3.5_remote_updater/concrete/blocks/slideshow/view.css" />
<link rel="stylesheet" type="text/css" href="/packages/content_plus/blocks/content_plus/view.css" />
<link rel="stylesheet" type="text/css" href="/packages/content_plus/css/content.plus.css" />

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/themes/HometownAuto/css/style.css" media="all" /> 
</head>

<body>

<div id="container">
	<div id="header" class="fixed">
		<div id="logo-area" class="fixed">
			<div id="logo">
				<a href="/"><img border="0" class="ccm-image-block" alt="" src="/files/5713/8616/7004/weblogo.png" width="150" height="75" /></a>			</div>
			<div id="menuholder">
				<div id="menu">
					<ul class="nav"><li class="nav-selected nav-path-selected"><a href="/" target="_self" class="nav-selected nav-path-selected">Home</a></li><li class=""><a href="/contact-us/" target="_self" class="">Contact Us</a></li><li class=""><a href="/who-are-we/" target="_self" class="">Who Are We</a></li></ul>				</div>
			</div>
		</div>
	</div>
	
	<div id="header-image">
		<div id="sliderholder">
					
<script type="text/javascript">
//<![CDATA[
var ccmSlideShowHelper68 = {

	bID:68,
	imgNum:0,
	
	init:function(){
		this.displayWrap=$('#ccm-SlideshowBlock-display'+this.bID); 
		if(this.imgInfos.length==0){
			//alert('There are no images in this slideshow');
			return false;
		}
		var maxHeight=0;
		for(var i=0;i<this.imgInfos.length;i++){
			this.addImg(i);
			if(maxHeight==0 || this.imgInfos[i].imgHeight > maxHeight)
				maxHeight=this.imgInfos[i].imgHeight;
		}
		this.displayWrap.css('height',maxHeight);

		
		//center images
		for(var i=0;i<this.imgInfos.length;i++){ 
			if( this.imgInfos[i].imgHeight < maxHeight){
				var t=((maxHeight - this.imgInfos[i].imgHeight)/2);
				this.imgEls[i].css('top',t);
			}
		}
		this.nextImg();
	}, 
	nextImg:function(){ 
		if(this.imgNum>=this.imgInfos.length) this.imgNum=0;  
		this.imgEls[this.imgNum].css('opacity',0);
		this.imgEls[this.imgNum].css('display','block');
		this.imgEls[this.imgNum].animate({opacity:1},
			this.imgInfos[this.imgNum].fadeDuration*1000,'',function(){ccmSlideShowHelper68.preparefadeOut()});
		var prevNum=this.imgNum-1;
		if(prevNum<0) prevNum=this.imgInfos.length-1;
		if(this.imgInfos.length==1) return;
		this.imgEls[prevNum].animate({opacity:0},this.imgInfos[this.imgNum].fadeDuration*800,function(){this.style.zIndex=1;});			
	},
	preparefadeOut:function(){
		if(this.imgInfos.length==1) return;
		var milisecDuration=parseInt(this.imgInfos[this.imgNum].duration)*1000;
		this.imgEls[this.imgNum].css('z-index',2);
		setTimeout('ccmSlideShowHelper'+68+'.nextImg();',milisecDuration);
		this.imgNum++;
	},
	maxHeight:0,
	imgEls:[],
	addImg:function(num){
		var el=document.createElement('div');
		el.id="slideImgWrap"+num;
		el.className="slideImgWrap"; 
		if(this.imgInfos[num].fullFilePath.length>0)
			 imgURL=this.imgInfos[num].fullFilePath;
		else imgURL='/files/'+this.imgInfos[num].fileName; 
		//el.innerHTML='<img src="'+imgURL+'" >';
		el.innerHTML='<div style="height:'+this.imgInfos[num].imgHeight+'px; background:url(\''+escape(imgURL)+'\') center no-repeat">&nbsp;</div>';
		//alert(imgURL);
		if(this.imgInfos[num].url.length>0) {
			//el.linkURL=this.imgInfos[num].url;
			var clickEvent='onclick="return ccmSlideShowHelper68.imgClick( this.href  );"';
			el.innerHTML='<a href="'+this.imgInfos[num].url+'" '+clickEvent+' >'+el.innerHTML+'</a>';			
		}
		el.style.display='none';
		this.displayWrap.append(el);
		var jqEl=$(el);
		this.imgEls.push(jqEl);
	},
	imgClick:function(linkURL){
		//override for custom behavior
	},
	imgInfos:[
				{
				fileName:"equinox.jpg",
				fullFilePath:"/files/7815/1456/8573/equinox.jpg",
				duration:7,
				fadeDuration:2,		
				url:"",
				groupSet:0,
				imgHeight:600			}
		,			{
				fileName:"dohc_ase.jpg",
				fullFilePath:"/files/9615/1456/8620/dohc_ase.jpg",
				duration:7,
				fadeDuration:2,		
				url:"",
				groupSet:0,
				imgHeight:600			}
		,			{
				fileName:"car2.jpg",
				fullFilePath:"/files/2313/8616/9563/car2.jpg",
				duration:7,
				fadeDuration:2,		
				url:"",
				groupSet:0,
				imgHeight:600			}
		,			{
				fileName:"road.jpg",
				fullFilePath:"/files/3213/8616/9579/road.jpg",
				duration:7,
				fadeDuration:2,		
				url:"",
				groupSet:0,
				imgHeight:600			}
		,			{
				fileName:"f150_dirt_road.jpg",
				fullFilePath:"/files/7815/1456/8657/f150_dirt_road.jpg",
				duration:7,
				fadeDuration:2,		
				url:"",
				groupSet:0,
				imgHeight:600			}
			]
}
$(function(){ccmSlideShowHelper68.init();}); 
//]]>
</script>

<div id="ccm-SlideshowBlock-display68" style="height:600px" class="ccm-SlideshowBlock-display">
<div id="ccm-SlideshowBlock-heightSetter68" class="ccm-SlideshowBlock-heightSetter"></div>
<div class="ccm-SlideshowBlock-clear" ></div>
</div>
		</div>
	</div>	
	<div id="page-divider">
		<div id="page-div-cont">
					<p>Fast and reliable service at a great price.  Check out Hometown Auto Repair for all your automotive repair needs. <strong>(918) 272-8848</strong></p>		</div>
	</div>	
	<div id="site-content">	
		<div class="content">
			<div class="side">
					<h3>Testimonials</h3>
<p>What some of our customers are saying about us.</p><div class="cpb float-left"><div class="cpb-quote bq-bubble-square" style="max-width:324px;"><blockquote>Fast, efficient, reliable service, good price, very easy to deal with. I highly recommend...</blockquote><span class="quote-attr"><span></span>"SS Perkins" Google Reviewer</span></div><div class="cpb-content"></div></div><div class="cpb float-left"><div class="cpb-quote bq-bubble-square" style="max-width:324px;"><blockquote>Nice shop with honest people working there. Small shop, but does the job right and will be up front and fair on the pricing of his work. I will always use Hometown Auto Repair.</blockquote><span class="quote-attr"><span></span>"Mark Warren" Google Reviewer</span></div><div class="cpb-content"></div></div><div class="cpb float-left"><div class="cpb-quote bq-bubble-square" style="max-width:324px;"><blockquote>Got to be the best mechanic I ever went to. The car had a rattle, which could have been anything. He opened it up and found it was something cheap to repair and charged labor only. My family are in the auto trade so I know about all the scams. This garage is honest, and good at their work.</blockquote><span class="quote-attr"><span></span>Anonymous Google Reviewer</span></div><div class="cpb-content"></div></div><p>View more reviews <strong><a href="https://www.google.com/search?q=hometown+auto+owasso&amp;ie=utf-8&amp;oe=utf-8&amp;aq=t&amp;rls=org.mozilla:en-US:official&amp;client=firefox-a&amp;channel=fflb#lrd=lrd" target="_blank">HERE</a></strong>.</p>			</div>
			
			<div class="about">
					<p><img src="/files/cache/61f0d82e33efb0f83e50b48eb1c62e12_f8.jpg" alt="hometown_content.jpg" width="820" height="418" /></p><div class="cpb none"><div class="cpb-content"><p style="text-align: left;"><img src="/files/6613/8618/6676/checkenginelight.gif" alt="checkenginelight.gif" width="205" height="115" /><img src="/files/5413/8618/6662/brakewarning1.jpg" alt="brakewarning1.jpg" width="205" height="115" /><img src="/files/5813/8618/6646/oilpressurelight.jpg" alt="oilpressurelight.jpg" width="205" height="115" /><img src="/files/7113/8618/6688/coolantwarninglight.jpg" alt="coolantwarninglight.jpg" width="205" height="115" /></p></div></div><h3>About Us</h3>
<p>Hometown Auto Repair started in 2011 and specializes in fast and reliable service for your vehicle.  Our services include General Auto Repair, Radiators, Batteries, Brake Services, Water Pumps, Tune Ups, Timing Belts, Starters, Oil Leaks, Oil Changes, Electrical Repairs, Check Engine Lights, Alternators, Heating and Cooling Systems, and much, much, more. We specialize in both import and domestic auto repair. </p>			</div>

		</div>
	</div>
	<div id="page-divider">
		<div id="page-div-cont">
					<p><span>Contact us today to setup your appointment!</span></p>		</div>
	</div>	
	<div id="footer-container">
	<div id="footer">
		<div class="fixed">
			<div id="foot1">
			<h3>Navigation</h3>
				<div id="menu_footer">
					<ul class="nav"><li class="nav-selected nav-path-selected"><a href="/" target="_self" class="nav-selected nav-path-selected">Home</a></li><li class=""><a href="/contact-us/" target="_self" class="">Contact Us</a></li><li class=""><a href="/who-are-we/" target="_self" class="">Who Are We</a></li></ul>				</div>	
			</div>
			<div id="foot2">
				<h3>Legal</h3>
<p><strong>Copyright © 2017 Hometown Auto Repair, <br />All rights reserved </strong><br /> Terms of Use | Privacy Policy</p>
<p>306 East 5th Avenue<br />Owasso, OK 74055</p>			</div>
			<div id="foot3">
				<h3>Contact</h3>
<h4><span>Local: (918) 272-8848<br /></span></h4>
<p><a title="Contact Us" href="/contact-us/"><span>Click here for contact form </span></a></p>
<p><span><br /></span></p>			</div>
		</div>
	</div>
	</div>
</div>
	<div id="obsfoot">
	<p>Site designed by <a href="http://www.capitalcreatives.com">Capital Creatives.</a></p> 
	</div>


</body>
</html>
