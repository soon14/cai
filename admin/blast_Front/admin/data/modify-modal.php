<?php $para=$args[0]; 

// if($para['type']==1){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
	// if($para['actionNo']==120) $actionNo=date('Ymd-', strtotime($para['actionTime'])-24*3600).substr($para['actionNo']+1000,1);
// }else if($para['type']==3||$para['type']==6||$para['type']==7||$para['type']==14||$para['type']==61){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
// }else if($para['type']==11){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+100,1);
// }else if($para['type']==12){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+100,1);
// }else if($para['type']==5){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+10000,1);
// }else if($para['type']==25){
	// $actionNo=date('md', strtotime($para['actionTime'])).substr($para['actionNo']+100,1);
// }else if($para['type']==14 || $para['type']==26 || $para['type']==18 || $para['type']==17 || $para['type']==16 || $para['type']==15|| $para['type']==65 || $para['type']==59|| $para['type']==55|| $para['type']==60|| $para['type']==64|| $para['type']==66){
	// $actionNo=date('Ymd-', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
// }
?>
<div>
<input type="hidden" value="<?=$this->user['username']?>" />
<form action="/index.php/data/modifyed" target="ajax" method="post" call="dataSubmitCode" onajax="dataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="type" value="<?=$para['type']?>"/>
	<table class="popupModal">
		<tr>
			<td class="title" width="180">期号：</td>
			<td><?=$para['actionNo']?><input type="hidden" name="number" value="<?=$para['actionNo']?>"/></td>
		</tr>
		<!--tr>
			<td class="title">开奖时间：</td>
			<td><input type="text" name="time" value="<?=$para['actionTime']?>"/></td>
		</tr-->
		<tr>
			<td class="title">开奖号码：</td>
			<td><input type="text" name="data" value="<?=$para['data']?>"/></td>
		</tr>
		<tr>
			<td align="right"><span class="spn4">提示：</span></td>
			<td><span class="spn4">请确认【期号】和【开奖号码】正确，输入后不可更改！<br/>号码格式如: 1,2,3,4,5</span></td>
		</tr>
	</table>
</form>
</div>