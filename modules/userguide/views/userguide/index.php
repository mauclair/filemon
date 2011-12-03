<h1>Podręcznik użytkownika</h1>

<p>Witaj w podręczniku użytkownika! Poniżej znajduje się lista wszystkich modułów Filemona, opisanych w podręczniku:</p>

<?php if( ! empty($modules)): ?>

	<?php foreach($modules as $url => $options): ?>
	
		<p>
			<strong><?php echo html::anchor(Route::get('docs/guide')->uri(array('module' => $url)), $options['name']) ?></strong> - 
			<?php echo $options['description'] ?>
		</p>
	
	<?php endforeach; ?>
	
<?php else: ?>

	<p class="error">Niestety nie ma żadnych opisanych modułów.</p>

<?php endif; ?>
