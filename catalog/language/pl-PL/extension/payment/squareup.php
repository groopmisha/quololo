<?php
// Text
$_['text_new_card']                     = '+ Dodaj nową kartę';
$_['text_loading']                      = 'Ładowania... Czekaj...';
$_['text_card_details']                 = 'Dane karty';
$_['text_saved_card']                   = 'Użyj zapisanej karty:';
$_['text_card_ends_in']                 = 'Płać z istniejącymi %s Karta, która kończy się w xxxx xxxx xxxx %s';
$_['text_card_number']                  = 'Numer karty:';
$_['text_card_expiry']                  = 'Wygaśnięcie karty (mm/RR):';
$_['text_card_cvc']                     = 'Kod zabezpieczający karty (CVC):';
$_['text_card_zip']                     = 'Kod pocztowy karty:';
$_['text_card_save']                    = 'Zapisać kartę do wykorzystania w przyszłości?';
$_['text_trial']                        = '%s Każdy %s %s For %s płatności, a następnie ';
$_['text_recurring']                    = '%s Każdy %s %s';
$_['text_length']                       = ' For %s Płatności';
$_['text_cron_subject']                 = 'Square cron podsumowanie zadań';
$_['text_cron_message']                 = 'Oto lista wszystkich zadań crona wykonywanych przez Twój kwadrat rozszerzenie:';
$_['text_squareup_profile_suspended']   = ' Twoje płatności cykliczne zostały zawieszone. Skontaktuj się z nami, aby uzyskać więcej informacji.';
$_['text_squareup_trial_expired']       = ' Okres próbny wygasł.';
$_['text_squareup_recurring_expired']   = ' Twoje płatności cykliczne wygasły. To była Twoja ostatnia płatność.';
$_['text_cron_summary_token_heading']   = 'Odświeżanie tokenu dostępu:';
$_['text_cron_summary_token_updated']   = 'Token dostępu został zaktualizowany pomyślnie!';
$_['text_cron_summary_error_heading']   = 'Błędy transakcji:';
$_['text_cron_summary_fail_heading']    = 'Nieudane Transakcje (profile zawieszone):';
$_['text_cron_summary_success_heading'] = 'Udane transakcje:';
$_['text_cron_fail_charge']             = 'Profil <strong>#%s</strong> nie można uzyskać opłaty za <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Profil <strong>#%s</strong> został oskarżony o <strong>%s</strong>';
$_['text_card_placeholder']             = 'Xxxx xxxx xxxx xxxx';
$_['text_cvv']                          = 'Cvv';
$_['text_expiry']                       = 'MM/rr';
$_['text_default_squareup_name']        = 'Karta kredytowa/debetowa';
$_['text_token_issue_customer_error']   = 'Doświadczamy przerwy technicznej w naszym systemie płatności. Proszę spróbować ponownie później.';
$_['text_token_revoked_subject']        = 'Twój kwadratowy token dostępu został odwołany!';
$_['text_token_revoked_message']        = "Dostęp do kwadratowego rozszerzenia płatności na konto Square został odwołany za pośrednictwem kwadratowego pulpitu nawigacyjnego. Należy zweryfikować poświadczenia aplikacji w ustawieniach rozszerzenia i ponownie połączyć.";
$_['text_token_expired_subject']        = 'Twój kwadratowy token dostępu wygasł!';
$_['text_token_expired_message']        = "Token dostępu rozszerzenia placu płatności łączący go z kontem Square wygasł. Należy zweryfikować poświadczenia aplikacji i zadanie cron w ustawieniach rozszerzenia i połączyć się ponownie.";

// Error
$_['error_browser_not_supported']       = 'Błąd: system płatności nie obsługuje już przeglądarki sieci Web. Proszę zaktualizować lub użyć innego.';
$_['error_card_invalid']                = 'Błąd: karta jest nieprawidłowa!';
$_['error_squareup_cron_token']         = 'Błąd: token dostępu nie może zostać odświeżony. Prosimy o podłączenie Twojego kwadratowego przedłużenia płatności poprzez panel admina OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Ostrzeżenie: tryb piaskownicy jest włączony! Transakcje będą wydają się przechodzić, ale nie będą pobierane żadne opłaty.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Transakcja kartą została autoryzowana, ale nie została jeszcze przechwycona.';
$_['squareup_status_comment_captured']      = 'Transakcja kartą została autoryzowana, a następnie przejęta (tj. zakończona).';
$_['squareup_status_comment_voided']        = 'Transakcja karty została autoryzowana, a następnie unieważniona (tj. anulowana).   ';
$_['squareup_status_comment_failed']        = 'Transakcja karty nie powiodła się.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Kraj adresu płatności jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_shipping_address.country']      = 'Adres wysyłkowy kraju jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_email_address']                 = 'Adres e-mail klienta jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_phone_number']                  = 'Numer telefonu klienta jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_error_field']                                  = ' Pole: %s';