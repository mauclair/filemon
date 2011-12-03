# Konfiguracja

Podręcznik dla moduł konfigurujemy w `config/userguide.php`.

	return array
	(
		// Enable the API browser.  TRUE or FALSE
		'api_browser'  => TRUE,
		
		// Enable these packages in the API browser.  
		// TRUE for all packages, or a string of comma seperated packages, 
		// using 'None' for a class with no @package
		// Example: 'api_packages' => 'Kohana,Kohana/Database,Kohana/ORM,None',
		'api_packages' => TRUE,
		
	);

Możesz włączyć lub wyłączyć całkowicie przeglądanie api, lub ograniczyć przeglądanie do wybranych modułow.  Aby wyłączyś moduł można wykonać to następująco:

	`application/config/userguide.php`
	
	return array
	(
		'modules' => array
		(
			'kohana' => array
			(
				'enabled' => FALSE,
			),
			'database' => array
			(
				'enabled' => FALSE,
			)
		)
	)
	
