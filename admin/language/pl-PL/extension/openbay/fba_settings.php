<?php
// Headings
$_['heading_title']        	   = 'Ustawienia';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Spełnienie przez Amazon';

// Text
$_['text_success']     		   = 'Ustawienia zostały zapisane';
$_['text_status']         	   = 'Stan';
$_['text_account_ok']  		   = 'Połączenie do spełnienia przez Amazon OK';
$_['text_api_ok']       	   = 'Połączenie API OK';
$_['text_api_status']          = 'Połączenie interfejsu API';
$_['text_edit']           	   = 'Edytuj spełnienie przez Amazon Settings';
$_['text_standard']            = 'Standardowych';
$_['text_expedited']           = 'Przyspieszone';
$_['text_priority']            = 'Priorytet';
$_['text_fillorkill']          = 'Wypełnij lub zabicia';
$_['text_fillall']             = 'Wypełnij wszystkie';
$_['text_fillallavailable']    = 'Wypełnij wszystkie dostępne';
$_['text_prefix_warning']      = 'Nie zmieniaj tego ustawienia po wysłaniu zamówień do Amazon, należy ustawić to podczas pierwszej instalacji.';
$_['text_disabled_cancel']     = 'Disabled-nie automatycznie anuluje realizacje';
$_['text_validate_success']    = 'Twoje dane API działają poprawnie! Aby upewnić się, że ustawienia są zapisane, należy nacisnąć przycisk Zapisz.';
$_['text_register_banner']     = 'Kliknij tutaj, jeśli musisz zarejestrować się na konto';

// Entry
$_['entry_api_key']            = 'Tokenu interfejsu API';
$_['entry_encryption_key']     = 'Klucz szyfrowania 1';
$_['entry_encryption_iv']      = 'Klucz szyfrowania 2';
$_['entry_account_id']         = 'Identyfikator konta';
$_['entry_send_orders']        = 'Automatyczne wysyłanie zamówień';
$_['entry_fulfill_policy']     = 'Polityka realizacji';
$_['entry_shipping_speed']     = 'Domyślna szybkość wysyłki';
$_['entry_debug_log']          = 'Włącz rejestrowanie debugowania';
$_['entry_new_order_status']   = 'Nowy wyzwalacz realizacji';
$_['entry_order_id_prefix']    = 'Prefiks identyfikatora zamówienia';
$_['entry_only_fill_complete'] = 'Wszystkie elementy muszą być FBA';

// Help
$_['help_api_key']             = 'To jest Twój token API, uzyskać to z obszaru konta OpenBay Pro';
$_['help_encryption_key']      = 'To jest Twój klucz szyfrowania #1, uzyskać to z obszaru konta OpenBay Pro';
$_['help_encryption_iv']       = 'To jest Twój klucz szyfrowania #2, uzyskać to z obszaru konta OpenBay Pro';
$_['help_account_id']          = 'To jest identyfikator konta, który pasuje do zarejestrowanego konta Amazon dla OpenBay Pro, uzyskać to z OpenBay Pro obszarze konta';
$_['help_send_orders']  	   = 'Zamówienia zawierające pasujące wypełnienie przez produkty firmy Amazon zostaną automatycznie wysłane do Amazon';
$_['help_fulfill_policy']  	   = 'Domyślna zasada realizacji (FillAll-wszystkie elementy spełniające wymagania w zleceniu realizacji są wysyłane. Zlecenie realizacji pozostaje w stanie przetwarzania, dopóki wszystkie towary nie zostaną wysłane przez Amazon lub anulowane przez sprzedającego. FillAllAvailable-wszystkie zrealizowane przedmioty w zleceniu realizacji są wysyłane. Wszystkie niespełnione przedmioty w zamówieniu są anulowane przez Amazon. FillOrKill-Jeśli pozycja w zleceniu realizacji zostanie ustalona jako niespełniająca, zanim jakakolwiek przesyłka w zleceniu przejdzie do stanu oczekującego (proces pobierania jednostek z magazynu rozpoczął się), wówczas całe zamówienie jest uważane za niespełniające. Jeśli jednak towar w zleceniu realizacji zostanie określony jako niemożliwy do spełnienia po przeniesieniu przesyłki w kolejności do stanu oczekującego, Amazon anuluje jak największą część zamówienia realizacji.';
$_['help_shipping_speed']  	   = 'Jest to domyślna kategoria szybkości wysyłki do zastosowania do nowych zamówień, różne poziomy usług mogą ponosić różne koszty';
$_['help_debug_log']  		   = 'Dzienniki debugowania będą rejestrować informacje w pliku dziennika o działaniach wykonywanych przez moduł. Ten powinien być zostawiać umożliwiał wobec współpracownik znaleźć ten przyczynowy od wszelki problemy.';
$_['help_new_order_status']    = 'Jest to stan zamówienia, który spowoduje, że zamówienie zostanie utworzone dla spełnienia. Upewnij się, że jest używany stan tylko po otrzymaniu płatności.';
$_['help_order_id_prefix']     = 'Posiadanie prefiksu zamówienia pomoże zidentyfikować zamówienia, które pochodzą z magazynu nie z innych integracji. Jest to bardzo pomocne, gdy kupcy sprzedają na wielu rynkach i wykorzystanie FBA';
$_['help_only_fill_complete']  = 'Pozwala to tylko na zamówienia, które mają być wysłane do realizacji, jeśli wszystkie elementy w zamówieniu są dopasowane do spełnienia przez Amazon pozycji. Jeśli dowolny element nie jest to całe zamówienie pozostanie niewypełnione.';

// Error
$_['error_api_connect']        = 'Nie można połączyć się z interfejsem API';
$_['error_account_info']       = 'Nie można zweryfikować połączenia API do spełnienia przez Amazon ';
$_['error_api_key']    		   = 'Token API jest nieprawidłowy';
$_['error_api_account_id']     = 'Identyfikator konta jest nieprawidłowy';
$_['error_encryption_key']     = '#1 klucza szyfrowania jest nieprawidłowy';
$_['error_encryption_iv']      = '#2 klucza szyfrowania jest nieprawidłowy';
$_['error_validation']    	   = 'Wystąpił błąd podczas sprawdzania Twoich danych';

// Tabs
$_['tab_api_info']             = 'Szczegóły interfejsu API';

// Buttons
$_['button_verify']            = 'Sprawdź szczegóły';
