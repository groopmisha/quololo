<?php
// Heading
$_['heading_title']             = 'Prośba o opinie';

// Button
$_['button_send']               = 'Wysyłanie wiadomości e-mail';
$_['button_delete_from_list']   = 'Usuń z listy';
$_['button_settings']           = 'Ustawienia';
$_['button_save_settings']      = 'Zapisywanie ustawień ogólnych';
$_['button_save_email_text']    = 'Zapisz tekst wiadomości E-mail';
$_['button_send_test_emails']   = 'Wyślij testowe wiadomości e-mail';

// Column
$_['column_name']               = 'Nazwa klienta';
$_['column_email']              = 'E-mail';
$_['column_order_id']           = 'Identyfikator zamówienia';
$_['column_order_total']        = 'Suma zamówienia'; // Added v1.1
$_['column_order_status_date']  = 'Zaktualizowany stan zamówienia';
$_['column_language']           = 'Język';
$_['column_store_name']         = 'Nazwa sklepu';

// Tab
$_['tab_general']               = 'Ogólne';
$_['tab_email_text']            = 'Tekst wiadomości E-mail';
$_['tab_test_center']           = 'Centrum testowe';
$_['tab_log']					= 'Dziennika';

// Text
$_['text_success_mail']         = 'Sukces: %s wysłane maile, zawierające %s łącza produktów.';
$_['text_success_remove']       = 'Sukces: %s klient (ci) usunięte z listy.';
$_['text_success_settings']     = 'Sukces: ustawienia <b>Zamów recenzję</b> Aktualizacja.';
$_['text_success_email_text']   = 'Sukces: tekst wiadomości E-mail został zaktualizowany.';
$_['text_success_mail_test']    = 'Sukces: %s Test wysłanych wiadomości e-mail (%s języków). %s';
$_['text_failed_validation']    = '%s z dostarczonych wiadomości e-mail nie sprawdzania poprawności!';

$_['text_success_clear_log']  	= 'Sukces: pomyślnie wyczyszczone dziennika!';

$_['text_install']              = 'Musisz wprowadzić preferowane ustawienia i kliknąć Zapisz. Ten komunikat pokaże się tylko raz. Następnie można przełączyć ustawienia, klikając przycisk w prawym górnym rogu.';

$_['text_order_status']         = 'Wymagany status zamówienia:<br /><span class="help">Pokazuje tylko zamówienia o tym statusie</span>'; 
$_['text_display']              = 'Dni przed zażądaniem przeglądu:<br /><span class="help">Liczba dni przed zamówieniami oznaczonymi powyższym statusem zamówienia.</span>';
$_['text_display_before_review']              = 'Dni przed zezwoleniem na przegląd:<br /><span class="help">Liczba dni przed pojawieniem się produktów w profilu klienta do recenzji.</span>';
$_['text_orders_per_page']      = 'Zamówienia na stronę:<br /><span class="help">Liczba zamówień na stronę. Określa również, ile wiadomości będzie wysyłane jednocześnie.</span>';
$_['text_fallback_language']    = 'Język rezerwowy:<br /><span class="help">Używa tego języka jako powrotu, aby zapobiec wysyłaniu pustych wiadomości.</span>';
$_['text_append_language_code'] = 'Dołączanie kodu języka do adresów URL:<br /><span class="help">Spowoduje dołączenie kodu języka do adresów URL produktów w wiadomości. Spowoduje to automatyczne wybranie odpowiedniego języka dla klienta po kliknięciu łącza.';
$_['text_min_amount']           = 'Zamów minimalną kwotę<br /><span class="help">Wyświetla tylko zamówienia o łącznej wartości większej niż wprowadzona wartość.<br />Przykład: 50 będzie pokazywał tylko zamówienia o łącznej wartości zamówienia $50, £50, €50 lub większej</span>'; // Added v1.1 

$_['text_subject']              = 'Temat:';
$_['text_message']              = 'Komunikat:';
$_['text_footer']               = 'Stopki:';
$_['text_plural_placeholders']  = 'Symbole zastępcze liczby mnogiej:<span class="help">Sformułowania używane do korespondencji z więcej niż 1 produktem.</span>';
$_['text_singular_placeholders']= 'Pojedyncze symbole zastępcze:<span class="help">Sformułowania używane do korespondencji z jednym produktem.</span>';
$_['text_available_placeholders'] = 'Inne dostępne symbole zastępcze';

$_['text_test_emails']          = 'Testowe wiadomości e-mail:<br /><span class="help">Wprowadź adres e-mail, na który chcesz otrzymywać pocztę testową (oddzielone przecinkami)</span>';
$_['text_test_languages']       = 'Języki:<br /><span class="help">Wybierz Języki, w których chcesz otrzymać testową wiadomość e-mail.</span>';
$_['text_number_of_products']   = 'Ilość produktów:<br /><span class="help">Wprowadź liczbę produktów, które mają być wyświetlane w testowej wiadomości e-mail. Jeśli pozostało puste, zostaną uwzględnione 4 produkty.</span>';
$_['text_test_store']           = 'Sklepie:';

$_['text_legend'] = '<span class="help">{order_id} = ID zamówienia<br/>{firstname} {lastname} = Imię nazwisko<br />{store_name} = Nazwa sklepu<br />{store_url} = Adres URL sklepu<br />{each} {product} {link}</span>';

$_['text_test_warning'] = '<br/>Ostrzeżenie: odsyłacze do recenzji w testowej wiadomości e-mail nie będą działać poprawnie, ponieważ klienci muszą zakupić produkt, aby pokazać go na swoich kontach.<br/>';

$_['text_cron_enable']        = 'Wyślij e-mail automatycznie codziennie?';
$_['text_cron_key'] = 'CronJob klucz tajny';
$_['text_cron_weekly'] = 'Tygodniowy';
$_['text_cron_daily'] = 'Codziennie';
$_['text_cron_monthly'] = 'Miesięczne';
$_['entry_cron_update'] = 'Czas aktualizacji';

// Error
$_['error_no_selected']         = 'Prośba o opinie: nie wybrano klienta (ów).';
$_['error_no_test_mails']       = 'Centrum testowe: nie dostarczono e-maili. Wprowadź co najmniej jeden.';
$_['error_no_language_selected']= 'Centrum testowe: nie wybrano języka (ów).';
$_['error_permission']          = 'Ostrzeżenie: nie masz uprawnień do modyfikowania lub używania <b>Prośba o opinie</b>!';
?>