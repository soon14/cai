<?php 
$sql="select simpleInfo, info, example  from {$this->prename}played where id=?";
$playeds=$this->getRows($sql, $args[0]);
?>
<div class="showhelp">
<span class="wfsm">玩法说明</span>
	<h5 id="lt_desc"><?=$playeds[0]["simpleInfo"]?></h5>
	
    <span action="lt_example" class="methodexample showeg">示例</span>
    <span action="lt_help" class="methodhelp showeg">帮助</span>
    <div class="clear"></div>
</div>
<div class="game_eg hide" id="lt_examples_div">
	<div class="cont"><?=$playeds[0]["example"]?$playeds[0]["example"]:$playeds[0]["simpleInfo"]?></div>
 </div>
 <div class="game_eg hide" id="lt_helps_div">
	<div class="cont"><strong>说明：</strong><br /><?=$playeds[0]["info"]?></div>
 </div>