<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "german",
        "total_zip_files" => "Gesamte Zip-Dateien",      
        "total_active_zip_files" => "Gesamtzahl aktiver Zip-Dateien" ,       
        "total_pending_zip_files" => "Gesamtzahl ausstehender Zip-Dateien",  
        "total_category" => "Gesamtkategorie",      
        "total_active_category" => "Gesamte aktive Kategorie" ,       
        "total_active_blog" => "Gesamtzahl aktiver Blogs" ,       
        "total_active_page" => "Gesamtzahl aktiver Seiten" ,       
        "total_disable_category" => "Kategorie insgesamt deaktiviert",
        "total_disable_blog" => "Deaktive Blogs insgesamt",
        "total_disable_page" => "Gesamtzahl der inaktiven Seiten",
        "sitemap" => "Seitenverzeichnis",
        "quick_link" => "Schnelle Links",
        "save" => "Speichern",
        "latest_blog" => "Neueste Blogs",
        "blogs" => "Blogs",
        "about_us" => "Über uns",
        "setting_saved" => "Die Einstellung wurde erfolgreich geändert.",
        "ad_setting" => "Anzeigeneinstellungen",
        "ad_javascript" => "Google Javascript Ad Code einfügen - 300 x 250 Pixel",
        "analytic_javascript" => "Fügen Sie den Google Javascript-Analysecode ein",
        "ad_javascript_on" => "Werbung einschalten",
        "analytic_javascript_on" => "Schalten Sie Google Analytics ein",
        "analytic_setting" => "Analytische Einstellung",
        "max_char" => "Maximal 200 Zeichen",
        "autoapprove_on" => "ZIP-Datei automatisch genehmigen",
        "main_setting" => "Haupteinstellung",
        "show_default_limit" => "Standardlimit",
        "show_loadmore_limit" => "Laden Sie mehr Limit",
        "upload_zip" => "ZIP hochladen",
        "unlock_zip" => "Reißverschluss entsperren",
        "make" => "Machen",
        "featured" => "Hervorgehoben",
        "featured_zip" => "Zip ist jetzt vorgestellt, aber unbeliebt.",
        "unfeatured" => "Nicht gekennzeichnet",
        "unfeatured_zip" => "Zip ist jetzt nicht gekennzeichnet.",
        "popular" => "Beliebt",
        "popular_zip" => "Zip ist beliebt, aber jetzt nicht gekennzeichnet.",
        "unpopular_zip" => "Zip ist jetzt unbeliebt.",
        "unpopular" => "Unpopulär",
        "zip_deleted" => "Zip wurde erfolgreich gelöscht.",
        "delete_zip" => "ZIP löschen",
        "delete_zip_with_ip" => "Löschen Sie die Zip & Block-Benutzer-IP",
        "zip_deleted_with_ip" => "Zip ist gelöscht und der Benutzer ist jetzt gesperrt.",
        "view_all" => "Alle ansehen",
        "sponsored" => "Gesponsert",
        "zip_files" => "Zip-Dateien",
        "upload_zip_file" => "Laden Sie eine anonyme Zip-Datei hoch",
        "zip_title" => "Zip-Titel",
        "edit" => "Bearbeiten",
        "delete" => "Löschen",
        "category" => "Kategorie",
        "category_create" => "Kategorie erstellen",
        "duplicate_category_name" => "Der Kategoriename muss eindeutig sein. Versuchen Sie es nochmal.",
        "category_add" => "Kategorie hinzufügen",
        "category_edit" => "Kategorie bearbeiten",
        "category_deactivated" => "Kategorie & Alle Zip-Dateien dieser Kategorie wurden deaktiviert.",
        "category_activated" => "Kategorie & Alle Zip-Dateien gehören zu dieser Kategorie wurde aktiviert.",
        "category_zip_deleted" => "Kategorie & Alle Zip-Dateien dieser Kategorie wurden gelöscht.",
        "category_id" => "Kategorie ID",
        "name" => "Name",
        "activate" => "aktivieren Sie",
        "deactivate" => "Deaktivieren",
        "approve" => "Genehmigen",
        "approve_zip" => "Die Zip-Datei wurde genehmigt und ist live.",
        "zip" => "Zip-Datei",
        "zip_title_unique" => "Zip-Titel muss eindeutig sein",
        "zipdescription" => "Beschreibung (optional )",
        "spam_msg" => "Spammer sind nicht erlaubt.",
        "zip_title_error" => "Zip-Titel muss eindeutig sein. Versuchen Sie es erneut mit einem anderen Namen.",
        "category_error" => "Kategorie darf nicht leer sein. Versuchen Sie es nochmal.",
        "zip_review" => "ZIP-Datei wurde erfolgreich hochgeladen und befindet sich in der ausstehenden Überprüfung.",
        "download" => "Download",
        "description" => "Zip-Beschreibung",
        "share_fb" => "Auf Facebook teilen",
        "share_tw" => "Auf Twitter teilen",
        "share_ld" => "Auf Linkedin teilen",
        "share_wp" => "Auf WhatsApp teilen",
        "choose_category" => "Kategorie wählen",
        "max_limit" => "Höchstgrenze – ".ZIP_LIMIT." KB",
        "blog_max_limit" => "Höchstgrenze – ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 Pixel",
        "zip_limit" => "Die hochgeladene ZIP-Datei ist größer als ".ZIP_LIMIT." KB. Versuchen Sie es nochmal.",
        "img_limit" => "Die hochgeladene Bilddatei ist größer als ".BLOG_IMAGE_LIMIT." KB. Versuchen Sie es nochmal.",
        "img_dimension" => "Die hochgeladene Bilddatei sollte genau 1600 x 800 Pixel groß sein. Versuchen Sie es nochmal.",
        "should_be_zip" => "Die hochgeladene Datei ist keine ZIP-Datei. Bitte laden Sie die ZIP-Datei hoch und versuchen Sie es erneut.",
        "should_be_image" => "Die hochgeladene Datei ist kein Bild. Bitte laden Sie ein PNG-, JPG- oder JPEG-Bild hoch und versuchen Sie es erneut.",
        "load_more" => "Mehr laden",
        "search" => "Anonyme ZIP-Dateien durchsuchen...",
        "no_search_found" => "Wir haben nichts mit Ihrem Suchbegriff gefunden. Versuchen Sie es mit anderen Schlüsselwörtern.",
        "blog_image" => "Blog-Bild",
        "pages" => "Seiten",
        "singlepage" => "Buchseite",
        "blog" => "Blogs",
        "singleblog" => "Bloggen",
        "create_page" => "Seite erstellen",
        "edit_page" => "Seite bearbeiten",
        "active_page" => "Aktive Seiten",
        "page_id" => "Seiten-ID",
        "deactive_page" => "Deactive Pages",
        "page_activated" => "Die Seite wurde erfolgreich aktiviert und ist jetzt live.",
        "page_deactivated" => "Die Seite wurde erfolgreich deaktiviert und jetzt ausgeblendet.",
        "page_deleted" => "Seite wurde erfolgreich gelöscht.",
        "create_blog" => "Blog erstellen",
        "edit_blog" => "Blog bearbeiten",
        "click_old_image" => "Klicken Sie auf das Bild, um es zu vergrößern",
        "active_blog" => "Aktive Blogs",
        "deactive_blog" => "Deaktive Blogs",
        "blog_id" => "Blog-ID",
        "blog_name" => "Blog Titel",
        "blog_activated" => "Der Blog wurde erfolgreich aktiviert und ist jetzt live.",
        "blog_deactivated" => "Blog wurde erfolgreich deaktiviert und jetzt ausgeblendet.",
        "blog_deleted" => "Blog wurde erfolgreich gelöscht.",
        "blog_name_unique" => "(Blog-Titel muss eindeutig sein und darf maximal 100 Zeichen lang sein)",
        "blog_description" => "Blog-Beschreibung",
        "blog_short_description" => "Blog-Kurzbeschreibung (max. 200 Zeichen – fördert SEO)",
        "page_name" => "Seitenname",
        "page_description" => "Seitenbeschreibung",
        "page_name_unique" => "(Seitenname muss eindeutig sein und darf maximal 25 Zeichen lang sein)",
        "duplicate_page_name" => "Der Seitenname muss eindeutig sein. Versuchen Sie es nochmal.",
        "duplicate_blog_name" => "Der Blog-Titel muss eindeutig sein. Versuchen Sie es nochmal.",
        "page_published" => "Seite wird erstellt und veröffentlicht. Sie finden sie unter Aktive Seiten.",
        "page_edited" => "Seite wurde erfolgreich bearbeitet.",
        "blog_published" => "Blog wird erstellt und veröffentlicht. Sie können in Aktive Blogs finden.",
        "blog_edited" => "Blog wurde erfolgreich bearbeitet.",
        "empty_page_field" => "Seitenfelder dürfen nicht leer sein. Versuchen Sie es nochmal.",
        "zip_id" => "PLZ-ID",
        "active" => "Aktiv",
        "pending" => "Ausstehend",
        "copyright_name" => "Copyright-Name",
        "password" => "Passwort",
        "self_destruct_text" => "Die private Notiz zerstört sich selbst, sobald der Link geöffnet wird.",
        "note_heading" => "Anonyme private Notiz",
        "note_heading_password" => "Anonyme private Notiz mit Passwort",
        "textarea_placeholder" => "Was ist Ihre private Notiz ... ?",
        "create_note_btn" => "Private Notiz erstellen",
        "create_note_with_password_btn" => "Private Notiz mit Passwort erstellen",
        "spam_msg" => "Spammer sind nicht erlaubt.",
        "empty_note_error" => "Private Notiz sollte nicht leer sein.",
        "empty_note_error_password" => "Private Notiz, Passwort & Passwort erneut eingeben sollten nicht leer sein.",
        "empty_note_password_error" => "Private Notiz & Passwort sollten nicht leer sein.",
        "note_password_error" => "Passwort ist falsch. Versuchen Sie es nochmal.",
        "password_error" => "Passwort und Passwort erneut eingeben stimmen nicht überein.",
        "note_heading_link" => "Anonymer privater Notiz-Link",
        "note_destroy_msg" => "Diese Notiz wurde vernichtet. Kopieren Sie es, bevor Sie das Fenster schließen oder die Sprache / den Modus ändern.",
        "create_pvt_note" => "Erstellen Sie Ihre private Notiz",
        "read_msg" => "Es scheint, dass die Notiz gelesen und zerstört wurde.",
        "password_heading" => "Passwort",
        "repassword_heading" => "Passwort erneut eingeben",
        "password_msg_heading" => "Private Note ist passwortverschlüsselt.",
        "enter_password" => "Geben Sie das Passwort ein und öffnen Sie die Notiz",
        "copyright_heading" => "Urheberrechte",
        "all_right_reserved" => "Alle Rechte vorbehalten.",
        "admin_login_heading" => "Anmeldung im Admin-Panel",
        "username" => "Nutzername",
        "admin_incorrectlogin_msg" => "Entweder falscher Benutzername oder Passwort. Versuchen Sie es nochmal.",
        "empty_admin_error" => "Der Admin-Benutzername / das Passwort dürfen nicht leer sein.",
        "login" => "Anmeldung",
        "notifications" => "Benachrichtigungen und Verknüpfungen",
        "view" => "Sicht",
        "total_private_note" => "Total private Notizen",      
        "total_unreadprivate_note" => "Gesamtzahl ungelesener privater Notizen" ,       
        "total_readprivate_note" => "Insgesamt gelesene private Notizen",        
        "total_banned_ip" => "Gesamte gesperrte Benutzer-IP",
        "logout" => "Ausloggen",
        "analysis" => "Analyse",
        "lifetime_notes" => "Lebenslange private Notizen",
        "thismonth_notes" => "Diesen Monat Private Notizen",
        "today_notes" => "Heute Private Notizen",
        "wrong_password" => "Passwort ist falsch. Versuchen Sie es nochmal.",
        "form_empty" => "Alle Felder sind Pflichtfelder. Versuchen Sie es nochmal.",
        "username_changed" => "Admin-Benutzername erfolgreich geändert.",
        "change_admin_username" => "Ändern Sie den Admin-Benutzernamen",
        "old_admin_username" => "Alter Admin-Benutzername",
        "new_admin_username" => "Neuer Admin-Benutzername",
        "change" => "Ändern",
        "old_admin_password" => "Altes Admin-Passwort",
        "new_admin_password" => "Neues Admin-Passwort",
        "min_password" => "Das Passwort muss mindestens 8 Zeichen enthalten, 1 Großbuchstabe, 1 Kleinbuchstabe und 1 Zahl (Beispiel - Test1234) .",
        "change_admin_password" => "Admin-Passwort ändern",
        "password_changed" => "Admin-Passwort erfolgreich geändert.",
        "read" => "Lesen",
        "unread" => "Ungelesen",
        "delete_note" => "Notiz löschen",
        "delete_note_with_ip" => "Löschen Sie die Notiz und blockieren Sie die Benutzer-IP",
        "view_note" => "Hinweis anzeigen",
        "yes" => "Ja",
        "no" => "Nein",
        "serial_number" => "S.Nr.",
        "date" => "Datum",
        "note_id" => "Hinweis-ID",
        "note_unique_id" => "Beachten Sie die eindeutige ID",
        "user_ip" => "Benutzer-IP",
        "note" => "Notiz",
        "password_protected" => "Passwortgeschützt",
        "status" => "Status",
        "action" => "Handlung",
        "note_deleted" => "Hinweis wurde erfolgreich gelöscht.",
        "note_deleted_with_ip" => "Hinweis wurde erfolgreich gelöscht und Benutzer-IP wurde gesperrt.",  
        "unblock_ip" => "Entsperren Sie die Benutzer-IP und löschen Sie sie von der Blacklist.",
        "unblocked_ip" => "Benutzer-IP entsperrt und von der Blacklist gelöscht.",
        "blocked_msg" => "Es tut uns leid ! Diese Website ist nichts für Sie."
    );  
    return $userlang[$txt];
}

?>