<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $l = substr(I18n::$lang, 0, 2) ?>" lang="<?php echo $l ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title><?php echo $title ?> | Filemon <?php echo __('User Guide'); ?></title>

<?php foreach ($styles as $style => $media) echo HTML::style($style, array('media' => $media), NULL, TRUE), "\n" ?>

<?php foreach ($scripts as $script) echo HTML::script($script, NULL, NULL, TRUE), "\n" ?>

<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
</head>
<body>

	<div id="kodoc-header">
		<div class="container clearfix">
			<div id="kodoc-logo">
				<img src="<?php echo Route::url('docs/media', array('file' => 'img/filemon.png')) ?>" />
			</div>
			<div id="kodoc-tabs">
						<a href="<?php echo Route::url('docs/guide') ?>"><?php echo __('User Guide') ?></a>
						<a href="<?php echo Route::url('docs/api') ?>"><?php echo __('API Browser') ?></a>
			</div>
		</div>
	</div>

		<div id="kodoc-nav">
		<div class="container clearfix">
			<ul>
				<?php foreach ($breadcrumb as $link => $title): ?>
					<?php echo is_int($link) ? '<li class="breadcrumb-last">'.$title.'</li>' : '<li>'.HTML::anchor($link, $title).'</li>' ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="container clearfix" id="kodoc-body">
		<div id="kodoc-main">
			<?php echo $content ?>
			
		</div>
		<div id="kodoc-menu">
			<?php echo $menu ?>
		</div>
	</div>
	<div id="kodoc-footer" style="overflow:hidden;">
		<p>
			<?php if (isset($copyright)) echo "<span style='float:left'>$copyright</span>"; ?>
			Stworzone dzięki <?php echo HTML::anchor('http://kohanaframework.org/', 'Kohana') ?> v<?php echo Kohana::VERSION ?>
		</p>
	</div>
	
</div>
</body>
</html>
