<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
</style>
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<link rel="stylesheet" href="https://d3szb066gfm8k8.cloudfront.net/assets/portal_base-41e1ea2a813cd5f1fc6c2ccb6256cbec203899dcc98d7d0e740a1ea475c1dd65.css"></link><style id="dark-reader-style" type="text/css">
  

@media screen {

/* Leading rule */    
html {
  -webkit-filter: brightness(90%) !important;
  filter: brightness(90%) !important;
}

/* Text contrast */
html {
  text-shadow: 0 0 0 !important;
} 

/* Full screen */
:-webkit-full-screen, :-webkit-full-screen * {
  -webkit-filter: none !important;
  filter: none !important;
}
:-moz-full-screen, :-moz-full-screen * {
  -webkit-filter: none !important;
  filter: none !important;
}
:fullscreen, :fullscreen * {
  -webkit-filter: none !important;
  filter: none !important;
}

/* Page background */
html {
  background: linear-gradient(to right, #1BE3DA , #5D7DE9);
}

h1{
  font-family: 'Montserrat', sans-serif;
  font-size: 300%;
  font-weight:lighter;
  text-transform: uppercase;
}
h3{
  font-size: 200%;
  font-weight: lighter;
  font-style: normal;
}

.building{
  color:#428BCD;
  font-weight: normal;
}
p,h1,h2,h3,h4,dd,font{
color: #fff;
font-weight: 700;
font-family: 'Nunito', sans-serif;
text-transform: uppercase;
}
dt{
color:rgb(17, 85, 204);
font-family: 'Nunito', sans-serif;
text-transform: uppercase;
}


body{
/*background: linear-gradient(to right, #1BE3DA , #5D7DE9);  
background-image:linear-gradient(rgb(119, 163, 230), rgb(96, 123, 196)); */
 background: #FEFFF1;
 background-repeat: no-repeat;
  height:120%;
  background-opacity:1; 
}


.list-group__item:first-child {
    border-top: 1px solid #e8e8e8;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}


/*header{
margin-top:4%;
background: linear-gradient(to right, #1BE3DA , #5D7DE9);
}*/

dd{
padding-top: 10px;
}

.grid-containe {
    display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 10px;
    
}
.grid-containe > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #21678C;
  grid-gap: 10px;
  padding: 10px;
}

.grid-container > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.item1 {
  grid-column-start: 1;
  grid-column-end: 2
  ;
}
.item2{
 grid-column-start: 2;
 grid-column-end: 3;
}

.list-group__item{
    
    align-items: center;
    background:none;
    border-bottom: 1px solid #e8e8e8;
    border-left: 1px solid #e8e8e8;
    border-right: 1px solid #e8e8e8;
    line-height: 20px;
    min-height: 100px;
    padding: 20px 30px;
}

h2 {
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1;
    margin: 0;
}
#abc{
    position:relative;
    top:10px;
    right:0px;
    height:20px;
    width:0px;
    padding-left:50px;
}

.navbar {
  overflow: hidden;
  background: linear-gradient(to right, #1BE3DA , #5D7DE9);
  position: fixed;
  top: 0;
  width: 100%;
  opacity: 1;
  z-index: 99;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar .hello{
  float: left;
}

.navbar a:hover {
  /*background: #ddd;*/
  color: #E5B616;
}
--------------------

.mySlides {display: none;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
img{
  border-radius: 25px;
}
--------------------
button{
    font-weight: 700;
    font-family: 'Nunito', sans-serif;
}

.links {
  border :thin solid white;
  padding: 5px;
  padding-top: 5px;
  display: block;
  width: 60%;
  border-radius: 10px;
}
.alignleft {
  text-align: left;
  
}
.alignright {
  float: right;
  
  
}
.links p{
  padding-left: 10px;
  font-weight: 700;
  font-family: 'Nunito', sans-serif;
}
.links button{
  background:#ffffff;
    color: #5d8ffc;
    border: 0px;
    border-radius: 5px;
    padding: 14px;
    display:block;
    width: 20%;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;

}

.navbar button{
    background: linear-gradient(to right, #4B7ED0,#4D7BD1);
    opacity: 1;
    color: #fff;
    border: 0px;
    border-radius: 5px;
    padding: 6px;
    display:block;
    width: 100%;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
}

.navbar button:hover{
    background: #fff;
    color:#5d8ffc;
    border:1px solid #fff;
    cursor: pointer;
}

#status{
 background: linear-gradient(to right, #1BE3DA , #5D7DE9);
}

</style>

<style>
div #abc{
  border: 1px solid white;
  border-radius: 8px;
  padding:5px;
}  
</style>
</head>

<body>

<div class="navbar">
  <a href="#logo" class="hello" ><img src="logo.png" class="hello" width="40px"/></a>
  <a href="logout.php" "><button type="button" class="btn btn-outline-dark">Logout</button></a>
  <!--<form method="POST" action="logout.php"><a href="logout.php"><input type="submit" id="submit" name="submit" value="Logout"></a></form>-->
  <a href="index.html">Home</a>
  
</div>   

<!--div class="hero hero--offering-1">-->
  <div class="lonely text-center">
  <h1 class="building" id="Welcome"></h1>
 	<h3 class="building" id="info"></h3>
  <!-- ngIf: offering.actionable --><!--<button class="button button--primary button--stretch action ng-binding ng-scope" ng-if="offering.actionable" ng-click="ctaAction(offering.id, return_path)">Invest</button><!-- end ngIf: offering.actionable -->
  <!-- ngIf: !offering.actionable -->
  <!--<button ng-target-blank-link="'/documents/'+offering.offering_memorandum.id" class="button button--secondary ng-isolate-scope"><i class="fa fa-arrow-circle-down"></i>&nbsp;Offering Memorandum</button>-->
  <!--<p class="unrelated-top ng-binding">Invest today in a diversified portfolio of commercial solar projects that service some of the most stable businesses in the country. This solar project portfolio provides targeted monthly cashflows of 6% annually for 10 years, and it significantly reduces carbon energy pollution - aiding in the fight against climate change.</p>-->
  </div>
<!--</div>


<center>

<div class="slideshow-container">

<div class="mySlides fade">
  <img id="img1" height="280" width="500" >
  
</div>

<div class="mySlides fade">
  <img id='img2' height="280" width="500">
  </div>

<div class="mySlides fade">
   <img id='img3' height="280" width="500">
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<BR><BR>

</center>
-->
<center>
<div id="status" style="color:#fff">
<BR>     
<h1 margin-left: -40px">RETURN DETAILS</h1>                                   
<FONT SIZE=6 COLOR="#1155cc">Month</FONT><IMG SRC="calendaricon.png" NAME="image6.png" HSPACE= 12 WIDTH=27 HEIGHT=32><FONT SIZE=5><B>: </B></FONT><font SIZE=5 id="elec1"></font><P></P>
<FONT SIZE=6><FONT COLOR="#1155cc">This Month Return</FONT><IMG SRC="walleticon.png" NAME="image2.png" HSPACE= 12 WIDTH=31 HEIGHT=31></FONT><FONT SIZE=5><B>: </B></FONT><FONT SIZE=5 id="elec2"></FONT><P STYLE="margin-bottom: 0in">    	</P> 
<FONT SIZE=6><FONT COLOR="#1155cc">Total Returns</FONT><IMG SRC="walleticon.png" NAME="image2.png" HSPACE= 12 WIDTH=31 HEIGHT=31></FONT><FONT SIZE=5><B>: </B></FONT><FONT SIZE=5 id="elec3"></FONT><P STYLE="margin-bottom: 0in">    	</P>
<BR><BR>
<br
</div>
</center>

<div class="grid-container">
    <center><font><h3>Unergia Dashboard</h3></font></center>
  <div class="item1" id='item1'>Chart will load here.</div>
  <div class="item2" id='item2'>Chart will load here.</div>
  <div class="item3" id='item3'></div>  
  <div class="item4" id='item4'></div>
  <div class="item5" id='item5'>5</div>
  <div class="item6" id='item6'>6</div>  
  <br>
</div>


<br><br>
<center><font><h1>Projects Invested In</h1></font></center>
<div class="grid-containe" id="xyz">
    
</div>


<div class="portal-content ng-scope" >
  <div class="tabs offering-tabs">
    <div class="tab offering-tab container unrelated-top unrelated-bottom">
      <!-- uiView: tab --><div ui-view="tab" autoscroll="false" class="ng-scope">
      
      
        <center>
          <P STYLE="margin-bottom: 0in">    	</P>
          <P STYLE="margin-bottom: 0in">    	</P>
          <P STYLE="margin-bottom: 0in">    	</P>
          <P STYLE="margin-bottom: 0in">    	</P>
          <P STYLE="margin-bottom: 1in">    	</P>
        
<div style="color:#fff">
<h1 STYLE="text-indent: 0.5in; margin-bottom: 0in"></h1>
</P>
<P STYLE="margin-bottom: 0in">    	</P>
</center>



<center>
            
<P STYLE="margin-bottom: 0in"><FONT SIZE=3><B>Unergia Sales Head:
</B></FONT><FONT SIZE=3>Farhan Ahmed</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=3><B>Email :
</B></FONT><A HREF="mailto:farhan@unergia.net"><FONT COLOR="#1155cc"><FONT SIZE=3><U>farhan@unergia.net</U></FONT></FONT></A></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=3><B>Number : </B></FONT><FONT SIZE=3>94533365462</FONT></P>
<br><br>


</center>
</div>

<script src="https://www.gstatic.com/firebasejs/5.8.1/firebase.js"></script>
<title>Unergia</title>
  <!-- including FusionCharts core package JS files -->


  <!-- Step 1 - Including the fusioncharts core library -->
  <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script> 
  <!-- Step 2 - Including the fusion theme -->
  <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>  
  <!-- including Firebase -->
  <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-database.js"></script>
 

  <script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDnpO61_-FVcjqM4wj5QWd7P51cpxW05qo",
    authDomain: "unergia-database-setup.firebaseapp.com",
    databaseURL: "https://unergia-database-setup.firebaseio.com",
    projectId: "unergia-database-setup",
    storageBucket: "unergia-database-setup.appspot.com",
    messagingSenderId: "837359356613"
  };
  firebase.initializeApp(config);
  

var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
for (var i = 0; i < queryString.length; i++)
{
	if(queryString[i]!='='){continue;}
	else var pos=i+1;
  
}
var url="";
for (var i=pos;i<queryString.length;i++)
{
 	url+=queryString[i];
}

console.log(url);
document.write(url);


var Invname="<?php echo $_SESSION['name'];?>";

document.getElementById("Welcome").innerHTML="Welcome, "+ Invname;

var ref = firebase.database().ref(url);                           
ref.on("value", function(snapshot){ 
  var data=snapshot.child(Invname).val();

  var img1=data.InvPageImage;
  var img2=data.InvPageImage2;
  var img3=data.InvPageImage3;
  //document.getElementById("img1").src=img1;
  //document.getElementById("img2").src=img2;
  //document.getElementById("img3").src=img3;
  
	$("#elec1").html(data.ReturnDetails.Month);
	$("#elec2").html(data.ReturnDetails.ThisMonthReturns);
	$("#elec3").html(data.ReturnDetails.TotalReturns);
  
	
});


var surl=window.location.search;
      var miniurl= surl.substring(surl.lastIndexOf("=") + 1);
      

function getData1(callbackIN) {
      var ref = firebase.database().ref(miniurl);
      ref.once('value').then(function(snapshot) {
        callbackIN(snapshot.child(Invname).child("Chart1").val());
      });
    }
    
function getData2(callbackIN) {
      var ref = firebase.database().ref("data2");
      ref.once('value').then(function (snapshot) {
        callbackIN(snapshot.val())
      });
    }

    

    window.addEventListener("load", getData2(genFunction1));
    function genFunction1(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
        }
     
       
    var firebaseChart1 = new FusionCharts({
        type: 'column2d',
        renderAt: 'item1',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
              "baseFont": "Verdana",
              "baseFontSize": "11",
                "baseFontColor": "#FFFFFF",
                "outCnvBaseFont": "Verdana",
                "outCnvBaseFontSize": "11",
                "outCnvBaseFontColor": "#FFFFFF",
                "caption": "Solar Energy Output",
                "bgAlpha":"100",
                "subCaption": "Last 7 Days{br}Unergia",
                "subCaptionFontBold": "0",
                "captionFontSize": "17",
                "subCaptionFontSize": "13",
                "captionPadding": "15",
                "captionFontColor": "#FFFFFF",
                "baseFontSize": "14",
                "baseFont": "Barlow",
                "canvasBgAlpha": "0",
                "bgColor": "#1B2951,#1D345B",
                "showBorder": "0",
                "showCanvasBorder": "0",
                "showPlotBorder": "0",
                "showAlternateHGridColor": "0",
                "usePlotGradientColor": "0",
                "paletteColors": "#AB26C2,#9326BF,#5E24B6,#4424B1,#3123AE,#3123AE,#2718ad",
                "showValues": "0",
                "divLineAlpha": "5",
                "showAxisLines": "1",
                "drawAnchors": "0",
                "xAxisLineColor": "#FFFFFF",
                "xAxisLineThickness": "0.7",
                "xAxisLineAlpha": "50",
                "yAxisLineColor": "#FFFFFF",
                "yAxisLineThickness": "0.7",
                "yAxisLineAlpha": "50",
                "baseFontColor": "#FFFFFF",
                "toolTipBgColor": "#FA8D67",
                "toolTipPadding": "10",
                "toolTipColor": "#FFFFFF",
                "showHoverEffect": "1",
                "plotHoverEffect": "1",
                "showLegend":"1",
                "toolTipBorderRadius": "3",
                "toolTipBorderAlpha": "0",
                "drawCrossLine": "0",
                "crossLineColor": "#FFFFFF",
                "crossLineAlpha": "60",
                "crossLineThickness": "0.7",
                "alignCaptionWithCanvas": "1"
            },

            "data": cdata
        }
    });

    firebaseChart1.render();
    
    }
    
    window.addEventListener("load", getData2(genFunction2));
    function genFunction2(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
      }


    var firebaseChart2 = new FusionCharts({
        type: 'doughnut2d',
        renderAt: 'item2',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
              "&quot;paletteColors&quot;": "&quot;#FF0000, #0372AB, #FF5904 #FFFFFF,#1BE3DA,#5D7DE9&quot;",
                "bgAlpha" :"100",
                "caption": "Solar Energy Output",
                "subCaption": "Last 7 Days{br}Unergia",
                "subCaptionFontBold": "0",
                "captionFontSize": "20",
                "subCaptionFontSize": "17",
                "captionPadding": "15",
                "captionFontColor": "#FFFFFF",
                "baseFontSize": "14",
                "baseFont": "Barlow",
                "canvasBgAlpha": "0",
                "bgColor": "#1B2951,#1D345B",
                "showBorder": "0",
                "showCanvasBorder": "0",
                "showPlotBorder": "0",
                "showAlternateHGridColor": "0",
                "usePlotGradientColor": "0",
                "paletteColors": "#58E2C2,#F7E53B",
                "showValues": "0",
                "useRoundEdges":"0",
                "divLineAlpha": "5",
                "showAxisLines": "1",
                "drawAnchors": "0",
                "xAxisLineColor": "#FFFFFF",
                "xAxisLineThickness": "0.7",
                "xAxisLineAlpha": "50",
                "yAxisLineColor": "#FFFFFF",
                "yAxisLineThickness": "0.7",
                "yAxisLineAlpha": "50",
                "baseFontColor": "#FFFFFF",
                "toolTipBgColor": "#FA8D67",
                "toolTipPadding": "10",
                "toolTipColor": "#FFFFFF",
                "toolTipBorderRadius": "3",
                "toolTipBorderAlpha": "0",
                "drawCrossLine": "1",
                "crossLineColor": "#FFFFFF",
                "crossLineAlpha": "60",
                "crossLineThickness": "0.7",
                "alignCaptionWithCanvas": "1"
            },
            "data": cdata
        }
    });


    firebaseChart2.render();
    
    }
    
    window.addEventListener("load", getData1(genFunction3));
    function genFunction3(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
      }


    var firebaseChart3 = new FusionCharts({
        type: 'area2d',
        renderAt: 'item3',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "bgAlpha":"100",
                "caption": "Solar Energy Output",
                "subCaption": "Last 7 Days{br}Unergia",
                "subCaptionFontBold": "0",
                "captionFontSize": "20",
                "subCaptionFontSize": "17",
                "captionPadding": "15",
                "captionFontColor": "#FFFFFF",
                "baseFontSize": "14",
                "baseFont": "Barlow",
                "canvasBgAlpha": "0",
                "bgColor": "#1B2951,#1D345B",
                "showBorder": "0",
                "showCanvasBorder": "0",
                "showPlotBorder": "0",
                "showAlternateHGridColor": "0",
                "usePlotGradientColor": "0",
                "paletteColors": "#D73E71,#58E2C2",
                "showValues": "0",
                "divLineAlpha": "5",
                "showAxisLines": "1",
                "drawAnchors": "0",
                "xAxisLineColor": "#FFFFFF",
                "xAxisLineThickness": "0.7",
                "xAxisLineAlpha": "50",
                "yAxisLineColor": "#FFFFFF",
                "yAxisLineThickness": "0.7",
                "yAxisLineAlpha": "50",
                "baseFontColor": "#FFFFFF",
                "toolTipBgColor": "#FA8D67",
                "toolTipPadding": "10",
                "toolTipColor": "#FFFFFF",
                "toolTipBorderRadius": "3",
                "toolTipBorderAlpha": "0",
                "drawCrossLine": "1",
                "crossLineColor": "#FFFFFF",
                "crossLineAlpha": "60",
                "crossLineThickness": "0.7",
                "alignCaptionWithCanvas": "1"
            },
            "data": cdata
        }
    });


    firebaseChart3.render();
    
    }

    window.addEventListener("load", getData1(genFunction4));
    function genFunction4(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
      }


    var firebaseChart4 = new FusionCharts({
        type: 'column2d',
        renderAt: 'item4',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
               "bgAlpha":"100",
                "caption": "Solar Energy Output",
                "subCaption": "Last 7 Days{br}Unergia",
                "subCaptionFontBold": "0",
                "captionFontSize": "20",
                "subCaptionFontSize": "17",
                "captionPadding": "15",
                "captionFontColor": "#FFFFFF",
                "baseFontSize": "14",
                "baseFont": "Barlow",
                "canvasBgAlpha": "0",
                "bgColor": "#1B2951,#1D345B",
                "showBorder": "0",
                "showCanvasBorder": "0",
                "showPlotBorder": "0",
                "showAlternateHGridColor": "0",
                "usePlotGradientColor": "0",
                "paletteColors": "#58E2C2,#3D9394",
                "showValues": "0",
                "divLineAlpha": "5",
                "showAxisLines": "1",
                "drawAnchors": "0",
                "xAxisLineColor": "#FFFFFF",
                "xAxisLineThickness": "0.7",
                "xAxisLineAlpha": "50",
                "yAxisLineColor": "#FFFFFF",
                "yAxisLineThickness": "0.7",
                "yAxisLineAlpha": "50",
                "baseFontColor": "#FFFFFF",
                "toolTipBgColor": "#FA8D67",
                "toolTipPadding": "10",
                "toolTipColor": "#FFFFFF",
                "toolTipBorderRadius": "3",
                "toolTipBorderAlpha": "0",
                "drawCrossLine": "0",
                "showHoverEffect": "1",
                "plotHoverEffect": "1",
                "showLegend":"1",
                "crossLineColor": "#FFFFFF",
                "crossLineAlpha": "60",
                "crossLineThickness": "0.7",
                "alignCaptionWithCanvas": "1"
            },
            "data": cdata
        }
    });


    firebaseChart4.render();
    
    }

    window.addEventListener("load", getData2(genFunction5));
    function genFunction5(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
      }


    var firebaseChart5 = new FusionCharts({
        type: 'bar2d',
        renderAt: 'item5',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
              "bgAlpha":"100",
                "caption": "Solar Energy Output",
                "subCaption": "Last 7 Days{br}Unergia",
                "subCaptionFontBold": "0",
                "captionFontSize": "20",
                "subCaptionFontSize": "17",
                "captionPadding": "15",
                "captionFontColor": "#FFFFFF",
                "baseFontSize": "14",
                "baseFont": "Barlow",
                "canvasBgAlpha": "0",
                "bgColor": "#1B2951,#1D345B",
                "showBorder": "0",
                "showCanvasBorder": "0",
                "showPlotBorder": "0",
                "showAlternateHGridColor": "0", 
                "showAlternateVGridColor": "0", 
                "usePlotGradientColor": "0",
                "paletteColors": "#EC84B5,#D73E71",
                "showValues": "0",
                "divLineAlpha": "5",
                "showAxisLines": "1",
                "drawAnchors": "0",
                "xAxisLineColor": "#FFFFFF",
                "xAxisLineThickness": "0.7",
                "xAxisLineAlpha": "50",
                "yAxisLineColor": "#FFFFFF",
                "yAxisLineThickness": "0.7",
                "yAxisLineAlpha": "50",
                "baseFontColor": "#FFFFFF",
                "toolTipBgColor": "#FA8D67",
                "toolTipPadding": "10",
                "toolTipColor": "#FFFFFF",
                "toolTipBorderRadius": "3",
                "toolTipBorderAlpha": "0",
                "drawCrossLine": "0",
                "showHoverEffect": "1",
                "plotHoverEffect": "1",
                "showLegend":"1",
                "crossLineColor": "#FFFFFF",
                "crossLineAlpha": "60",
                "crossLineThickness": "0.7",
                "alignCaptionWithCanvas": "1"
            },
            "data": cdata
        }
    });


    firebaseChart5.render();
    
    }

    window.addEventListener("load", getData2(genFunction6));
    function genFunction6(data) {
      var cdata = [];
      var len = data.length;
      for(var i=1; i<len; i++) {
        cdata.push({
          label: data[i]['label'],
          value: data[i]['value']
        });
      }


    var firebaseChart6 = new FusionCharts({
        type: 'cylinder',
        renderAt: 'item6',
        width: '470',
        height: '300',
        dataFormat: 'json',
        dataSource: {
         "chart": {
        "theme": "fusion",
        "caption": "Green Energy Generated",
        "paletteThemeColor": "#79ed00",
        "lowerLimit": "0",
        "upperLimit": "12000",
        "bgColor": "#1B2951,#1D345B",
        "bgAlpha": "100",
        "lowerLimitDisplay": "Start",
        "upperLimitDisplay": "Goal",
        "numberSuffix": " kwh",
        "showValue": "0",
        "chartBottomMargin": "45"
    },
    "value": "7000",
    "annotations": {
        "origw": "400",
        "origh": "190",
        "autoscale": "1",
        "groups": [
            {
                "id": "range",
                "items": [
                    {
                        "id": "rangeBg",
                        "type": "rectangle",
                        "x": "$canvasCenterX-45",
                        "y": "$chartEndY-30",
                        "tox": "$canvasCenterX +45",
                        "toy": "$chartEndY-75",
                        "fillcolor": "#1B2951"
                    },
                    {
                        "id": "rangeText",
                        "type": "Text",
                        "fontSize": "11",
                        "fillcolor": "#75e004",
                        "text": "80 ltrs",
                        "x": "$chartCenterX-45",
                        "y": "$chartEndY-50"
                    }
                ]
            }
        ]
    }
}
    });


    firebaseChart6.render();
    
    }



var slideIndex = 0;

    var query = "?para1=" + "Solitaire_S1-S11";
	//window.location.href = "inv.php" + query;
                
				var ref = firebase.database().ref("DiffProjects");
				ref.on("value", getData);
			
			   	function getData(data) {
					var projects=data.val();
					var keys=Object.keys(projects);
					console.log("KEYS "+ keys);
                    var len=keys.length;
				 
				    for(var x=0; x <keys.length; x++)
					{
					var k=keys[x];
					var fwdlink=projects[k].ForwardLink;
					var name=projects[k].Name;
					var img=projects[k].Image;
                    var item=document.createElement("div");
                    item.setAttribute('class','grid-item');
                    var image=document.createElement("img");
				    image.setAttribute('src',img);
					image.style.height="200pt";
					image.style.width = "350pt";
                    var t = document.createTextNode(name);    
                    var link =document.createElement("a");
                   // link.style.font-family="'Nunito', sans-serif";
                    //link.setAttribute('href',fwdlink);
                    link.setAttribute('href',"inv.php" + query);
                    link.appendChild(image);
                    link.appendChild(t);
                    link.style.color="white";
                    item.appendChild(link);
                    document.getElementById("xyz").appendChild(item);
                    var a = document.createElement('a');
                
                    }
                    
                    }

                      

    
</script>
</body>
</head>
</html> 
