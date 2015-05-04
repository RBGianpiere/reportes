<!-- Normalizr -->
<link rel="stylesheet" href="<?=CSS;?>normalize.css" />

<!-- get Boostrap styles -->
<link rel="stylesheet" href="<?=CSS;?>bootstrap.css" />
<!-- <link rel="stylesheet" href="<?=CSS;?>bootstrap/bootstrap-theme.css" /> -->
<link rel="stylesheet" href="<?=CSS;?>style.css" />

<!--[if !IE]> -->
    <!-- <script src="<?=JS;?>jquery/jquery-2.1.0.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<![endif]-->

<!-- librerias css -->
<?php if(isset($data['csslib']) && !empty($data['csslib']) && is_array($data['csslib'])): ?>
	<?php foreach ($data['csslib'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= CSSLIB.$css ?>.css" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>

<!-- css externos -->
<?php if(isset($data['urlcss']) && !empty($data['urlcss']) && is_array($data['urlcss'])): ?>
	<?php foreach ($data['urlcss'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= $css ?>" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>

<!-- css local -->
<?php if(isset($data['css']) && !empty($data['css']) && is_array($data['css'])): ?>
	<?php foreach ($data['css'] as $key => $css): ?>
		<link rel="stylesheet" href="<?= CSS.$css ?>.css" type="text/css">
	<?php endforeach; ?>
<?php endif; ?>