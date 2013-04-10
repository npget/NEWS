<?php
session_start();
$_SESSION['utentepublic']=session_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengrahprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it"> 
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<meta name="robots" content="index, follow"/>

<?
if($_GET['id']!=""){$title=$_GET['id'].'-'.$_GET['idsub'].':.LETTORE-RSS.';}
else{$title="LETTORE RSS ON LINE";}
$desc='Leggi le ultime notizie di :'.$_GET['id'].'-'.$_GET['idsub'].'.   reader. Aggregatore per feed rss   by NOVAPROGET.COM .';
$tag='ANSA,ADNKRONOS,GOV,GREENPEACE,GIUSTIZIA,FEED,RSS,LAZIO,ROMA,ITALIA,NORD,SUD,WORD,SALUTE,BENESSERE,SERVIZI,PORTALE,EDILIZA,FOCUS,HEALTH';
$image="http://www.novaproget.com/img/rss.png";
$urlo="http://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI'];
?>
<meta name="description" content="<?=$desc;?>"/>
<title><?=$title;?></title>
<meta name="title" content="<?=$title;?>">
<meta name="keywords" content="<?=$tag;?>">
<meta name="description" content="<?=$desc;?>">
<link rel="canonical" href="<?=$urlo;?>">
<link rel="image_src" href="<?=$image?>">
<!-- Facebook opengraph -->
<meta property="og:title" content="<?=$title;?>" >
<meta property="og:image" content="<?=$image?>" >
<meta property="og:description" content="<?=$desc;?>" >
<meta property="og:site_name" content="NOVAPROGET" >
<meta property="og:type" content="article" >
<meta property="og:url" content="<?=$urlo?>" >






<link type="text/css" href="http://novaproget.com/css/css/novacss/nova.css" rel="stylesheet" />	
<link rel="stylesheet" href="http://novaproget.com/css/development-bundle/themes/ui-darkness/jquery.ui.all.css">
<script type="text/javascript" src="http://novaproget.com/css/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://novaproget.com/css/js/jquery-ui-1.8.16.custom.min.js"></script>

</head>
<body style='font-family:Segoe UI,Arial,Verdana;font-size:1.2em;width:100%;margin-left:-2px;' >


<div id='start' class='ui-widget-overlay' style="width:100%;height:1980px;z-index:1001">
<div style='position:absolute;top:10%;left:15%;background-color:#fff;PADDING:25PX;z-index:99999;font-size:19px;width:70%;' >
<div style='left:25%;RIGHT:25%;top:-1px;padding:4px;'class='ui-state-default ui-corner-all'>

	<a style='cursor:pointer;margin-right:15%;' title="VEDI LE NOTIZIE" class='loader' >
	<IMG  SRC="http://www.novaproget.com/img/rss.png"  border="0" width="40" alt='novaproget' align="middle">
	Vedi-tool</A>
	
	
	<a title='Chiedi Informazioni o Segnala abuso'  style='margin-right:15%;'href='http://www.novaproget.com/contact#novaproget'>
	<IMG  SRC="http://www.novaproget.com/file/mailbox.png" style='cursor:pointer' border="0" width="40" alt='novaproget' align="middle">
	Informazioni</a>
	
	<a class='fblogin' title='VEDI APP SU FACEBOOK' style='margin-left:1%;' href='http://www.facebook.com/pages/Novaproget/101217679985188?id=101217679985188&sk=app_137541772984354' target='_blank'>
	<IMG  class='fblogin' SRC="http://www.novaproget.com/appfb.png" style='cursor:pointer' border="0" width="40" alt='novaproget' align="middle">
	su Facebook</a>
</div></div>
</div>

<div>
<div style='padding:20px;margin-top:-10px;position:fixed;z-index:101;'class='ui-state-default'>
<div id='social-shar3' class='socialstart' style='float:left;width:99%;margin-top:-35px'>
	<div style='position:absolute;left:35%;top:-1px;padding:4px;'class='ui-state-default ui-corner-all'>
<a href='HTTP://WWW.NOVAPROGET.COM'>
	<IMG  SRC="http://www.novaproget.com/img/rss.png" border="0" width="40" alt='novaproget' align="middle">
	bY NOVAPROG&T
	</a><a href="skype:novaproget?userinfo">
<img src="http://mystatus.skype.com/smallclassic/novaproget" style="border:0;"  
alt="My status"></a></div>
<?
// thisisi the file external. 
include '../novasocial.php';?>
<em style='top: -29px;position:relative;float:left;background-color:#fff;color:black;
left: 16px;font-size:11px;'>Le informazioni provengono da domini pubblici e le anteprime delle attività sociali possono variare rispetto alle tipologie . </em>

</div>

<script>
$("#start").hide();
function ejs_nodroit(){$("#start").show();}
document.oncontextmenu = ejs_nodroit;
$("#start .loader").click(function(){$("#start").hide();
});



//<script>$('#start').show();$("#start .loader").click(function(){$("#start").hide();})</script>

</script>

	

	
	<div style="padding:6px;width:100%;float:right" class='ui-state-active' >
	<?
	
	function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;

 }
 

	?>
	
	<?
	$sitemy="http://".$_SERVER["HTTP_HOST"].'/NEWS/';
	$redirect="http://".$_SERVER["HTTP_HOST"].'/';
	//.$_SERVER['REQUEST_URI'];
	
	$tagget=array('ADNKRONOS',
	'SKYTG24','SECXIX','ANSA',
	'GOV-ITA','WIRED','HARDWARE','EDILPORTALE','EMERGENCY'
	,'FOCUS','ENGINE-SEJ');
	foreach($tagget as $i){
		if($_GET['id']==$i){ $class="class='ui-state-hover' style='margin: 9px;padding: 4px;position: relative;font-size: 21px;'"; }else{$class="style='margin:9px;' ";}
	?>
	<a <?=$class;?> href='<?=$sitemy.$i;?>'><?=$i;?></a>
	
	<?

	}?>
<?


function formsub($array,$uri){
?>
<style>.subdir a:hover {background-color:orange;color:#fff;}</style>
<div class='subdir'style='float:right'><center><?
foreach($array as $val){

if($_GET['idsub']==$val){$class="class='ui-state-hover' style='margin:8px;padding: 3px;position: relative;font-size: 18px;'"; }else{$class="style='margin:5px;font-size:12px;' ";}

?>

<a  <?=$class;?> href='<?echo $uri.$_GET['id'].'/'.$val;?>'><?=$val;?></a>



<?

}

?> </center></div><?}
?>
	</div>

<?


$urls="http://".$_SERVER["HTTP_HOST"]."/NEWS/";
if($_GET['id']=='MESSAGGERO'){$filenamepost="http://www.ilmessaggero.it/rss/home.xml ";}
if($_GET['id']=='ADNKRONOS'){$filenamepost="http://rss.adnkronos.com/RSS_Ultimora.xml";}
if($_GET['id']=='SKYTG24'){$filenamepost="http://feeds.feedburner.com/SkyitTg24";}
if($_GET['id']=='NOTIZIE'){$filenamepost="http://www.notizie.net/ultim-ora/feed";}

if($_GET['id']=='SECXIX'){$filenamepost="http://www.ilsecoloxix.it/homepage/rss/homepage.xml";}
if($_GET['id']=='HARDWARE'){$filenamepost="http://feeds.hwupgrade.it/rss_hwup.xml";}








if($_GET['id']=='GOV-ITA'){
$s=array('DIFESA','GIOVENTU','INTERVENTI','COMUNICATI-GOV','DOSSIER-GOV','PODCAST-GOV','GIUSTIZIA-NEWS',
'GIUSTIZIA-MERITO','GIUSTIZIA-COMUNICATI');
formsub($s,$urls);

if($_GET['idsub']=='GIUSTIZIA-MERITO'){$filenamepost="http://www.giustizia.it/giustizia/rss?id=751331";}
if($_GET['idsub']=='GIUSTIZIA-NEWS'){$filenamepost="http://www.giustizia.it/giustizia/rss?id=19266";}
if($_GET['idsub']=='GIUSTIZIA-COMUNICATI'){$filenamepost="http://www.giustizia.it/giustizia/rss?id=19264";}


if($_GET['idsub']=='DIFESA'){$filenamepost="http://www.esercito.difesa.it/notizie/_layouts/listfeed.aspx?List=8b33657d-1a44-4fba-a04e-cbad764b98a1&view=9b380b5d-0e3f-4bfb-b70a-8dd21f00982e";}

if($_GET['idsub']=='PODCAST-GOV'){$filenamepost="http://www.governo.it/rss/podcast.xml";}
if($_GET['idsub']=='INTERVENTI'){$filenamepost="http://www.governo.it/rss/interventi.asp";}
if($_GET['idsub']=='DOSSIER-GOV'){$filenamepost="http://www.governo.it/rss/dossier.xml";}
if($_GET['idsub']=='GIOVENTU'){$filenamepost="http://www.gioventu.gov.it/rss.aspx";}
if($_GET['idsub']=='COMUNICATI-GOV'){$filenamepost="http://www.governo.it/rss/comunicati.asp";}
if($_GET['idsub']==""){
$filenamepost="http://www.governo.it/rss/notizie_homepage.asp";}}


if($_GET['id']=='ENGINE-SEJ'){$filenamepost="http://feeds.feedburner.com/SearchEngineJournal";}
if($_GET['id']=='EDILPORTALE'){$filenamepost="http://www.edilportale.com/rss.xml";}


if($_GET['id']=='EMERGENCY'){
$s=array('EMERG-PHOTO','EMERG-VIDEO','EMERG-ITALIA');
formsub($s,$urls);



if($_GET['idsub']=='EMERG-PHOTO'){$filenamepost="http://www.greenpeace.org/international/Templates/Planet3/Handlers/RssHandler.ashx?type=photos&epslanguage=en-GB";}
if($_GET['idsub']=='EMERG-VIDEO'){$filenamepost="http://www.greenpeace.org/international/Templates/Planet3/Handlers/RssHandler.ashx?type=videos&epslanguage=it-IT";}
if($_GET['idsub']=='EMERG-ITALIA'){$filenamepost="http://www.greenpeace.org/italy/it/rss/comunicati-stampa/32/";}
if($_GET['idsub']==""){
$filenamepost="http://www.greenpeace.org/international/Templates/Planet3/Handlers/RssHandler.ashx?type=press&epslanguage=en-GB";}

}

//WIRED
if($_GET['id']=='WIRED'){
$s=array('WIRED-ITALIA','WIRED-AUTOPIA','DANGER-ROOM','OPIONION','DAY-TECH','SCIENCE');
formsub($s,$urls);
if($_GET['idsub']=='SCIENCE'){$filenamepost="http://www.wired.com/wiredscience/feed/";}
if($_GET['idsub']=='DAY-TECH'){$filenamepost="http://www.wired.com/thisdayintech/feed/";}
if($_GET['idsub']=='OPIONION'){$filenamepost="http://www.wired.com/insights/feed/";}
if($_GET['idsub']=='WIRED-ITALIA'){$filenamepost="http://www.wired.it/rss.xml";}
if($_GET['idsub']=='WIRED-AUTOPIA'){$filenamepost="http://www.wired.com/autopia/feed/";}
if($_GET['idsub']=='DANGER-ROOM'){$filenamepost="http://www.wired.com/dangerroom/feed/";}
if($_GET['idsub']==""){



$filenamepost="http://feeds.wired.com/wired/index";}}



//ANSA 
if(($_GET['id']=='ANSA')or($_GET['id']=='ANSA-MONDO')or($_GET['id']=='ANSALAZIO')){
$s=array('MONDO','LAZIO','INTERNET','ITALIA','ECONOMIA','TOPNEWS','SCIENZA');
formsub($s,$urls);




if($_GET['idsub']=='ITALIA'){$filenamepost="http://www.ansa.it/main/notizie/awnplus/italia/synd/ansait_awnplus_italia_medsynd_Today_Idx.xml";}
if($_GET['idsub']=='MONDO'){$filenamepost="http://www.ansa.it/web/notizie/rubriche/mondo/mondo_rss.xml";}
if($_GET['idsub']=='LAZIO'){$filenamepost="http://www.ansa.it/web/notizie/regioni/lazio/lazio_rss.xml";}
if($_GET['idsub']=='INTERNET'){$filenamepost="http://www.ansa.it/main/notizie/awnplus/internet/synd/ansait_awnplus_internet_medsynd_Today_Idx.xml";}
if($_GET['idsub']=='ECONOMIA'){$filenamepost="http://www.ansa.it/main/notizie/awnplus/economia/synd/ansait_awnplus_economia_medsynd_Today_Idx.xml";}
if($_GET['idsub']=='TOPNEWS'){$filenamepost="http://www.ansa.it/web/ansait_web_rss_homepage.xml";}
if($_GET['idsub']=='SCIENZA'){$filenamepost="http://www.ansa.it/main/notizie/awnplus/scienza/synd/ansait_awnplus_scienza_medsynd_Today_Idx.xml";}
if($_GET['idsub']==""){
$filenamepost="http://www.ansa.it/main/notizie/awnplus/topnews/synd/ansait_awnplus_topnews_medsynd_Today_Idx.xml";


}
}


//FOCUS
if($_GET['id']=='FOCUS'){
$s=array('FOTO_FOCUS','SONDAGGI_FOCUS','BRAIN_FOCUS','STORIA_FOCUS','MISTERO_FOCUS','ARTE_FOCUS',
'SPORT_FOCUS','ECONOMIA_FOCUS','CURIOSI_FOCUS','CIBO_FOCUS','SESSO_FOCUS','SALUTE_FOCUS','PSICHE_FOCUS','HEALTH_FOCUS'
,'ROBOT_FOCUS','HITECH_FOCUS','GEO_FOCUS','SPACE_FOCUS','RHOS_FOCUS','GEOHEARTH');
formsub($s,$urls);
if($_GET['idsub']=="GEOHEARTH"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/natura-e-ambiente.aspx";}
if($_GET['idsub']=="RHOS_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/natura.aspx";}
if($_GET['idsub']=="ECO_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/ecologia.aspx";}
if($_GET['idsub']=="SPACE_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/spazio.aspx";}
if($_GET['idsub']=="GEO_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/geologia.aspx";}
if($_GET['idsub']=="ENERCY_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/energia.aspx";}
if($_GET['idsub']=="HITECH_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/hi-tech.aspx";}
if($_GET['idsub']=="ROBOT_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/robot.aspx";}
if($_GET['idsub']=="HEALTH_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/sesso-e-salute.aspx";}
if($_GET['idsub']=="PSICHE_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/psicologia.aspx";}
if($_GET['idsub']=="SALUTE_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/salute.aspx";}
if($_GET['idsub']=="SESSO_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/sessualita.aspx";}
if($_GET['idsub']=="CIBO_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/alimentazione.aspx";}
if($_GET['idsub']=="CURIOSI_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/curiosita.aspx";}
if($_GET['idsub']=="FOTO_FOCUS"){$filenamepost="http://www.focus.it/rss/rubrica/foto-del-giorno.aspx";}
if($_GET['idsub']=="SONDAGGI_FOCUS"){$filenamepost="http://www.focus.it/rss/test-e-sondaggi.aspx";}
if($_GET['idsub']=="BRAIN_FOCUS"){$filenamepost="http://www.focus.it/rss/canale/brain-trainer.aspx";}
if($_GET['idsub']=="STORIA_FOCUS"){$filenamepost="http://www.focus.it/rss/canale/storia.aspx";}
if($_GET['idsub']=="MISTERO_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/mistero.aspx";}
if($_GET['idsub']=="ARTE_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/arte.aspx";}
if($_GET['idsub']=="SPORT_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/sport.aspx";}
if($_GET['idsub']=="ECONOMIA_FOCUS"){$filenamepost="http://focus3.preview.mmm.it/rss/canale/economia.aspx";}


if($_GET['idsub']==""){
$filenamepost="http://www.focus.it/rss/news.aspx";}

}


if(($_GET['id']=="")){


$filenamepost="http://rss.adnkronos.com/RSS_Ultimora.xml";







	?>
	<script>$('#start').show();$("#start .loader").click(function(){$("#start").hide();})</script>
<?}?>
	
	</div>

<div style='height:220px;'></div>


<style>
.chartenova img{border:0;width:190px;}
</style>
<?
$posit=array("left","right","top","bottom");
shuffle($posit);
?>
<div id='charter' style='position:relative;margin-top:10%;width:99%;<?print_r($posit[0]);?>:0px;'></div>
<div class='chartenova'style='margin-left:2%;margin-right:-2%;' ></div>

<script>

$(document).ready(function() {$("#charter").html("<center><h2>Attendere ->  <? echo $_GET['id'];echo '-'.$_GET['idsub'];?></h2><img src='<?echo $redirect;?>img/news.jpg' border='0' width='80px;'> <img src='<?=$redirect;?>novaprogress.gif'border='0'  width='48px'><br><?=$filenamepost;?></center>");
});
$(".chartenova").load('<?echo "http://".$_SERVER["HTTP_HOST"];?>/NEWS/exlater.php?novaproget=<?ECHO base64_encode($filenamepost);?>');



</script>







</body></html>
