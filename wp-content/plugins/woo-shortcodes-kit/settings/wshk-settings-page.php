<?php

/*WSHK SETTINGS PAGE STYLE*/

?>

<style>

    div#wpfooter {
        margin-left: 0px;
    }

/*SAVE SETTINGS*/

  .probando {
    background-color: #c6adc2;
    border: 1px solid #c6adc2;
    border-radius: 13px;
    color: white;
    /* padding: 16px 32px; */
    width: 50%;
    height: 55px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 18px;
    margin: 4px 2px;
    /* -webkit-transition-duration: 0.3s; */
    /* transition-duration: 0.3s; */
    cursor: pointer;
    letter-spacing: 1px;
}


.probando:Hover {
    background-color: #a46497; 
    color: white; 
    border: 1px solid #a46497;
    border-radius: 13px;
}



.wshksettexto {
    display:none;
}

.wshksetimgo{
    width:32px;
    height:32px;
}

.wshksetimg {
    width: 25px; 
    height: 25px;
    vertical-align: sub;
}

.probandote {
background-color: #c6adc2;
border: 1px solid #c6adc2;
color: white;
padding: 10px;
width: 60px;
height: auto;
text-align: center;
text-decoration: none;
display: inline-block;
font-weight: 900;
text-transform: uppercase;
font-size: 11px;
/* margin: 4px 2px; */
/*-webkit-transition-duration: 0.3s;*/
/*transition-duration: 0.3s;*/
cursor: pointer;
letter-spacing: 1px;
z-index: 9999;
position: fixed;
right: 2px;
top: 470px;
/*transition: all 0.2s ease-in 0s;*/
border-radius:13px;
-webkit-box-shadow: 0px 2px 4px 0px rgba(112,112,112,0.40);
-moz-box-shadow: 0px 2px 4px 0px rgba(112,112,112,0.40);
box-shadow: 0px 2px 4px 0px rgba(112,112,112,0.40);
}

.probandote:hover {
background-color: #a46497; 
color: white; 
border: 1px solid #a46497;
border-top-left-radius: 13px;
border-bottom-left-radius: 13px;
}

/*END*/    

input[type=checkbox].testininputclass{
	height: 0;
	width: 0;
	visibility: hidden;
}

label.testintheclass {
	cursor: pointer;
	text-indent: -9999px;
	width: 64px;
	height: 32px;
	background: #f2f7f6;
	display: block;
	border-radius: 100px;
	position: relative;
}

label.testintheclass:after {
	content: '';
	position: absolute;
	top: 5px;
	left: 5px;
	width: 22px;
	height: 22px;
	background: #c6adc2;
	border-radius: 90px;
	transition: 0.3s;
}

input:checked + label.testintheclass {
	background: #f2f7f6;
}

input:checked + label.testintheclass:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
	background: #aadb4a;
}

label.testingtheclass:active:after {
	width: 50px;
}

// centering
body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
input[type="number"].testininputclass,
input[type="text"].testininputclass
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
}
/*input[type="textarea"]*/
.textarea
{


/*box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 245px;*/


box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 500px;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
    resize:none;
    overflow: hidden;
}

.wp-admin select {
    padding: 2px;
    line-height: 28px;
    height: 48px !important;
    border: 1px solid transparent !important;
}


/* Style the element that is used to open and close the accordion class */
div.accordion {
 background-color: #a46497;
 color: #fff;
 cursor: pointer;
 padding: 18px;
 /*width: 96%;*/
 text-align: left;
 border: none;
 border-radius: 13px;
 outline: none;
 transition: 0.4s;
 margin-bottom:10px;
}
/* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
div.accordion.active, p.accordion:hover {
 background-color: #c6adc2;
}
/* Unicode character for "plus" sign (+) */
div.accordion:after {
 content: "<?php esc_html_e( 'Show Advanced Options', 'woo-shortcodes-kit' ); ?> \1f441";
 font-size: 15px;
 color: #fff;
 float: right;
 margin-left: 5px;
 margin-top: -20px;
}
/* Unicode character for "minus" sign (-) */
div.accordion.active:after {
 content: "<?php esc_html_e( 'Hide Advanced Options', 'woo-shortcodes-kit' ); ?>  \1f5d9";
 font-size: 15px;
 color: #a46497;
 float: right;
 margin-left: 5px;
 margin-top: -20px;
}
/* Style the element that is used for the panel class */
div.panel {
 padding: 0 18px;
 background-color: transparent;
 max-height: 0;
 overflow: hidden;
 transition: 0.4s ease-in-out;
 opacity: 0;
 margin-bottom:10px;
}
div.panel.show {
 opacity: 1;
 max-height: 100%; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
}


/*COPY BUTTON AND TOOLTIPS STYLE*/

.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

/*Sections accordion - first step*/

.pcontainer {
  width: 100%;
  /*margin: 0 auto;*/
  
}

.acc {
  margin-top: 50px;
  overflow: hidden;
  /*padding: 0;*/
}

.acc li {
  list-style-type: none;
  /*padding: 0;*/
}

.acc_ctrl {
  /*background: #FFFFFF;*/
  background: linear-gradient(45deg, #f7f7f7, #ffffff);
  border: 1px solid #f7f7f7;
  border-bottom: solid 1px #f7f7f7;
  cursor: pointer;
  display: block;
  outline: none;
  padding: 2em;
  position: relative;
  text-align: left;
  /*width: 97%;*/
}


.acc_ctrl:before {
  /*background: #44596B;*/
  content: '';
  height: 2px;
  margin-right: 37px;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  width: 14px;
}

.acc_ctrl:after {
  /*background: #44596B;*/
  content: '';
  height: 2px;
  margin-right: 37px;
  position: absolute;
  right: 0;
  top: 50%;
  width: 14px;
}

.acc_ctrl.active:before {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}

.acc_ctrl.active h2, .acc_ctrl:focus h2 {
  position: relative;
}

.acc_panel {
  /*background: #F2F2F2;*/
  display: none;
  overflow: hidden;
}

div.acc_ctrl > h3 {
    
    max-width:80% !important;
    }
    
    
/*WSHK FUNCTIONS INTRO BOX*/

.wshkintrobox {
    
    background-color:white;
    border:1px solid #a46497;
    border-radius:13px;
    padding:20px;
    color:#a46497;
    
}


/*Responsive*/

@media screen and (max-width: 450px) {
/*Top menu buttons*/
    #wshk-tab-menu {
        column-count: 2 !important;
    }
}

@media screen and (max-width: 599px) {
    
    /*Plugin title*/
    .wshkheadertitle {
        width:90% !Important;
    }
    .wshkplutitle {
        font-size:24px !Important;
    }
    /*Plugin querys*/
    .wshkquerys {
        margin-top:15px !Important;
    }
    /*Top menu buttons*/
    #wshk-general, #wshk-news, #wshk-languages, #wshk-recom, #wshk-contact {
        width:65px !important;
        display: inline-table;
    }
    #wshk-tab-menu a {
        font-size:14px !important;
    }
    
    
    /*accordion title*/
    div.acc_ctrl > h3 {
    font-size:12px !important;
    /*max-width:80% !important;*/
    }
    /*accordion logo addons*/
    div.acc_ctrl > img {
    width: 32px !important;
    height: 32px !important;
    display: block;
    float: right;
    margin-top: -40px !important;
    }
    
    
    /*news section message box*/
    .boxwshknotify {
    /* margin: 0px 80px; */
    padding: 30px 30px !important;
    background: linear-gradient(45deg, #74689b, #74689bba) !important;
    width: 80% !important;
    margin: auto !important;
    }
    
    /*language sections root and available columns*/
    .wshklangroot, .wshklangavail, .wshklangrootdesc, .wshklangavaildesc {
    display:none !important;
    }
    
    
    /*Contact section videos box*/
    td.wshkcontactvideosbox {
        display:none;
    }
    
    
    /*Save settings footer button*/
    .probando {
        width:55% !important;
    }
    
    /*WSHK settings container text*/
    .forcontainertitles {
        font-size:85% !important;
    }
    .accordion:after {
        font-size:80% !important;
    }
    
    /*WSHK function docs and help*/
    .wshkfirststepfunc {
        margin-top:50px;
    }
    
    /*Orders list funct step two - table from 50% to 100%*/
    .funcordersteptwo {
        width:100% !important;
    }
    
    /*Conditional message texts - max width 300px*/
    .forsmalldropdowns.maxwid{
        max-width:300px !important;
    }
    #wshk_textwmssg {
        max-width:300px !important;
        height:120px !important;
    }
    
    /*User spent by order status - function column*/
    .wshkhidefuncol {
        display:none;
    }
    
    /*Saving prices - dropdown*/
    #wshk_yessalebadge {
        width:100% !important;
    }
    
    /*Display max and min - dropdown*/
    #wshk_minpricevarpro {
        width:100% !important;
    }
    /*pro box*/
    .maxminprobox {
        margin-left:0px !important;
    }
    
    /*GDPR global settings - text area*/
    #wshk_gprduserlegalinfo, #wshk_gprdcomveri, #wshk_gprdordveri, #wshk_gprdrewveri, #wshk_gprdregveri {
        max-width:300px !important;
    }
    
    /*Security headers*/
    .wshksecheadtab {
        width:300px !important;
    }
    
    /*Dropdowns*/
    .forsmalldropdowns {
        display:block !important;
        width:100% !important;
        border:none !important;
        padding-left:0px !important;
    }
    
    /*P inputs*/
    .wshkfunctinputs {
        margin-bottom:30px;
    }
    
    /*EMAB dashboard textarea*/
    .emabdashboarea {
        padding:0px !important;
    }
    
    /*WSHK PRO*/
    /*Ribon*/
    .hideribopro {
        display:none;
    }
    /*chart box*/
    .wshkprochartbox, #wshk_displaycustavatartoo {
        max-width:300px !important;
        width:100% !important;
        min-width:300px !important;
    }
}

@media screen and (max-width: 715px) {

    
    /*Plugin title*/
    .wshkheadertitle {
        width:90% !Important;
    }
    
    /*language sections root and available columns*/
    .wshklangroot, .wshklangavail, .wshklangrootdesc, .wshklangavaildesc {
    display:none !important;
    }
    
    /*WSHK shortcode box*/
    .copyshortcodebox {
        font-size:80%;
    }
    .copyshortcodebox > td {
        font-size:80% !important;
        padding-left:0px !important;
        width:100% !important;
        display:block !important;
    }
    
    .shtboxone{
        width:50% !important;
        /*display:block !important;*/
        padding:5px !important;
        font-size:12px !important;
    }
    .shtboxone > p{font-size:80% !important;}
    .shtboxone > p > big > input{font-size:90% !important;}
    .shtboxtwo{
        width:100% !important;
        display:block !important;
        padding:15px !important;
    }
    .shtboxthree{
        display:none; !important
        
    }
}

@media screen and (max-width: 940px) {
    
    /*section infobox title*/
    .wshkinfoboxtitle  > span {
    font-size:19px !important;
    }
    /*section infobox description*/
    .wshkinfoboxdesc > small > span {
        padding-left:0px !important;
    }
    
    /*Recommends section box*/
    .row {
        display:block !important;
    }
    
    /*Contact section subscribe now btn*/
    .wshksubscribenowbtncontact {
        font-size:10px !important;
    }
}
</style>
<!-- Accordion -->
<script>
document.addEventListener("DOMContentLoaded", function(event) {
var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel');
for (var i = 0; i < acc.length; i++) {
 acc[i].onclick = function() {
 var setClasses = !this.classList.contains('active');
 setClass(acc, 'active', 'remove');
 setClass(panel, 'show', 'remove');
 if (setClasses) {
 this.classList.toggle("active");
 this.nextElementSibling.classList.toggle("show");
 }
 }
}
function setClass(els, className, fnName) {
 for (var i = 0; i < els.length; i++) {
 els[i].classList[fnName](className);
 }
}
});
</script>

<!--TOGGLE PRINCIPAL-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function() {
  $('.acc_ctrl').on('click', function(e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next()
      .stop()
      .slideUp(300);
    } else {
      $(this).addClass('active');
      $(this).next()
      .stop()
      .slideDown(300);
    }
  });
});
</script>