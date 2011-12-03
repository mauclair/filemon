# Themer

Moduł `themer` służący do obsługi widoków z różnych lokalizacji jest domyślnie włączaony. W razie problemów sprawdź w `application/bootstrap.php` i zmodyfikuj tablicę włączonych modułów:

    Kohana::modules(array(
        ...
        'themer' => MODPATH.'themer',
        ...
    ));

Następnie [skonfiguruj](config) jeśli nie chcesz domyślnego katalogu dla widoków.
