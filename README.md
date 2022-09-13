# KonferencjaNaukowa
Portal służący do obsługi konferencji naukowej, przygotowany w technologiach PHP, HTML, CSS, bootstrap5.

## Autor
Autorem portalu jest Jakub Klonowski (jakubpklonowski@gmail.com).

## Wymagania
- MariaDB
- PHP 8.1
- bootstrap5

## Opis
Portal służy do obsługi konferencji naukowej. Obsługuje 3 typy użytkowników: gości, uczestników i administratorów. Każda grupa użytkowników otrzymuje informacje od organizatora innym kanałem. Aby korzystać z uprawnień uczestnika i administratora należy być zalogowanym na aktywne konto.

## Uruchomienie projektu
Pobierz repozytorium do lokalnego katalogu (odradzam pulpit). Następnie uruchom konsolę cmd i przejdź do lokalizacji w której znajdują się pliki PHP. Użyj polecenia:
    php -S 127.0.0.1:8000
Przejdź w przeglądarce pod adres [127.0.0.1:8000/instalator.php](127.0.0.1:8000/instalator.php) i postępuj zgodnie z instrukcjami.

### Instalator
Przejdź przez wszystkie kroki instalatora - przeprowadzi on proces stworzenia pliku konfiguracyjnego do istniejącej bazy danych. O tym jak skonfigurować bazę przeczytasz w kolejnym podrozdziale.

### Baza danych
Aby wykorzystać pełnię funkcjonalności aplikacji należy, poprzez instalator, skonfigurować plik config.php. Aplikacja korzysta z bazy danych MariaDB. We wskazanej bazie nie może istnieć tebela o nazwie podanej w instalatorze - instalator stworzy tabelę o strukturze opisanej w pliku *schema.php*.

## Perspektywy rozwoju
W przyszłości prace nad aplikacją powinny skupić się na trzech płaszczyznach:
- przebudowa struktury bazy danych;
- dodanie nowych funkcjonalności;
- facelift.
