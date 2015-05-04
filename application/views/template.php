<!DOCTYPE html>
<html lang="es" id="CA">
<head>
	<title><?= isset($this->title) && !empty($this->title) ? $this->title : '';?><?= lang('append.title'); ?></title>
	<?php $this->load->view($header,$data); ?>
</head>
<body>
	<!-- menu -->
	<?php $this->load->view($menu); ?>
	<!-- menu -->
	<div id="internal_body" class="container">
		<?php $this->load->view($view); ?>
	</div>
			
	<!-- footer -->
	<div id="footer">
		<footer role="contentinfo" class="clear">
			<?php $this->load->view($footer); ?>
		</footer>
	</div>

	<!-- footer -->

</body>
<?php $this->load->view($plugins);?>
</html>