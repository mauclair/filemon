# Jak działa podręcznik

Podręcznik używa składni [Markdown](markdown) do tworzenia dokumentacji.  Strony podręcznika, jak i przeglądarka API są napisane w wykorzystaniem tej składni.

## Strony podręcznika

Strony podręcznika są umieszczane w module w folderze `guide/<module>`. Dla przykładu, dokumentacja dla Kohany jest w `system/guide/kohana`, a dokumentacja dla database jest w `modules/database/guide/database`, image jest w `modules/image/guide/image`, etc.

Każdy moduł powinien mieć stronę index `guide/<module>/index.md`.

Każdy moduł powinien mieć stronę menu `guide/<module>/menu.md`.

Reszta stron w folderze `guide/<module>` może być zorganizowana w subfolderach i przy zastosowaniu dowolnych nazw.

Jeśli chcesz przeczytać więcej na ten temat zobacz [Dodawanie modułu](adding).

### Obrazy

Jakiekolwiek obrazy wykorzystywane w dokumentacji powinny zostać umieszczone w folderze `media/guide/<module>/`.  Przykład `![Image Title](hello-world.jpg)` obraz powinien mieć ścieżkę `media/guide/<module>/hello-world.jpg`.  Obrazy dla modułu Database powinny być w `modules/database/media/guide/database`, a obrazy dla dokumentacji Kohana w `system/media/guide/kohana`.

### Przeglądarka API

Przeglądarka API jest generowana na podstawie aktualnego źródła.  Opis klas, stałych, wyjątków, metod jest generowany z komentarzy kodu źródłowego i parsowany za pomocą Markdown. 
