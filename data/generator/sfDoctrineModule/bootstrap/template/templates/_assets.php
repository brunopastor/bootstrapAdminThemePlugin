<?php if (isset($this->params['css']) && ($this->params['css'] !== false)): ?> 
	[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?] 
<?php elseif(!isset($this->params['css'])): ?>
	[?php use_javascript('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', 'first') ?]
	[?php use_javascript('<?php echo sfConfig::get('app_config_bootstrap_admin_web_dir').'/js/bootstrap.min.js' ?>', 'first') ?]
	[?php use_stylesheet('<?php echo sfConfig::get('app_config_bootstrap_admin_web_dir').'/css/bootstrap.css' ?>', 'first') ?]
	[?php use_stylesheet('<?php echo sfConfig::get('app_config_bootstrap_admin_web_dir').'/css/styles.css' ?>', 'first') ?]
	
	<?php if (sfConfig::get('sf_bootstrap_admin_module_responsive', false)): ?>
		[?php use_stylesheet('<?php echo sfConfig::get('app_config_bootstrap_admin_web_dir').'/css/bootstrap-responsive.min.css' ?>', 'first') ?] 
	<?php endif; ?>
<?php endif; ?>

<style type="text/css">
.control-type-date select {width:auto;}
</style>