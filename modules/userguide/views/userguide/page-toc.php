<?php /*
	<?php if (is_array($array)) : ?>
<div id="kodoc-page-toc" class="open">
	<p class="kodoc-toc-header">Menu strony&nbsp;<span style="float:right">[<a href="#" id="kodoc-toc-toggle">ukryj</a>]</span></p>
	<div id="kodoc-page-toc-content">
		<?php foreach ($array as $item): ?>
		
			<?php for ($i = 1; $i < $item['level']; $i++) echo "&raquo;" ?>
		
			<?php echo HTML::anchor('#'.$item['id'],$item['name']); ?><br />
		
		<?php endforeach; ?>
	</div>
</div>

	<?php endif; ?>

*/ ?>
