<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "turkish",
        "total_zip_files" => "Toplam Zip Dosyası",      
        "total_active_zip_files" => "Toplam Aktif Zip Dosyaları" ,       
        "total_pending_zip_files" => "Toplam Bekleyen Zip Dosyası",  
        "total_category" => "Toplam Kategori",      
        "total_active_category" => "Toplam Aktif Kategori" ,       
        "total_active_blog" => "Toplam Aktif Bloglar" ,       
        "total_active_page" => "Toplam Aktif Sayfa" ,       
        "total_disable_category" => "Toplam Devre Dışı Kategori",
        "total_disable_blog" => "Toplam Devre Dışı Bloglar",
        "total_disable_page" => "Toplam Devre Dışı Sayfa Sayısı",
        "sitemap" => "Site Haritası",
        "quick_link" => "Hızlı Linkler",
        "save" => "Kaydetmek",
        "latest_blog" => "En Son Bloglar",
        "blogs" => "Bloglar",
        "about_us" => "Hakkımızda",
        "setting_saved" => "Ayar başarıyla değiştirildi.",
        "ad_setting" => "Reklam Ayarları",
        "ad_javascript" => "Google Javascript Reklam Kodunu Yapıştırın - 300 x 250 Piksel",
        "analytic_javascript" => "Google Javascript Analitik Kodunu Yapıştırın",
        "ad_javascript_on" => "Reklamı Aç",
        "analytic_javascript_on" => "Google Analytics'i Açın",
        "analytic_setting" => "Analitik Ayar",
        "max_char" => "Maksimum 200 Karakter",
        "autoapprove_on" => "Otomatik onay zip dosyası",
        "main_setting" => "Ana Ayar",
        "show_default_limit" => "Varsayılan Sınır",
        "show_loadmore_limit" => "Daha Fazla Limit Yükle",
        "upload_zip" => "Zip Yükle",
        "unlock_zip" => "Zip'in Kilidini Aç",
        "make" => "Yapmak",
        "featured" => "Öne çıkan",
        "featured_zip" => "Zip Öne Çıktı Ama Artık Popüler Değil.",
        "unfeatured" => "Öne Çıkmayan",
        "unfeatured_zip" => "Zip artık Özelliksiz.",
        "popular" => "Popüler",
        "popular_zip" => "Zip Popüler Ama Artık Özellik Yok.",
        "unpopular_zip" => "Zip artık popüler değil.",
        "unpopular" => "popüler olmayan",
        "zip_deleted" => "Zip başarıyla silindi.",
        "delete_zip" => "Zip'i Sil",
        "delete_zip_with_ip" => "Zip'i Sil ve Kullanıcı IP'sini Engelle",
        "zip_deleted_with_ip" => "Zip silinir ve Kullanıcı şimdi engellenir.",
        "view_all" => "Hepsini gör",
        "sponsored" => "sponsorlu",
        "zip_files" => "Zip Dosyaları",
        "upload_zip_file" => "Anonim Zip Dosyası Yükle",
        "zip_title" => "Posta Başlığı",
        "edit" => "Düzenlemek",
        "delete" => "Silmek",
        "category" => "Kategori",
        "category_create" => "Kategori Oluştur",
        "duplicate_category_name" => "Kategori Adı benzersiz olmalıdır. Tekrar deneyin.",
        "category_add" => "Kategori ekle",
        "category_edit" => "Kategoriyi Düzenle",
        "category_deactivated" => "Kategori & Bu kategoriye ait tüm zip dosyaları devre dışı bırakıldı.",
        "category_activated" => "Kategori & Bu kategoriye ait tüm zip dosyaları etkinleştirildi.",
        "category_zip_deleted" => "Kategori & Bu kategoriye ait tüm zip dosyaları silindi.",
        "category_id" => "Kategori & Bu kategoriye ait tüm zip dosyaları silindi.",
        "name" => "İsim",
        "activate" => "etkinleştir",
        "deactivate" => "Devre dışı bırakmak",
        "approve" => "Onaylamak",
        "approve_zip" => "Zip dosyası onaylandı ve yayında.",
        "zip" => "Sıkıştırılmış dosya",
        "zip_title_unique" => "Zip Başlığı benzersiz olmalıdır",
        "zipdescription" => "Açıklama (isteğe bağlı )",
        "spam_msg" => "Spam göndericiye izin verilmez.",
        "zip_title_error" => "Zip Başlığı benzersiz olmalıdır. Başka bir adla tekrar deneyin.",
        "category_error" => "Kategori boş bırakılmamalıdır. Tekrar deneyin.",
        "zip_review" => "Zip dosyası başarıyla yüklendi ve incelenmeyi bekliyor.",
        "download" => "İndirmek",
        "description" => "Posta Açıklaması",
        "share_fb" => "Facebook'ta Paylaş",
        "share_tw" => "Twitter'da paylaş",
        "share_ld" => "Linkedin'de paylaş",
        "share_wp" => "Whatsapp'ta paylaş",
        "choose_category" => "Kategori Seçin",
        "max_limit" => "Maksimum Limit - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "Maksimum Sınır - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 Piksel",
        "zip_limit" => "Yüklenen Zip dosyası ".ZIP_LIMIT." değerinden büyük. KB. Tekrar deneyin.",
        "img_limit" => "Yüklenen Resim dosyası ".BLOG_IMAGE_LIMIT." değerinden büyük. KB. Tekrar deneyin.",
        "img_dimension" => "Yüklenen Resim dosyası tam olarak 1600 x 800 Piksel olmalıdır. Tekrar deneyin.",
        "should_be_zip" => "Yüklenen Dosya zip değil. Lütfen zip dosyasını yükleyin ve tekrar deneyin.",
        "should_be_image" => "Yüklenen Dosya resim değil. Lütfen png, jpg veya jpeg resmi yükleyin ve tekrar deneyin.",
        "load_more" => "Daha fazla yükle",
        "search" => "Anonim Zip Dosyalarını Ara...",
        "no_search_found" => "Arama Teriminiz ile ilgili hiçbir şey bulamadık. Farklı anahtar kelimelerle deneyin.",
        "blog_image" => "Blog Resmi",
        "pages" => "Sayfalar",
        "singlepage" => "Sayfa",
        "blog" => "Bloglar",
        "singleblog" => "Blog",
        "create_page" => "Sayfa oluştur",
        "edit_page" => "Sayfayı düzenle",
        "active_page" => "Aktif Sayfalar",
        "page_id" => "Sayfa Kimliği",
        "deactive_page" => "Devre Dışı Sayfalar",
        "page_activated" => "Sayfa başarıyla etkinleştirildi ve şimdi yayında.",
        "page_deactivated" => "Sayfa şimdi başarıyla devre dışı bırakıldı ve gizlendi.",
        "page_deleted" => "Sayfa başarıyla silindi.",
        "create_blog" => "Blog yarat",
        "edit_blog" => "Blogu Düzenle",
        "click_old_image" => "Yakınlaştırmak için Resmin üzerine tıklayın",
        "active_blog" => "Aktif Bloglar",
        "deactive_blog" => "Devre Dışı Bloglar",
        "blog_id" => "Blog Kimliği",
        "blog_name" => "blog başlığı",
        "blog_activated" => "Blog başarıyla etkinleştirildi ve şimdi yayında.",
        "blog_deactivated" => "Blog başarıyla devre dışı bırakıldı ve şimdi gizlendi.",
        "blog_deleted" => "Blog başarıyla silindi.",
        "blog_name_unique" => "( Blog Başlığı benzersiz olmalı ve maksimum 100 Karakter olmalıdır )",
        "blog_description" => "Blog Açıklaması",
        "blog_short_description" => "Blog Kısa Açıklama ( max 200 Karakter - SEO'yu artırır )",
        "page_name" => "Sayfa ismi",
        "page_description" => "Sayfa açıklaması",
        "page_name_unique" => "(Sayfa adı benzersiz ve maksimum 25 Karakter olmalıdır)",
        "duplicate_page_name" => "Sayfa adı benzersiz olmalıdır. Tekrar deneyin.",
        "duplicate_blog_name" => "Blog başlığı benzersiz olmalıdır. Tekrar deneyin.",
        "page_published" => "Sayfa Oluşturuldu ve Yayınlandı. Aktif Sayfalarda bulabilirsiniz.",
        "page_edited" => "Sayfa başarıyla düzenlendi.",
        "blog_published" => "Blog Oluşturulur ve Yayınlanır. Aktif Bloglarda bulabilirsiniz.",
        "blog_edited" => "Blog başarıyla düzenlendi.",
        "empty_page_field" => "Sayfa Alanları boş olamaz. Tekrar deneyin.",
        "zip_id" => "Posta Kimliği",
        "active" => "Aktif",
        "pending" => "Askıda olması",
        "copyright_name" => "Telif Hakkı Adı",
        "password" => "Şifre",
        "self_destruct_text" => "Özel not, bağlantı açıldığında kendi kendini yok edecektir.",
        "note_heading" => "Anonim Özel Not",
        "note_heading_password" => "Şifreli Anonim Özel Not",
        "textarea_placeholder" => "Özel notunuz nedir...?",
        "create_note_btn" => "Özel Not Oluştur",
        "create_note_with_password_btn" => "Şifre ile Özel Not Oluşturun",
        "spam_msg" => "Spam göndericiye izin verilmez.",
        "empty_note_error" => "Özel Not boş bırakılmamalıdır.",
        "empty_note_error_password" => "Özel Not, Şifre ve Şifreyi Yeniden Yazınız boş bırakılmamalıdır.",
        "empty_note_password_error" => "Özel Not ve Şifre boş bırakılmamalıdır.",
        "note_password_error" => "Şifre yanlış. Tekrar deneyin.",
        "password_error" => "Şifre ve Şifreyi yeniden yazın eşleşmiyor.",
        "note_heading_link" => "Anonim Özel Not Bağlantısı",
        "note_destroy_msg" => "Bu not imha edildi. Pencereyi kapatmadan veya dili / modu değiştirmeden önce kopyalayın.",
        "create_pvt_note" => "Özel Notunuzu Oluşturun",
        "read_msg" => "Not okunmuş ve yok edilmiş gibi görünüyor.",
        "password_heading" => "Parola",
        "repassword_heading" => "Şifrenizi yeniden yazın",
        "password_msg_heading" => "Özel Not parolayla şifrelenir.",
        "enter_password" => "Şifreyi Girin ve Notu Açın",
        "copyright_heading" => "Telif hakkı",
        "all_right_reserved" => "Tüm hakları Saklıdır.",
        "admin_login_heading" => "Yönetici Paneli Girişi",
        "username" => "Kullanıcı adı",
        "admin_incorrectlogin_msg" => "Ya yanlış kullanıcı adı ya da şifre. Tekrar deneyin.",
        "empty_admin_error" => "Yönetici Kullanıcı Adı / Şifresi boş bırakılmamalıdır.",
        "login" => "Giriş yapmak",
        "notifications" => "Bildirimler ve Kısayollar",
        "view" => "görüş",
        "total_private_note" => "Toplam Özel Notlar",      
        "total_unreadprivate_note" => "Toplam Okunmamış Özel Notlar" ,       
        "total_readprivate_note" => "Toplam Okunan Özel Notlar",        
        "total_banned_ip" => "Toplam Yasaklanan Kullanıcı IP'si",
        "logout" => "Çıkış Yap",
        "analysis" => "analiz",
        "lifetime_notes" => "Ömür Boyu Özel Notlar",
        "thismonth_notes" => "Bu Ay Özel Notlar",
        "today_notes" => "Bugün Özel Notlar",
        "wrong_password" => "Şifre yanlış. Tekrar deneyin.",
        "form_empty" => "Tüm alanlar zorunlu. Tekrar deneyin.",
        "username_changed" => "Yönetici Kullanıcı Adı Başarıyla Değiştirildi.",
        "change_admin_username" => "Yönetici Kullanıcı Adını Değiştir",
        "old_admin_username" => "Eski Yönetici Kullanıcı Adı",
        "new_admin_username" => "Yeni Yönetici Kullanıcı Adı",
        "change" => "Değişiklik",
        "old_admin_password" => "Eski Yönetici Şifresi",
        "new_admin_password" => "Yeni Yönetici Şifresi",
        "min_password" => "Şifre minimum 8 karakter, 1 Büyük harf, 1 Küçük harf ve 1 rakam içermelidir (Örnek - Test1234) .",
        "change_admin_password" => "Yönetici Parolasını Değiştir",
        "password_changed" => "Yönetici Şifresi Başarıyla Değiştirildi.",
        "read" => "Okumak",
        "unread" => "Okunmamış",
        "delete_note" => "Notu Sil",
        "delete_note_with_ip" => "Notu Sil ve Kullanıcı IP'sini Engelle",
        "view_note" => "Notu Görüntüle",
        "yes" => "Evet",
        "no" => "Numara",
        "serial_number" => "S.No.",
        "date" => "Tarih",
        "note_id" => "Not kimliği",
        "note_unique_id" => "Not Benzersiz Kimlik",
        "user_ip" => "kullanıcı IP'si",
        "note" => "Not",
        "password_protected" => "Şifre korumalı",
        "status" => "Durum",
        "action" => "Aksiyon",
        "note_deleted" => "Not başarıyla silindi.",
        "note_deleted_with_ip" => "Not başarıyla silindi ve Kullanıcı IP'si engellendi.",  
        "unblock_ip" => "Kullanıcı IP'sinin engellemesini kaldırın ve kara listeden silin.",
        "unblocked_ip" => "Kullanıcı IP'sinin engellemesi kaldırıldı ve kara listeden silindi.",
        "blocked_msg" => "Afedersiniz ! Bu web sitesi sizin için değil."
    );  
    return $userlang[$txt];
}

?>