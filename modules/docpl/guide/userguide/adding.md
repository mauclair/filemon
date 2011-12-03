# Dodawanie modułu do podręcznika

Tworzenie dokumentacji do podręcznika dla własnego modułu jest bardzo proste.

Na początek skopiuj poniższy kod do pliku `<module>/config/userguide.php`, zamieniając wszystko w nawiasach `<>` na właściwy tekst:

	return array
	(
		// Pozostaw bez edycji
		'modules' => array(
	
			// To powinna być ścieżka/nazwa modułu np. 'database'
			'<modulename>' => array(
	
				// Jeśli TRUE moduł będzie widoczny w podręczniku
				'enabled' => TRUE,
				
				// Nazwa widoczna przy listowaniu modułów w podręczniku
				'name' => '<Nazwa modułu>',
	
				// Krótki opis widoczny przy listowaniu modułów w podręczniku
				'description' => '<Krótki opis>',
				
				// Informacja w stopce, informacja o autorze
				'copyright' => '&copy; 2010–2011 <Autor>',
			)	
		)
	);

Następnie, w folderze modułu utwórz folder `guide/<modulename>` oraz pliki `index.md` i `menu.md`.  Wszystkie strony korzystają z [Markdown](markdown).  Menu dokeumtnacji dla Twojego modułu powinno wyglądać np. tak:

	## [Module Name]()
	 - [Page name](page-path)
	 - [This is a Category](category)
		 - [Sub Page](category/sub-page)
		 - [Another](category/another)
			 - [Sub sub page](category/another/sub-page)
	 - Categories do not have to be a link to a page
		 - [Etcetera](etc)

Page paths are relative to `guide/<modulename>`.  So `[Page name](path-path)` would look for `guide/<modulename>/page-name.md` and `[Another](category/another)` would look for `guide/<modulename>/page-name.md`.   The guide pages can be named or arranged any way you want within that folder (with the exception of `menu.md` and `index.md`). The breadcrumbs and page titles are pulled from the `menu.md file`, not the file names or paths.  You can have items that are not pages (a category that doesn't have a corresponding page).  To link to the `index.md` page, you should have an empty link, e.g. `[Module Name]()`.  Do not include `.md` in your links.  
