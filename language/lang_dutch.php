<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "dutch",
        "total_zip_files" => "Totaal zip-bestanden",      
        "total_active_zip_files" => "Totaal aantal actieve zip-bestanden" ,       
        "total_pending_zip_files" => "Totaal aantal zip-bestanden in behandeling",  
        "total_category" => "Totale categorie",      
        "total_active_category" => "Totaal actieve categorie" ,       
        "total_active_blog" => "Totaal aantal actieve blogs" ,       
        "total_active_page" => "Totaal aantal actieve pagina's" ,       
        "total_disable_category" => "Totaal niet-actieve categorie",
        "total_disable_blog" => "Totaal aantal niet-actieve blogs",
        "total_disable_page" => "Totaal aantal niet-actieve pagina's",
        "sitemap" => "Sitemap",
        "quick_link" => "Snelle links",
        "save" => "Opslaan",
        "latest_blog" => "Laatste blogs",
        "blogs" => "Blogs",
        "about_us" => "Over ons",
        "setting_saved" => "Instelling is succesvol gewijzigd.",
        "ad_setting" => "Advertentie-instellingen",
        "ad_javascript" => "Plak Google Javascript-advertentiecode - 300 x 250 pixels",
        "analytic_javascript" => "Google Javascript-analysecode plakken",
        "ad_javascript_on" => "Advertentie inschakelen",
        "analytic_javascript_on" => "Schakel Google Analytics in",
        "analytic_setting" => "Analytische instelling",
        "max_char" => "Maximaal 200 tekens",
        "autoapprove_on" => "ZIP-bestand automatisch goedkeuren",
        "main_setting" => "Hoofdinstelling",
        "show_default_limit" => "Standaardlimiet",
        "show_loadmore_limit" => "Laad meer limiet",
        "upload_zip" => "Postcode uploaden",
        "unlock_zip" => "Zip ontgrendelen",
        "make" => "Maken",
        "featured" => "Aanbevolen",
        "featured_zip" => "Zip is aanbevolen, maar is nu niet populair.",
        "unfeatured" => "niet vermeld",
        "unfeatured_zip" => "Zip is nu niet beschikbaar.",
        "popular" => "Populair",
        "popular_zip" => "Zip is populair maar nu niet beschikbaar.",
        "unpopular_zip" => "Zip is nu niet populair.",
        "unpopular" => "impopulair",
        "zip_deleted" => "Zip is succesvol verwijderd.",
        "delete_zip" => "Zip verwijderen",
        "delete_zip_with_ip" => "Zip & Block gebruikers-IP verwijderen",
        "zip_deleted_with_ip" => "Zip is verwijderd en gebruiker is nu geblokkeerd.",
        "view_all" => "Bekijk alles",
        "sponsored" => "gesponsord",
        "zip_files" => "Zip-bestanden",
        "upload_zip_file" => "Anoniem zipbestand uploaden",
        "zip_title" => "Zip-titel",
        "edit" => "Bewerk",
        "delete" => "Verwijderen",
        "category" => "Categorie",
        "category_create" => "Categorie maken",
        "duplicate_category_name" => "Categorienaam moet uniek zijn. Probeer het nog eens.",
        "category_add" => "categorie toevoegen",
        "category_edit" => "Categorie bewerken",
        "category_deactivated" => "Categorie & Alle zip-bestanden die tot deze categorie behoren, zijn gedeactiveerd.",
        "category_activated" => "Categorie & Alle zip-bestanden die tot deze categorie behoren, zijn geactiveerd.",
        "category_zip_deleted" => "Categorie & Alle zip-bestanden die tot deze categorie behoren, zijn verwijderd.",
        "category_id" => "Categorie ID",
        "name" => "Naam",
        "activate" => "Activeren",
        "deactivate" => "Deactiveren",
        "approve" => "Goedkeuren",
        "approve_zip" => "Zip-bestand is goedgekeurd en live.",
        "zip" => "Zip bestand",
        "zip_title_unique" => "Zip-titel moet uniek zijn",
        "zipdescription" => "Beschrijving (optioneel )",
        "spam_msg" => "Spammer is niet toegestaan.",
        "zip_title_error" => "Zip-titel moet uniek zijn. Probeer het opnieuw met een andere naam.",
        "category_error" => "Categorie mag niet leeg zijn. Probeer het nog eens.",
        "zip_review" => "Zip-bestand is succesvol geüpload en wacht op beoordeling.",
        "download" => "Downloaden",
        "description" => "Zip Beschrijving:",
        "share_fb" => "Delen op Facebook",
        "share_tw" => "Delen op Twitter",
        "share_ld" => "Deel op Linkedin",
        "share_wp" => "Delen op Whatsapp",
        "choose_category" => "Kies categorie",
        "max_limit" => "Max. limiet - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "Max. limiet - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 pixels",
        "zip_limit" => "Geüploade zip-bestand is groter dan ".ZIP_LIMIT." KB. Probeer het nog eens.",
        "img_limit" => "Geüploade afbeeldingsbestand is groter dan ".BLOG_IMAGE_LIMIT." KB. Probeer het nog eens.",
        "img_dimension" => "Het geüploade afbeeldingsbestand moet exact 1600 x 800 pixels zijn. Probeer het nog eens.",
        "should_be_zip" => "Geüploade bestand is geen zip. Upload het zip-bestand en probeer het opnieuw.",
        "should_be_image" => "Geüploade bestand is geen afbeelding. Upload een png-, jpg- of jpeg-afbeelding en probeer het opnieuw.",
        "load_more" => "Meer laden",
        "search" => "Anonieme zip-bestanden zoeken...",
        "no_search_found" => "We hebben niets gevonden met uw zoekterm. Probeer met verschillende zoekwoorden.",
        "blog_image" => "Blogafbeelding",
        "pages" => "Pagina's",
        "singlepage" => "Bladzijde",
        "blog" => "Blogs",
        "singleblog" => "Blog",
        "create_page" => "Creëer pagina",
        "edit_page" => "Pagina aanpassen",
        "active_page" => "Actieve pagina's",
        "page_id" => "Pagina-ID",
        "deactive_page" => "Deactieve pagina's",
        "page_activated" => "Pagina is succesvol geactiveerd en is nu live.",
        "page_deactivated" => "Pagina is nu succesvol gedeactiveerd en verborgen.",
        "page_deleted" => "Pagina is succesvol verwijderd.",
        "create_blog" => "Blog maken",
        "edit_blog" => "Blog bewerken",
        "click_old_image" => "Klik op afbeelding om te zoomen",
        "active_blog" => "Actieve blogs",
        "deactive_blog" => "Deactieve blogs",
        "blog_id" => "Blog-ID",
        "blog_name" => "Blog Titel",
        "blog_activated" => "Blog is succesvol geactiveerd en nu live.",
        "blog_deactivated" => "Blog is nu succesvol gedeactiveerd en verborgen.",
        "blog_deleted" => "Blog is succesvol verwijderd.",
        "blog_name_unique" => "(Blogtitel moet uniek zijn en maximaal 100 tekens)",
        "blog_description" => "Blogbeschrijving",
        "blog_short_description" => "Blog Korte beschrijving (max. 200 tekens - het stimuleert SEO)",
        "page_name" => "Paginanaam",
        "page_description" => "pagina beschrijving",
        "page_name_unique" => "(Paginanaam moet uniek zijn en maximaal 25 tekens)",
        "duplicate_page_name" => "Paginanaam moet uniek zijn. Probeer het nog eens.",
        "duplicate_blog_name" => "Blogtitel moet uniek zijn. Probeer het nog eens.",
        "page_published" => "Pagina is gemaakt en gepubliceerd. U kunt vinden in Actieve pagina's.",
        "page_edited" => "Pagina is succesvol bewerkt.",
        "blog_published" => "Blog is gemaakt en gepubliceerd. U kunt vinden in Actieve Blogs.",
        "blog_edited" => "Blog is succesvol bewerkt.",
        "empty_page_field" => "Paginavelden mogen niet leeg zijn. Probeer het nog eens.",
        "zip_id" => "Zip-ID",
        "active" => "Actief",
        "pending" => "In afwachting",
        "copyright_name" => "Auteursrechtnaam:",
        "password" => "Wachtwoord",
        "self_destruct_text" => "De privénotitie vernietigt zichzelf zodra de link is geopend.",
        "note_heading" => "Anonieme privénotitie",
        "note_heading_password" => "Anonieme privénotitie met wachtwoord",
        "textarea_placeholder" => "Wat is uw persoonlijke notitie ... ?",
        "create_note_btn" => "Privénotitie maken",
        "create_note_with_password_btn" => "Maak een privénotitie met wachtwoord",
        "spam_msg" => "Spammer is niet toegestaan.",
        "empty_note_error" => "Privénotitie mag niet leeg zijn.",
        "empty_note_error_password" => "Privénotitie, wachtwoord en wachtwoord opnieuw typen mag niet leeg zijn.",
        "empty_note_password_error" => "Privénotitie en wachtwoord mogen niet leeg zijn.",
        "note_password_error" => "Wachtwoord is fout. Probeer het nog eens.",
        "password_error" => "Wachtwoord en wachtwoord opnieuw typen komen niet overeen.",
        "note_heading_link" => "Anonieme privénotitielink",
        "note_destroy_msg" => "Deze notitie is vernietigd. Kopieer het voordat u het venster sluit of de taal/modus wijzigt.",
        "create_pvt_note" => "Maak uw privénotitie",
        "read_msg" => "Het lijkt erop dat de notitie is gelezen en vernietigd.",
        "password_heading" => "Wachtwoord",
        "repassword_heading" => "Geef nogmaals het wachtwoord",
        "password_msg_heading" => "Private Note is met een wachtwoord versleuteld.",
        "enter_password" => "Voer wachtwoord in en open notitie",
        "copyright_heading" => "auteursrechten",
        "all_right_reserved" => "Alle rechten voorbehouden.",
        "admin_login_heading" => "Inloggen op het beheerdersdashboard",
        "username" => "gebruikersnaam",
        "admin_incorrectlogin_msg" => "Ofwel verkeerde gebruikersnaam of wachtwoord. Probeer het nog eens.",
        "empty_admin_error" => "Admin gebruikersnaam / wachtwoord mag niet leeg zijn.",
        "login" => "Log in",
        "notifications" => "Meldingen en snelkoppelingen",
        "view" => "Weergave",
        "total_private_note" => "Totaal aantal privénotities",      
        "total_unreadprivate_note" => "Totaal ongelezen privénotities" ,       
        "total_readprivate_note" => "Totaal gelezen privénotities",        
        "total_banned_ip" => "Totaal verbannen gebruikers-IP",
        "logout" => "Uitloggen",
        "analysis" => "Analyse",
        "lifetime_notes" => "Levenslange privénotities",
        "thismonth_notes" => "Deze maand privé notities",
        "today_notes" => "Vandaag privé notities",
        "wrong_password" => "Wachtwoord is fout. Probeer het nog eens.",
        "form_empty" => "Alle velden zijn verplicht. Probeer het nog eens.",
        "username_changed" => "Admin gebruikersnaam succesvol gewijzigd.",
        "change_admin_username" => "Gebruikersnaam beheerder wijzigen",
        "old_admin_username" => "Oude beheerdersgebruikersnaam",
        "new_admin_username" => "Nieuwe beheerdersgebruikersnaam",
        "change" => "Wijziging",
        "old_admin_password" => "Oud beheerderswachtwoord",
        "new_admin_password" => "Nieuw beheerderswachtwoord",
        "min_password" => "Wachtwoord moet minimaal 8 tekens bevatten, 1 hoofdletter, 1 kleine letter en 1 cijfer (voorbeeld - Test1234).",
        "change_admin_password" => "Beheerderswachtwoord wijzigen",
        "password_changed" => "Beheerderswachtwoord succesvol gewijzigd.",
        "read" => "Lezen",
        "unread" => "Ongelezen",
        "delete_note" => "Opmerking verwijderen",
        "delete_note_with_ip" => "Verwijder notitie en blokkeer gebruikers-IP",
        "view_note" => "Opmerking bekijken",
        "yes" => "Ja",
        "no" => "Nee",
        "serial_number" => "S.Nr.",
        "date" => "Datum",
        "note_id" => "Notitie-ID",
        "note_unique_id" => "Opmerking Unieke ID",
        "user_ip" => "Gebruikers-IP",
        "note" => "Opmerking",
        "password_protected" => "Beschermd met een wachtwoord",
        "status" => "Toestand",
        "action" => "Actie",
        "note_deleted" => "Notitie is succesvol verwijderd.",
        "note_deleted_with_ip" => "Notitie is succesvol verwijderd en gebruikers-IP is geblokkeerd.",  
        "unblock_ip" => "Deblokkeer gebruikers-IP & verwijder van zwarte lijst.",
        "unblocked_ip" => "Gebruikers-IP gedeblokkeerd en verwijderd van zwarte lijst.",
        "blocked_msg" => "Sorry ! Deze website is niet voor jou."
    );  
    return $userlang[$txt];
}

?>