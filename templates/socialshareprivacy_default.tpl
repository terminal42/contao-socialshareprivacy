<?php
if (!$this->nojquery)
{
	$GLOBALS['TL_JAVASCRIPT']['jquery'] = 'system/modules/socialshareprivacy/html/jquery.noconflict.min.js';
}
$GLOBALS['TL_JAVASCRIPT']['socialshareprivacy'] = 'system/modules/socialshareprivacy/html/jquery.socialshareprivacy.min.js';
?>
<div id="socialshareprivacy<?php echo $this->id; ?>"></div>
<script type="text/javascript">
	jQuery(function($){
		if($('#socialshareprivacy<?php echo $this->id; ?>').length > 0){
			$('#socialshareprivacy<?php echo $this->id; ?>').socialSharePrivacy(<?php echo ModuleSocialSharePrivacy::encodeSettings($this->settings); ?>);
		}
	});
</script>
