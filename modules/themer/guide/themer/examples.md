# Przykłady

System obsługi widoków (frameworka Kohana).

- położenie folderu 'themes' w folderze media określonym przez MEDIAPATH
- wyświetlanie widoków o braku pliku lub braku skórki(themes/emptytheme.php, themes/emptyview.php) 
- pobieranie plików innych niż aktualny theme - określanie "na sztywno" np.: Theme::factory('jakistheme.plik/widoku') pobierze 'themes/jakistheme/plik/widoku.php'
- w przypadku braku sesji pobieranie widoków domyślnej skórki (z pliku konfiguracyjnego kirocms.php)
