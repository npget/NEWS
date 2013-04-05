<?
if($_SESSION['utentepublic']==session_id()){


$item_data=urldecode($_REQUEST['urlnova']);
$novatitle=$_REQUEST['novatitle'];





//echo $item_data;
?>
<table style='width:95%;'>
<td  style='width:85%:'>
<a href="http://www.novaproget.com/?novatitle=<?=$novatitle;?>&urlnova=<?echo urldecode($_REQUEST['urlnova']);?>" title='Vedi Notizia' style='text-decoration:none' target="_blank"> 
<IMG SRC="http://www.novaproget.com/img/rss.png" border="0" style="width:45px;display:block;" alt='novaproget' align="middle">
</a>
<br>

<a href="http://www.novaproget.com/?novatitle=<?=$novatitle;?>&urlnova=<?echo urldecode($_REQUEST['urlnova']);?>" title='Vedi Notizia' style='text-decoration:none' target="_blank"> 
Leggi Notizia .</a>
</td><td>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&appId=411187172266211";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


Anteprima Share .
<br>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js" gapi_processed="true">{lang: 'it'}</script>

<div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?=$item_data;?>" ></div>
<br>



<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=$item_data;?>" data-via="novaprogetrome">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<br>
<iframe src="//www.facebook.com/plugins/like.php?href=<?echo urlencode($item_data);?>&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=recommend&amp;height=21&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>


<!--
<iframe src="//www.facebook.com/plugins/like.php?href=<?echo urlencode($item_data);?>&amp;send=false&amp;layout=&amp;width=200&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
<br>-->



<br>

<a href='https://www.facebook.com/sharer/sharer.php?u=<?echo urlencode($item_data);?>' target='_blank' title='condividi-link'alt='condividi-link'>
condividi fb<img src='http://www.novaproget.com/img/facebook-icon_25x25.png'  border='0' style='width:25px;display:block;'>
</a>

<br>

</td>
</table>








<?
}else{echo 'nonautorizzato';}



?>