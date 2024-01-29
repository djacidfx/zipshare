<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "urdu",
        "total_zip_files" => "کل زپ فائلیں",      
        "total_active_zip_files" => "کل ایکٹو زپ فائلیں" ,       
        "total_pending_zip_files" => "کل زیر التواء زپ فائلیں۔",  
        "total_category" => "کل زمرہ",      
        "total_active_category" => "کل فعال زمرہ" ,       
        "total_active_blog" => "کل ایکٹو بلاگز" ,       
        "total_active_page" => "کل فعال صفحات" ,       
        "total_disable_category" => "کل غیر فعال زمرہ",
        "total_disable_blog" => "کل غیر فعال بلاگز",
        "total_disable_page" => "کل غیر فعال صفحات",
        "sitemap" => "سائٹ کا نقشہ",
        "quick_link" => "فوری رابطے",
        "save" => "محفوظ کریں۔",
        "latest_blog" => "تازہ ترین بلاگز",
        "blogs" => "بلاگز",
        "about_us" => "ہمارے بارے میں",
        "setting_saved" => "ترتیب کامیابی کے ساتھ تبدیل کر دی گئی ہے۔",
        "ad_setting" => "اشتہار کی ترتیبات",
        "ad_javascript" => "گوگل جاوا اسکرپٹ اشتھاراتی کوڈ - 300 x 250 پکسل پیسٹ کریں۔",
        "analytic_javascript" => "گوگل جاوا اسکرپٹ تجزیاتی کوڈ پیسٹ کریں۔",
        "ad_javascript_on" => "اشتہار کو آن کریں۔",
        "analytic_javascript_on" => "گوگل تجزیات کو آن کریں۔",
        "analytic_setting" => "تجزیاتی ترتیب",
        "max_char" => "زیادہ سے زیادہ 200 حروف",
        "autoapprove_on" => "زپ فائل کو خودکار طور پر منظور کریں۔",
        "main_setting" => "مین سیٹنگ",
        "show_default_limit" => "طے شدہ حد",
        "show_loadmore_limit" => "لوڈ مزید حد",
        "upload_zip" => "زپ اپ لوڈ کریں۔",
        "unlock_zip" => "زپ کو غیر مقفل کریں۔",
        "make" => "بنائیں",
        "featured" => "نمایاں",
        "featured_zip" => "زپ نمایاں ہے لیکن اب غیر مقبول ہے۔",
        "unfeatured" => "غیر نمایاں",
        "unfeatured_zip" => "زپ اب غیر نمایاں ہے۔",
        "popular" => "مقبول",
        "popular_zip" => "زپ مقبول ہے لیکن اب غیر نمایاں ہے۔",
        "unpopular_zip" => "زپ اب غیر مقبول ہے۔",
        "unpopular" => "غیر مقبول",
        "zip_deleted" => "زپ کو کامیابی سے حذف کر دیا گیا ہے۔",
        "delete_zip" => "زپ کو حذف کریں۔",
        "delete_zip_with_ip" => "زپ کو حذف کریں اور صارف کا IP بلاک کریں۔",
        "zip_deleted_with_ip" => "زپ کو حذف کر دیا گیا ہے اور صارف کو اب بلاک کر دیا گیا ہے۔",
        "view_all" => "سب دیکھیں",
        "sponsored" => "سپانسر شدہ",
        "zip_files" => "زپ فائلیں۔",
        "upload_zip_file" => "گمنام زپ فائل اپ لوڈ کریں۔",
        "zip_title" => "زپ کا عنوان",
        "edit" => "ترمیم",
        "delete" => "حذف کریں۔",
        "category" => "قسم",
        "category_create" => "زمرہ بنائیں",
        "duplicate_category_name" => "زمرہ کا نام منفرد ہونا چاہیے۔ دوبارہ کوشش کریں.",
        "category_add" => "زمرہ شامل کریں۔",
        "category_edit" => "زمرہ میں ترمیم کریں۔",
        "category_deactivated" => "زمرہ اور اس زمرے سے تعلق رکھنے والی تمام زپ فائلوں کو غیر فعال کر دیا گیا ہے۔",
        "category_activated" => "زمرہ اور اس زمرے سے تعلق رکھنے والی تمام زپ فائلوں کو چالو کر دیا گیا ہے۔",
        "category_zip_deleted" => "زمرہ اور اس زمرے سے تعلق رکھنے والی تمام زپ فائلوں کو حذف کر دیا گیا ہے۔",
        "category_id" => "زمرہ کی شناخت",
        "name" => "نام",
        "activate" => "محرک کریں",
        "deactivate" => "غیر فعال کریں۔",
        "approve" => "منظور کرو",
        "approve_zip" => "زپ فائل کی منظوری دی گئی ہے اور لائیو ہے۔",
        "zip" => "زپ فائل",
        "zip_title_unique" => "زپ کا عنوان منفرد ہونا چاہیے۔",
        "zipdescription" => "تفصیل (اختیاری )",
        "spam_msg" => "اسپامر کی اجازت نہیں ہے۔",
        "zip_title_error" => "زپ کا عنوان منفرد ہونا چاہیے۔ دوسرے نام کے ساتھ دوبارہ کوشش کریں۔",
        "category_error" => "زمرہ خالی نہیں ہونا چاہیے۔ دوبارہ کوشش کریں.",
        "zip_review" => "زپ فائل کامیابی کے ساتھ اپ لوڈ ہو گئی اور یہ زیر التواء جائزہ میں ہے۔",
        "download" => "ڈاؤن لوڈ کریں",
        "description" => "زپ کی تفصیل",
        "share_fb" => "فیس بک پر شیئر کریں",
        "share_tw" => "ٹویٹر پر شیئر کریں۔",
        "share_ld" => "Linkedin پر شیئر کریں۔",
        "share_wp" => "واٹس ایپ پر شیئر کریں۔",
        "choose_category" => "زمرہ منتخب کریں۔",
        "max_limit" => "زیادہ سے زیادہ حد - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "زیادہ سے زیادہ حد - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 پکسلز",
        "zip_limit" => "اپ لوڈ کردہ Zip فائل ".ZIP_LIMIT." سے بڑی ہے۔ KB دوبارہ کوشش کریں.",
        "img_limit" => "اپ لوڈ کردہ تصویری فائل ".BLOG_IMAGE_LIMIT." سے بڑی ہے۔ KB دوبارہ کوشش کریں.",
        "img_dimension" => "اپ لوڈ کردہ تصویری فائل بالکل 1600 x 800 پکسلز ہونی چاہیے۔ دوبارہ کوشش کریں.",
        "should_be_zip" => "اپ لوڈ کردہ فائل زپ نہیں ہے۔ براہ کرم زپ فائل اپ لوڈ کریں اور دوبارہ کوشش کریں۔",
        "should_be_image" => "اپ لوڈ کردہ فائل تصویر نہیں ہے۔ براہ کرم png، jpg یا jpeg تصویر اپ لوڈ کریں اور دوبارہ کوشش کریں۔",
        "load_more" => "مزید لوڈ کریں",
        "search" => "گمنام زپ فائلیں تلاش کریں...",
        "no_search_found" => "ہمیں آپ کی تلاش کی اصطلاح کے ساتھ کچھ نہیں ملا۔ مختلف مطلوبہ الفاظ کے ساتھ کوشش کریں۔",
        "blog_image" => "بلاگ تصویر",
        "pages" => "صفحات",
        "singlepage" => "صفحہ",
        "blog" => "بلاگز",
        "singleblog" => "بلاگ",
        "create_page" => "صفحہ تخلیق کریں",
        "edit_page" => "صفحہ میں ترمیم کریں۔",
        "active_page" => "فعال صفحات",
        "page_id" => "صفحہ کی شناخت",
        "deactive_page" => "غیر فعال صفحات",
        "page_activated" => "صفحہ کامیابی کے ساتھ ایکٹیویٹ ہو گیا ہے اور اب لائیو ہے۔",
        "page_deactivated" => "صفحہ کو کامیابی کے ساتھ غیر فعال اور اب چھپا دیا گیا ہے۔",
        "page_deleted" => "صفحہ کامیابی کے ساتھ حذف کر دیا گیا ہے۔",
        "create_blog" => "بلاگ بنائیں",
        "edit_blog" => "بلاگ میں ترمیم کریں۔",
        "click_old_image" => "زوم کرنے کے لیے امیج پر کلک کریں۔",
        "active_blog" => "فعال بلاگز",
        "deactive_blog" => "غیر فعال بلاگز",
        "blog_id" => "بلاگ آئی ڈی",
        "blog_name" => "بلاگ کا عنوان",
        "blog_activated" => "بلاگ کو کامیابی کے ساتھ چالو کیا گیا ہے اور اب لائیو ہے۔",
        "blog_deactivated" => "بلاگ کو کامیابی کے ساتھ غیر فعال اور اب چھپا دیا گیا ہے۔",
        "blog_deleted" => "بلاگ کو کامیابی سے حذف کر دیا گیا ہے۔",
        "blog_name_unique" => "(بلاگ کا عنوان منفرد اور زیادہ سے زیادہ 100 حروف کا ہونا چاہیے)",
        "blog_description" => "بلاگ کی تفصیل",
        "blog_short_description" => "بلاگ کی مختصر تفصیل (زیادہ سے زیادہ 200 حروف - یہ SEO کو فروغ دیتا ہے)",
        "page_name" => "صفحہ کا نام",
        "page_description" => "صفحہ کی تفصیل",
        "page_name_unique" => "(صفحہ کا نام منفرد اور زیادہ سے زیادہ 25 حروف کا ہونا چاہیے)",
        "duplicate_page_name" => "صفحہ کا نام منفرد ہونا چاہیے۔ دوبارہ کوشش کریں.",
        "duplicate_blog_name" => "بلاگ کا عنوان منفرد ہونا چاہیے۔ دوبارہ کوشش کریں.",
        "page_published" => "صفحہ بنایا اور شائع کیا گیا ہے۔ آپ فعال صفحات میں تلاش کر سکتے ہیں۔",
        "page_edited" => "صفحہ میں کامیابی کے ساتھ ترمیم کی گئی ہے۔",
        "blog_published" => "بلاگ بنایا اور شائع کیا گیا ہے۔ آپ ایکٹو بلاگز میں تلاش کر سکتے ہیں۔",
        "blog_edited" => "بلاگ میں کامیابی کے ساتھ ترمیم کی گئی ہے۔",
        "empty_page_field" => "صفحہ کی فیلڈز خالی نہیں ہوسکتی ہیں۔ دوبارہ کوشش کریں.",
        "zip_id" => "زپ آئی ڈی",
        "active" => "فعال",
        "pending" => "زیر التواء",
        "copyright_name" => "کاپی رائٹ کا نام",
        "password" => "پاس ورڈ",
        "self_destruct_text" => "لنک کھلنے کے بعد پرائیویٹ نوٹ خود کو تباہ کر دے گا۔",
        "note_heading" => "گمنام نجی نوٹ",
        "note_heading_password" => "پاس ورڈ کے ساتھ گمنام نجی نوٹ",
        "textarea_placeholder" => "آپ کا پرائیویٹ نوٹ کیا ہے...؟",
        "create_note_btn" => "پرائیویٹ نوٹ بنائیں",
        "create_note_with_password_btn" => "پاس ورڈ کے ساتھ پرائیویٹ نوٹ بنائیں",
        "spam_msg" => "اسپامر کی اجازت نہیں ہے۔",
        "empty_note_error" => "پرائیویٹ نوٹ خالی نہیں ہونا چاہیے۔",
        "empty_note_error_password" => "پرائیویٹ نوٹ، پاس ورڈ اور دوبارہ ٹائپ پاس ورڈ خالی نہیں ہونا چاہیے۔",
        "empty_note_password_error" => "پرائیویٹ نوٹ اور پاس ورڈ خالی نہیں ہونا چاہیے۔",
        "note_password_error" => "پاس ورڈ غلط ہے۔ دوبارہ کوشش کریں.",
        "password_error" => "پاس ورڈ اور دوبارہ ٹائپ پاس ورڈ مماثل نہیں ہیں۔",
        "note_heading_link" => "گمنام نجی نوٹ کا لنک",
        "note_destroy_msg" => "یہ نوٹ تباہ کر دیا گیا۔ ونڈو بند کرنے یا زبان / موڈ تبدیل کرنے سے پہلے اسے کاپی کریں۔",
        "create_pvt_note" => "اپنا پرائیویٹ نوٹ بنائیں",
        "read_msg" => "ایسا لگتا ہے کہ نوٹ پڑھ کر تباہ کر دیا گیا تھا۔",
        "password_heading" => "پاس ورڈ",
        "repassword_heading" => "دوبارہ پاسوورڈ لکھئے",
        "password_msg_heading" => "پرائیویٹ نوٹ پاس ورڈ انکرپٹڈ ہے۔",
        "enter_password" => "پاس ورڈ درج کریں اور نوٹ کھولیں۔",
        "copyright_heading" => "کاپی رائٹ",
        "all_right_reserved" => "جملہ حقوق محفوظ ہیں.",
        "admin_login_heading" => "ایڈمن پینل لاگ ان",
        "username" => "صارف نام",
        "admin_incorrectlogin_msg" => "یا تو غلط صارف نام یا پاس ورڈ۔ دوبارہ کوشش کریں.",
        "empty_admin_error" => "ایڈمن کا صارف نام / پاس ورڈ خالی نہیں ہونا چاہیے۔",
        "login" => "لاگ ان کریں",
        "notifications" => "اطلاعات اور شارٹ کٹس",
        "view" => "دیکھیں",
        "total_private_note" => "کل پرائیویٹ نوٹس",      
        "total_unreadprivate_note" => "کل بغیر پڑھے ہوئے نجی نوٹس" ,       
        "total_readprivate_note" => "کل پڑھے گئے نجی نوٹس",        
        "total_banned_ip" => "کل ممنوعہ صارف IP",
        "logout" => "لاگ آوٹ",
        "analysis" => "تجزیہ",
        "lifetime_notes" => "لائف ٹائم پرائیویٹ نوٹس",
        "thismonth_notes" => "اس مہینے کے نجی نوٹس",
        "today_notes" => "آج کے نجی نوٹس",
        "wrong_password" => "پاس ورڈ غلط ہے۔ دوبارہ کوشش کریں.",
        "form_empty" => "تمام جگہیں لازمی ہیں. دوبارہ کوشش کریں.",
        "username_changed" => "ایڈمن کا صارف نام کامیابی کے ساتھ تبدیل کر دیا گیا۔",
        "change_admin_username" => "ایڈمن کا صارف نام تبدیل کریں۔",
        "old_admin_username" => "پرانا ایڈمن صارف نام",
        "new_admin_username" => "نیا ایڈمن صارف نام",
        "change" => "تبدیلی",
        "old_admin_password" => "پرانا ایڈمن پاس ورڈ",
        "new_admin_password" => "نیا ایڈمن پاس ورڈ",
        "min_password" => "پاس ورڈ میں کم از کم 8 حروف، 1 بڑے حروف، 1 چھوٹے حروف اور 1 نمبر کا ہونا ضروری ہے (مثال - Test1234)۔",
        "change_admin_password" => "ایڈمن پاس ورڈ تبدیل کریں۔",
        "password_changed" => "ایڈمن پاس ورڈ کامیابی سے تبدیل ہو گیا۔",
        "read" => "پڑھیں",
        "unread" => "ان پڑھ",
        "delete_note" => "نوٹ حذف کریں۔",
        "delete_note_with_ip" => "نوٹ کو حذف کریں اور صارف کا IP بلاک کریں۔",
        "view_note" => "نوٹ دیکھیں",
        "yes" => "جی ہاں",
        "no" => "نہیں",
        "serial_number" => "سیریل نمبر.",
        "date" => "تاریخ",
        "note_id" => "نوٹ ID",
        "note_unique_id" => "منفرد ID نوٹ کریں۔",
        "user_ip" => "صارف IP",
        "note" => "Note",
        "password_protected" => "پاس ورڈ محفوظ ہے۔",
        "status" => "حالت",
        "action" => "عمل",
        "note_deleted" => "نوٹ کامیابی کے ساتھ حذف کر دیا گیا ہے۔",
        "note_deleted_with_ip" => "نوٹ کو کامیابی کے ساتھ حذف کر دیا گیا ہے اور یوزر آئی پی کو بلاک کر دیا گیا ہے۔",  
        "unblock_ip" => "یوزر آئی پی کو غیر مسدود کریں اور بلیک لسٹ سے حذف کریں۔",
        "unblocked_ip" => "یوزر آئی پی کو بلاک کر دیا گیا اور بلیک لسٹ سے حذف کر دیا گیا۔",
        "blocked_msg" => "معذرت! یہ ویب سائٹ آپ کے لیے نہیں ہے۔"
    );  
    return $userlang[$txt];
}

?>