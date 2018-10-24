# justNote
Użyteczny notatnik z możliwością synchronizacji danych.

Specyfikacja:
- dostęp do notatek off-line
- synchronizacja on-line
- dostęp na mobile i desktop
- typy notatek: text i to-do list
- dla notatki możliwość ustalenia: koloru, priorytetu, przypominajki
- możliwość przenoszenia notatatek do archiwum i kasowania

=====

Założenia:
- tworzenie notatki i to-do list (wydzielony oddzielny przycisk w prawym dolnym rogu ekranu)
- to-do list będzie posiadało checkbox do oznaczania wykonanych zadań; brak jakichkolwiek innych opcji
- edycja notatki/to-do (zarówno nagłówka i treści) będzie możliwa po otworzeniu notatki i wybrania właściwej opcji
- każda notatka będzie posiadała:
  - możliwość zmiany kolejności notatki 'drag and drop'
  - checkbox:
    - w przypadku zaznaczenia checkbox na notatce:
    - nagłówek notatki zostaje przekreślony
    - pojawia się menu z opcjami menu kompaktowego opisanego powyżej; wprowadzone zmiany będą dotyczyły wszystkich notatek z zaznaczonym checkboxem
  - własne kompaktowe menu z opcjami:
    - zmiana koloru,
    - przypomnienie,
    - usuń, 
    - ważność (gwiazdka), 
    - priorytet, 
    - kategoria, 
    - archiwum
- górny (główny) panel będzie zawierać:
  - panel z głównym menu lub możliwość włączenia głównego menu (hamburger -> mobile)
  - możliwość sortowania notatek
  - możliwość zmiany układu notatek
- główne menu będzie zawierać:
  - notatki - przejście do listy notatek, 
  - archiwum - przejście do listy zarchiwizowanych wiadomości,
  - kategorie - wybranie kategorii wyświetla notatki z danej kategorii
  - ważne - wyświetla notatki określone jako ważne
  - ustawienia - możliwość ustawienia: wielkości czcionki, automatycznej synchronizacji, dźwięk przypomnienia, domyślny kolor notatki, kolor motywu (theme)
  - synchronizacja - upload notatek na GoogleDysk/GoogleDocs
  - wyjście - wylogowanie z panelu notatek
  
  #### dodatkowo
  - możliwość utworzenia notatki bez logowania - sama treść, bez nagłówka, indywidualny link; max czas trwania 14 dni, możliwość ustawienia czasu trwania i automatycznego kasowania po odczytaniu
  
### ver 0.1
- powstanie apki
- okno logowania i rejestracji
- brak możliwości zarządzania notatkami :(
