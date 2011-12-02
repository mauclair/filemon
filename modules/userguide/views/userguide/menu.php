<h2>Moduły</h2>

<?php if( ! empty($modules)): ?>

	<ul>
	<?php foreach($modules as $url => $options): ?>
	
		<li><?php echo html::anchor(Route::get('docs/guide')->uri(array('module' => $url)), $options['name']) ?></li>
	
	<?php endforeach; ?>
	</ul>

<?php else: ?>

	<p class="error">Brak modułów.</p>

<?php endif; ?>
