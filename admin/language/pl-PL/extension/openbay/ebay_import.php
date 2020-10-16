<?php
// Heading
$_['heading_title']              = 'Import towaru';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'Ebay';

// Text
$_['text_sync_import_line1']     = '<strong>Ostrożność!</strong> Spowoduje to zaimportowanie wszystkich produktów z serwisu eBay i zbudowanie struktury kategorii w sklepie. Przed uruchomieniem tej opcji zaleca się usunięcie wszystkich kategorii i produktów. <br />Struktura kategorii jest od zwykłych kategorii eBay, a nie kategorii sklepów (Jeśli masz Sklep eBay). Można zmieniać nazwy, usuwać i edytować zaimportowane kategorie bez wpływu na produkty eBay.';
$_['text_sync_import_line3']     = 'Należy upewnić się, że serwer może akceptować i przetwarzać duże rozmiary danych post. 1000 przedmiotów eBay jest o 40Mb w rozmiarze, trzeba będzie obliczyć, co jest potrzebne. Jeśli połączenie nie powiedzie się, prawdopodobnie ustawienie jest zbyt małe. Twój limit pamięci php musi być około 128mb.';
$_['text_sync_server_size']      = 'Obecnie serwer może zaakceptować: ';
$_['text_sync_memory_size']      = 'Limit pamięci php: ';
$_['text_import_confirm']		 = 'Spowoduje to zaimportowanie wszystkich Twoich przedmiotów w serwisie eBay jako nowych produktów, czy na pewno? To nie może być cofnięte! Upewnij się, że masz kopię zapasową pierwszy!';
$_['text_import_notify']		 = 'Żądanie importu zostało wysłane do przetwarzania. Import trwa około 1 godziny na 1000 pozycji.';
$_['text_import_images_msg1']    = 'obrazy są oczekujące na import/kopię z serwisu eBay. Odśwież Tę stronę, jeśli liczba nie zmniejsza się, a następnie';
$_['text_import_images_msg2']    = 'Kliknij tutaj';
$_['text_import_images_msg3']    = 'i czekać. Więcej informacji na temat Dlaczego tak się stało można znaleźć <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">Tutaj</a>';

// Entry
$_['entry_import_item_advanced'] = 'Pobierz zaawansowane dane';
$_['entry_import_categories']    = 'Importuj kategorie';
$_['entry_import_description']	 = 'Importuj opisy elementów';
$_['entry_import']				 = 'Importuj przedmioty z serwisu eBay';

// Buttons
$_['button_import']				 = 'Importu';
$_['button_complete']			 = 'Kompletny';

// Help
$_['help_import_item_advanced']  = 'Będzie trwać do 10 razy dłużej, aby zaimportować elementy. Import wag, rozmiarów, ISBN i więcej, jeśli są dostępne';
$_['help_import_categories']     = 'Buduje strukturę kategorii w sklepie z kategorii eBay';
$_['help_import_description']    = 'Ten wola importować wszystko wliczając w to HTML, wizyta liczniki etc';

// Error
$_['error_import']               = 'Nie można załadować';
$_['error_maintenance']			 = 'Twój sklep jest w trybie konserwacji. Importowanie nie powiedzie się!';
$_['error_ajax_load']			 = 'Nie można połączyć się z serwerem';
$_['error_validation']			 = 'Musisz zarejestrować się do tokenu API i włączyć moduł.';