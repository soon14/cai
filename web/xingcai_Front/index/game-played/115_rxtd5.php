<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<div class="dmtm unique" >
	<div class="dantuo" style="display:none;" >
		<label><input type="radio" name="dantuo" value="1" checked="checked">胆拖</label>
	</div>
    <div class="pp pp11" action="tz11x5Select" length="6">
        <div class="title">胆码</div>
        &nbsp;
        <div class="code-wrapper">
        <input type="button" value="01" class="code d min" />
        <input type="button" value="02" class="code s min" />
        <input type="button" value="03" class="code d min" />
        <input type="button" value="04" class="code s min" />
        <input type="button" value="05" class="code d min" />
        <input type="button" value="06" class="code s max" />
        <input type="button" value="07" class="code d max" />
        <input type="button" value="08" class="code s max" />
        <input type="button" value="09" class="code d max" />
        <input type="button" value="10" class="code s max" />
    </div>
    <div class="code-wrapper" style="margin-left: 160px;">
        <input type="button" value="11" class="code d max" />
    </div>
        &nbsp;&nbsp; 
        <div class="quick-select-wrapper" style="margin-top:-33px">
        <input type="button" value="清" class="action none" />
        <input type="button" value="双" action="uniqueSelect" class="action even" />
        <input type="button" value="单" action="uniqueSelect" class="action odd" />
        <input type="button" value="小" action="uniqueSelect" class="action small" />
        <input type="button" value="大" action="uniqueSelect" class="action large" />
        <input type="button" value="全" action="uniqueSelect" class="action all" />
        </div>
    </div>
    <div class="pp pp11">
        <div class="title">拖码</div>
        &nbsp;
        <div class="code-wrapper">
        <input type="button" value="01" class="code d min" />
        <input type="button" value="02" class="code s min" />
        <input type="button" value="03" class="code d min" />
        <input type="button" value="04" class="code s min" />
        <input type="button" value="05" class="code d min" />
        <input type="button" value="06" class="code s max" />
        <input type="button" value="07" class="code d max" />
        <input type="button" value="08" class="code s max" />
        <input type="button" value="09" class="code d max" />
        <input type="button" value="10" class="code s max" />
    </div>
    <div class="code-wrapper" style="margin-left:160px">
        <input type="button" value="11" class="code d max" />
    </div>
        &nbsp;&nbsp;
        <div class="quick-select-wrapper" style="margin-top: -33px;">
         <input type="button" value="清" class="action none" />
        <input type="button" value="双" action="uniqueSelect" class="action even" />
        <input type="button" value="单" action="uniqueSelect" class="action odd" />
        <input type="button" value="小" action="uniqueSelect" class="action small" />
        <input type="button" value="大" action="uniqueSelect" class="action large" />
        <input type="button" value="全" action="uniqueSelect" class="action all" />
        </div>
    </div>
</div>
<?php
	$maxPl=$this->getPl($this->type, $this->played);
?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($maxPl)?>);
})
</script>
