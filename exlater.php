
<script>
//$(".chartenova").load('<?=$urls;?>later.php?filenamepost=<?=$filenamepost;?>');
//$(document).load(function() {$("#charter").hide(1000);});

$("#charter").hide(1000);

</script>


<?php
session_start();
$urls="http://".$_SERVER["HTTP_HOST"].'/NEWS/';
$redire="http://".$_SERVER["HTTP_HOST"].'/';

if($_SESSION['utentepublic']==session_id()){


$paturl=base64_decode($_REQUEST['novaproget']);



if( ! ($fp = fopen($paturl , "r" )) ){echo "Impossibile aprire il file xml!";}
$item_counter = 0;
$item_data = array();
$xml_current_tag_state = '';
function startElementHandler( $parser, $element_name, $element_attribs ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	$xml_current_tag_state = $element_name;
}
function endElementHandler( $parser, $element_name ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	$xml_current_tag_state = '';
	if( $element_name == "ITEM" ) {
		$item_counter++;
	}
}
function characterDataHandler( $parser , $data ){
	global $item_counter;
	global $item_data;
	global $xml_current_tag_state;
	if( $xml_current_tag_state == '' ) {
		return;
	}
	if( $xml_current_tag_state == "TITLE" ) {
		$item_data[$item_counter]["title"] = base64_encode($data);
	}
	if( $xml_current_tag_state == "LINK" ) {	
		$item_data[$item_counter]["link"] = urlencode($data);
	}
	
	
	if( $xml_current_tag_state == "THUMB" ) {
		$item_data[$item_counter]["thumb"] = $data;
	}
	if( $xml_current_tag_state == "ENCLOSURE" ) {
		$item_data[$item_counter]["thumb"] = $data;
	}
		
	
	if( $xml_current_tag_state == "CONTENT" ) {
		//$item_data[$item_counter]["content"] =utf8_encode(strip_tags(html_entity_decode($data)));
		$item_data[$item_counter]["content"] =base64_encode($data);
	}
		if( $xml_current_tag_state == "DESCRIPTION" ) {
	$item_data[$item_counter]["content"] =base64_encode($data);

			}
	
		if( $xml_current_tag_state == "PUBDATE" ) {
		$item_data[$item_counter]["datatime"] =$data;

		
	}
	
	
	
	
}
if( !($xml_parser = xml_parser_create()) ){
	die("Impossibile creare l' XML parser!");
}

xml_set_element_handler($xml_parser, "startElementHandler", "endElementHandler");
xml_set_character_data_handler($xml_parser, "characterDataHandler");

$data = stream_get_contents($fp);
if( !xml_parse($xml_parser, $data, feof($fp)) ){
	break; // esce dal loop quando finisce
}

xml_parser_free($xml_parser);
	?><div onselectstart="return false;"style='width:100%;' ><?
for( $i=0 ; $i < $item_counter ; ++$i ){
	//echo "<b>	<a href='http://www.novaproget.com/news.php?notizia=".$item_data[$i]["link"]."'  target='_blank' >".$item_data[$i]["title"]."</a>
	

	echo "<DIV id='div_".$i."' STYLE='cursor:pointer;float:left;width:48%;height:auto;position:relative;'><b>	
	<a  title='VEDI  ...'  style='text-decoration:none;font-size:19px;' >
	".base64_decode($item_data[$i]["title"])."</a></B>
	";
	if($item_data[$i]["thumb"]!=""){
	echo"<img src=".$item_data[$i]['thumb']." align='middle' >";
	
	}
	echo "<span style='color:silver;font-size:19px;cursor:pointer'>>></span><BR>
	".base64_decode($item_data[$i]['content']);
	echo "<br><em style='font-size:12px;padding2px;'class='ui-state-highlight'>".$item_data[$i]['datatime'].'</em>';
	?><br>
	
		
<div id="hide_<?=$i;?>" style="z-index:23;padding:10px;position:relative;float:right;width:95%;height:auto;" class='ui-state-default'> 



</div><br></hr>
</div>
	<script>
$("#hide_<?=$i;?>").hide();

$("#div_<?=$i;?>").click(function(){  

$("#hide_<?=$i;?>").show('slow');

$("#hide_<?=$i;?>").load('<?echo "http://".$_SERVER["HTTP_HOST"];?>/NEWS/latersocial.php?novatitle=<?=$item_data[$i]["title"];?>&urlnova=<?=$item_data[$i]["link"];?>');


});  

$("#div_<?=$i;?>").mouseleave(function(){ $("#hide_<?=$i;?>").hide('slow');
  }); 
</script>
	<?



}
	?></div><?
}//chiudocontrollosessione
else{"NON AUTORIZZATO";}


	?>



