<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>gallery</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
/*add styles here*/
aside, article, section, header, footer, nav {
	display: block;
}
div, h1, h2, h3, p, img {
	margin: 0;
	padding: 0;
}
html {
	margin: 0;
	padding: 0;
	background: rgb(100, 98, 102);
}
body1 {
	margin: 0 auto;
	padding: 0 0 25px;
	font: 100% Georgia, "Times New Roman", Times, serif;
	background: rgb(255,255,255);
	width: 900px;
}
header {
	padding: 20px 25px;
	background: rgb(76, 67, 65);
}
article {
	padding: 0 25px;
	margin-top: 25px;

}
.photos {
	margin: 0 auto;
	width: 822px;
	padding: 10px;
	background: rgb(100, 98, 102);
}
img {
	
	margin: 10px;
	border: 2px solid white;
}

.normal {
	width: 842px;
	margin: 25px auto;
	border: 1px solid black;
	background: rgb(237, 228, 214);
	font-size: 90%;
	padding: 0;
}
.normal h2 {
	border: none;
	background: rgb(219,126,64);
	color: white;
	padding: 5px 10px;
}
.normal p, .normal h3 {
	padding: 0 10px;
}
h1 {
	font-size: 1.6em;
	font-weight: normal;
	color: rgb(255,255,255);
}
h2 {
	font: 1.2em Arial, Helvetica, sans-serif;
	border-bottom: 1px solid black;
	margin-bottom: .4em;
	color:#CCC;
}
h3 {
	font: 1.1em Arial, Helvetica, sans-serif;
	margin-bottom: .4em;
	font-weight: bold;
}
p {
	margin-bottom: 1em;
	line-height: 1.6;
	color:#CCC;
}

</style>
</head>
<body>
<?php include("inc.php"); ?>
<header>
<h1>Welcome to hotel's gallery</h1>
</header>
<article class="gallery">
<h2>hotel gallery</h2>
<p>Welcome to a place where you can have it all. Imagine a hotel where the most important thing is you. A dream location in which adults get their rewards. A location only for people who know what they really want. A place for lovers of life. Discover a new universe where anything can happen</p>
<div class="photos">
<img src="images/philly_1.jpg" width="250" height="189" alt="Philadelphia"><img src="images/philly_2.jpg" width="250" height="189" alt="Philadelphia"><img src="images/philly_3.jpg" width="250" height="189" alt="Philadelphia"><img src="images/philly_4.jpg" width="250" height="189" alt="Philadelphia"><img src="images/philly_5.jpg" width="250" height="189" alt="Philadelphia"><img src="images/philly_6.jpg" width="250" height="189" alt="Philadelphia"> <img src="images/EVE_Online.jpg" width="250" height="189" alt="Philadelphia"><img src="images/57617.jpg" width="250" height="189" alt="Philadelphia">
<img src="images/9683289_orig.jpeg" width="250" height="189" alt="Philadelphia">
<img src="images/bazen-hotel-elaphusa_640_4261.jpg" width="250" height="189" alt="Philadelphia">
<img src="images/bedroom-10-big.jpg" width="250" height="189" alt="Philadelphia">
<img src="images/hotel_room1--621x414--621x414.jpg" width="250" height="189" alt="Philadelphia">
<img src="images/five-star-hotels.gif" width="250" height="189" alt="Philadelphia">
<img src="images/king-guestroom_450.jpg" height="189" alt="Philadelphia">

</div>
</article>
<!--<article class="normal">
<h2>Exploring HTML normal document flow</h2>
<p>Prior to HTML5, HTML elements could be categorized as "block-level" or "inline-level." For the most part that's still true, although HTML5 created multiple element content categorizations such as Phrasing, Flow, and Sectioning that replace the more global block-level and inline-level categorization. Regardless, browsers still display content primarily using those two definitions. Most Phrasing content is displayed as inline-level elements while Heading and Sectioning content is displayed as block-level.</p>
<p>What does this mean? Well, block-level elements are typically formatted with a line break before and after the content; resulting in the content occupying it's own line on the page. Some block-level elements, like divs and the new HTML5 sectioning elements, can contain other block-level elements, while others like paragraphs and headings cannot.</p>
<p>Inline-level elements typically occur within another block-level element (although they don't have to) and generally contain either data or other inline-level elements. This content typically displays horizontally along the entire width of the viewport, only breaking down to a new line when the viewport width forces it to. Images, bold, italic, strong, emphasis, inputs, and links are all examples of inline-level elements.</p>
<h3>How normal document flow works</h3>
<p>Browsers display content in the order that it is found. Content at the top of the document, for example, is displayed first and is followed by the content after it. Block-level elements are displayed on their own line, while inline-level elements are displayed as part of the normal flow of document content. The results in the "stacking" of block-level blocks and the flow of inline-level elements within these blocks.</p>
</article>-->
<div id="footer">
		<p>
        	Terms of Use |  Copyright &copy; imperial Hotel. Design by <a href="#">Raj kamal and rajdeep sarkar</a>
        </p>
	</div>
</body>

</html>
