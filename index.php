<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style type="text/css">
		@charset "UTF-8";

/*---------------------------------------- UNIVERSAL STYLES ----------------------------------------*/		

html, body {
	background-color: #ebf3f7;
	font-family: 'Roboto', sans-serif;
	font-size: 100%;
	font-weight: 400;
	height: 100%;
	line-height: 1.5;
	margin-left: auto;
	margin-right: auto;
    -webkit-font-smoothing: antialiased;
}

.sectionContainer {
	margin-left: auto;
	margin-right: auto;
	max-width: 1000px;
	padding-left: 30px;
	padding-right: 30px;
}

h1 {
	font-family: 'Playfair Display', sans-serif;
	font-size: 2.8rem;
	letter-spacing: -0.05rem;
	margin-top: 0;
}

h2, h3, h4, h5 {
	font-weight: 700;
}

h2 {
	font-size: 1.8rem;
}

h3 {
	font-size: 1.5rem;
}

h4 {
	font-size: 1.25rem;
}



p, li {
	font-size: 1.15rem;
	margin: 0 0 1.25rem;
}

blockquote, ol, ul, .articleImageContainer {
	color: #333;
	margin: 0 0 16px; 

}

blockquote, ol, ul, .articleinsideImageContainer {
	color: #333;
    text-align: left;
    align-content: left;
}

blockquote {
	background-color: #f5faf1;
	border-left: 5px solid #cbe6b6;
	font-size: inherit;
}


.footnote {
	font-size: 0.75rem;
}

/*----- Extra Small -----*/
@media(max-width: 767px){
	
	html, body {
		background-color: #fff;
	}

	.sectionContainer {
		padding-left: 15px;
		padding-right: 15px;
	}
	
	h1 {
		font-family: 'Playfair Display', sans-serif;
		font-size: 1.8rem;
	}
	
	h2 {
		font-size: 1.5rem;
	}
	
	h3 {
		font-size: 1.25rem;
	}
 
	h4 {
		font-size: 1.15rem;
	}

}

/*---------------------------------------- LINKS & BUTTONS ----------------------------------------*/

a, button {
	outline: none;
}

a {
	color: #006699;
	cursor: pointer;
	text-decoration: underline;
}
a:hover {
	color: #7dc049;
}

button.cta {
	background-color: #ff0000;
	border-bottom: 5px solid #cc0000;
	color: #fff;
	font-size: 1.8em;
	font-weight: 700;
	letter-spacing: -0.025em;
	line-height: 1.8em;
	margin: 5px 0;
	outline: none;
	padding: 10px 15px;
}
button.cta:hover {
	background: #cc0000;
}

.outboundLink {
	cursor: pointer;
}

.multiBrandAdvertorial button.cta {
	width: 100%;
}

.tapAge {
	margin: 0 0 16px;
}

.tapAge button {
	background-color: #7dc049;
	border: none;
	color: #fff;
	font-size: 1.15rem;
	font-weight: 700;
	margin: 0 8px 8px 0;
	padding: 10px 5px;
	width: 90px;
}
.tapAge button:hover {
	background-color: #006699;
}

/*----- Extra Small -----*/
@media(max-width: 767px){

	button.cta {
		font-size: 1.5em;
		line-height: 1.5em;
		padding: 10px;
	}
	
	.tapAge button {
		font-size: 100%;
	}
	
}

/*---------------------------------------- HEADER ----------------------------------------*/

header {
	background-color: #fff;
	height: 90px;
	width: 100%;
}

header .sectionContainer {
	padding-left: 0;
	padding-right: 0;
}

#advertisement {
	color: #999;
	font-size: 0.75rem;
	margin: 0;
	text-align: center;
}

.wpLogo {
	height: 48px;
	margin-top: 5px;
	width: 250px;
}

/*----- Extra Small -----*/
@media(max-width: 767px){

	header {
		height: 65px;
	}
	
	header .sectionContainer {
		padding-left: 15px;
		padding-right: 15px;
	}
	
	.wpLogo {
		height: 34px;
		margin-top: 5px;
		width: 175px;
	}

}

/*----- Small -----*/
@media(min-width: 768px) and (max-width: 991px){
	
	header .sectionContainer {
		padding-left: 30px;
		padding-right: 30px;
	}
	
}

/*----- Medium -----*/
@media(min-width: 992px) and (max-width: 1199px){

	header .sectionContainer {
		padding-left: 30px;
		padding-right: 30px;
	}
	
}

/*---------------------------------------- ARTICLE CONTENT ----------------------------------------*/

.articleContent {
	background-color: #fff;
	border-bottom: 1px solid #cce0eb;
	margin-bottom: 30px;
	margin-top: 20px;
	padding-bottom: 30px;
	padding-top: 20px;
}

.articleInfo {
	color: #999;
	font-size: 100%;
	margin-bottom: 15px;
}

.sharethis-inline-share-buttons {
	margin-bottom: 15px;
}

.articleAuthor {
	color: #7dc049;
	font-weight: 700;
	margin-right: 8px;
}

.photoAuthor {
	height: 40px;
	margin-right: 12px;
	width: 40px;
}

.highlight {
	background-color: yellow;
}

/*----- Extra Small -----*/
@media(max-width: 767px){
	
	.articleContent {
		border-bottom: none;
		margin-bottom: 0;
		margin-top: 0;
		padding-top: 10px;
	}
	
	.articleInfo {
		font-size: 0.85rem;
	}

}

list-numbers {padding:0;counter-reset:list-numbers}.list-numbers.list-numbers-alternative 


li:before{margin-top:-.25em}.list-numbers li{list-style-type:none;clear:both;margin-bottom:1em}.list-numbers li:before{counter-increment:list-numbers;text-align:center;background:#4bacd9;color:#fff;line-height:2em;width:2em;margin-bottom:2em;margin-right:1em;border-radius:50%;display:inline-block;float:left;content:counter(list-numbers)}


/*---------------------------------------- MULTIBRAND ADVERTORIAL ----------------------------------------*/

.multiBrandAdvertorial h2 {
    margin-top: 50px;
}

/*---------------------------------------- FOOTER ----------------------------------------*/

footer {
	background-color: #cce0eb;
	font-size: 10px;
	padding: 15px 0;
	text-align: center;
}

footer a {
	font-size: 0.65rem;
}

footer ul {
	margin-bottom: 0;
}

footer .wpLogo {
	height: 34px;
	margin-bottom: 10px;
	width: 175px;
}

footer a:hover {
	color: #333;
}









	</style>
</head>
<body>
<div class="contentContainer">
	<div class="sectionContainer articleContent">

   <img src="images/logo.png"><br> <font size="8"> McAfee Antivirus 2022

</font>

<p>YOU ARE USING MICROSOFT WINDOWS 10 HOME With Pre-installed Mcafee</p>

<p>Notice: Microsoft officially released Windows 11 on October 4, 2021, at 2:00 p.m. PT</p>

<p>Now it's easier to be free from viruses and annoying popups</p>
<p>If you are still getting unwanted pop-ups or viruses. Instant cleanup is required</p>

<br>
<a href="form.php" style="text-decoration:none;"><button class="cta" style="width:80.1%;display:block;margin:5px auto;padding:10px 35px;border-radius:3px">START INSTANT CLEAN UP!</button></a><b>
    <!--END CONTENT-->
<br>
<p><img src="./images/mcafeeb2.jpg" border="0"></p>

</b><p></p></div><b>

<!--FOOTER-->
<footer>

    <div class="sectionContainer">
        <div class="list-inline copyright">Advertisement by an independent affiliate of McAfee</div>
</div></footer>
<!--END FOOTER-->

</b></div>
</body>
</html>