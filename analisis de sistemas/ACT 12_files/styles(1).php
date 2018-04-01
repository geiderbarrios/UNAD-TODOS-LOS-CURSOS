/**************************************
 * THEME NAME: premium-1
 *
 * Files included in this sheet:
 *
 *   premium-1/style.css
 **************************************/

/***** premium-1/style.css start *****/

@import url( css/reset.css );
@import url( css/960.css );
@import url( css/text.css );

body {
background: #FFFFFF url('img/headerBK.jpg') repeat-x top left;color:#000000;line-height:18px;
}
body#help .container_12 #wrap,body#help .container_12{max-width:500px;}
h1,h2,h3,h4,h5 {	
	color:#444444;
	font-weight:normal;
	text-shadow:0px 1px 1px #fff;
	font-family: verdana,sans-serif; 
}

a,.sideblock a {text-decoration:none;color:#7A112D;}
a:hover ,.sideblock a:hover {color:#023B5D;}
.padder {margin:10px;}
a img {border:none;}
.left-pic {float:left; margin-right: 5px;}
#topnav {
	position: relative;
	float:right;
}
.topnav {
	padding: 0;
	margin: -55px 0 0px 0;float:right;
	display:block;width:100%;
	position: absolute;}

.topnav ul#nav {
	margin: 0px; padding: 0px;  list-style-type: none; 
		list-style-image: none; list-style-position: inside;
		float:right;
}

.topnav ul#nav li {font: 12px verdana, georgia,"times new roman";
	margin: 0px 3px; padding: 5px 10px; float: left;  display: block; 
		cursor: pointer; position: relative;
}

.topnav ul#nav li a{
	font-weight: bold;text-decoration: none;text-align:left;color:#004c70;
}
.topnav ul#nav li a:hover {color:#FFFFFF}
.topnav ul#nav li span{display:block;height:100%}


#wrap {
	border:5px solid #E5AF13;
	margin:70px 0 60px 0;
	position:relative;
}
.altrwrap {
	position: absolute;
	right:-6px;
	top:-6px;
}
.altlrwrap {
	position: absolute;
	right:10px;
	bottom:-11px;
}
.altlwrap {
	position: absolute;
	left:-6px;
	bottom:-10px;
}
.wrapper {
	background:#ffffff url('img/content-bg.gif') repeat-x;
	border:1px solid #fff;
}

#logo  {
position: relative;
}
.logo {
	position: absolute;
	top: -80px;
	left:0;
}
#layout-table{margin-top:20px;}
.navbar{margin-top:20px;padding-right:30px;}
#left-column >div{
	margin-left:-6px;
	margin-top:120px;
	width:230px;
}
.weekscss-format #left-column{
	margin-top:120px;
}
.weekscss-format #left-column >div{
	margin-top:10px;
}

#left-column h2 {
	background:#01395B url('img/lr-pita.png') no-repeat top right;
	padding: 5px 20px;
	color:#E5AF13;
	display:block;
	text-shadow: 1px 1px 1px #01395B;
	margin:0 -10px 0 3px;
	font-size:1.2em;
	font-weight:normal;
}
#right-column h2 {
        background:#01395B url('img/lr-pita.png') no-repeat top right;
        padding: 5px 20px;
        color:#E5AF13;
        display:block;
        text-shadow: 1px 1px 1px #01395B;
        margin:0 -10px 0 3px;
        font-size:1.2em;
        font-weight:normal;
}
#left-column .title {
	background: url('img/l-pita.png') no-repeat top left;
	margin-left:-6px;
	padding-bottom:3px;
}
#right-column>div{
 	margin-right:5px;
      # margin-top:120px;
       width:230px;
}
.sideblock{
	font-size:1.2em;
}
#middle-column li, .sideblock li{
	margin-left:0px;
}
#left-column li, #right-column li, .admintree{
	padding-left:10px;
}
#right-column li{
	padding-right:10px;
}
h2.headingblock{
	font-size:1.6em;
	border:0px;
	font-weight:normal;
}
#middle-column{font-size:110%}
.navbar,.sideblock .header,.sideblock .content,.sideblock .footer {
	background:none;
	border:0px;
}
.sideblock .commands{text-align:right;}
#left-column .hidden .header {
	border-bottom-width: 0px;
}
.weekscss-format #right-column {
  width: 200px;
}
.weekscss-format #middle-column {
  margin: 0 17em 0 20em;
}
.footer {
	background: #FDF9EC url('img/footer-bg.gif') repeat-x bottom left;
	min-height:40px;
}
.footer p {margin-left:30px;}

.breadcrumb {
	position:fixed; 
	left:0; bottom:0; 
	width:100%;
	padding-left:65px;
	background:#003151 url('img/favicon.png') no-repeat 30px center;
	z-index:100;
	color:#E5AF13;
	border-top: 2px solid #fff;
	opacity: 0.9;
}
.breadcrumb {font-size:1em;font-weight:normal;}
.breadcrumb ul li{margin-left:3px;}
.breadcrumb a{
	color: yellow;
}

/***
 *** Message
 ***/

table.message_search_results td {
  border-color:#DDD
}
.message.other .author {
  color:#88C
}
.message.me .author {
  color:#999
}
.message .time {
  color:#999
}
.message .content {
}

.message .link {
  font-size:0.8em
}
.message_form {
  font-size:0.8em
}
.message .heading {
  font-size:1.0em;
  font-weight:bold
}
.message .date,
.message .contact,
.message .summary {
  font-size:0.9em
}
.message .note, 
.message .pix {
  font-size:0.8em
}
.message .author {
  font-weight:bold;
  font-size:0.8em
}
.message .time {
  font-style:italic;
  font-size:0.8em
}
.message .content {
  font-size:0.8em
}
#message-user .commands span {
  font-size:0.7em;
  white-space:nowrap
}
#message-user .name {
  font-weight:bold;
  font-size:1.1em
}
/***** premium-1/style.css end *****/

