<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "nepali",
        "total_zip_files" => "कुल जिप फाइलहरू",      
        "total_active_zip_files" => "कुल सक्रिय जिप फाइलहरू" ,       
        "total_pending_zip_files" => "कुल पेन्डिङ जिप फाइलहरू",  
        "total_category" => "कुल वर्ग",      
        "total_active_category" => "कुल सक्रिय वर्ग" ,       
        "total_active_blog" => "कुल सक्रिय ब्लगहरू" ,       
        "total_active_page" => "कुल सक्रिय पृष्ठहरू" ,       
        "total_disable_category" => "कुल निष्क्रिय श्रेणी",
        "total_disable_blog" => "कुल निष्क्रिय ब्लगहरू",
        "total_disable_page" => "कुल निष्क्रिय पृष्ठहरू",
        "sitemap" => "साइटम्याप",
        "quick_link" => "द्रुत लिङ्कहरू",
        "save" => "बचत गर्नुहोस्",
        "latest_blog" => "नवीनतम ब्लगहरू",
        "blogs" => "ब्लगहरू",
        "about_us" => "हाम्रोबारे",
        "setting_saved" => "सेटिङ सफलतापूर्वक परिवर्तन गरिएको छ।",
        "ad_setting" => "विज्ञापन सेटिङहरू",
        "ad_javascript" => "गुगल जाभास्क्रिप्ट विज्ञापन कोड टाँस्नुहोस् - 300 x 250 पिक्सेल",
        "analytic_javascript" => "गुगल जाभास्क्रिप्ट विश्लेषणात्मक कोड टाँस्नुहोस्",
        "ad_javascript_on" => "विज्ञापन खोल्नुहोस्",
        "analytic_javascript_on" => "गुगल एनालिटिक्स खोल्नुहोस्",
        "analytic_setting" => "विश्लेषणात्मक सेटिङ",
        "max_char" => "अधिकतम 200 क्यारेक्टरहरू",
        "autoapprove_on" => "स्वचालित zip फाइल स्वीकृत",
        "main_setting" => "मुख्य सेटिङ",
        "show_default_limit" => "पूर्वनिर्धारित सीमा",
        "show_loadmore_limit" => "थप सीमा लोड गर्नुहोस्",
        "upload_zip" => "Zip अपलोड गर्नुहोस्",
        "unlock_zip" => "Zip अनलक गर्नुहोस्",
        "make" => "बनाउनुहोस्",
        "featured" => "चित्रित",
        "featured_zip" => "Zip चित्रित छ तर अहिले अलोकप्रिय छ।",
        "unfeatured" => "अनफिचर गरिएको",
        "unfeatured_zip" => "Zip अहिले अनफिचर गरिएको छ।",
        "popular" => "लोकप्रिय",
        "popular_zip" => "Zip लोकप्रिय छ तर अहिले अनफिचर गरिएको छ।",
        "unpopular_zip" => "Zip अहिले अलोकप्रिय छ।",
        "unpopular" => "अलोकप्रिय",
        "zip_deleted" => "Zip सफलतापूर्वक मेटाइएको छ।",
        "delete_zip" => "Zip मेटाउनुहोस्",
        "delete_zip_with_ip" => "Zip हटाउनुहोस् र प्रयोगकर्ता आईपी ब्लक गर्नुहोस्",
        "zip_deleted_with_ip" => "Zip मेटाइएको छ र प्रयोगकर्ता अब अवरुद्ध छ।",
        "view_all" => "सबै हेर्नुहोस्",
        "sponsored" => "प्रायोजित",
        "zip_files" => "Zip फाइलहरू",
        "upload_zip_file" => "बेनामी जिप फाइल अपलोड गर्नुहोस्",
        "zip_title" => "Zip शीर्षक",
        "edit" => "सम्पादन गर्नुहोस्",
        "delete" => "मेटाउन",
        "category" => "श्रेणी",
        "category_create" => "श्रेणी सिर्जना गर्नुहोस्",
        "duplicate_category_name" => "कोटीको नाम अद्वितीय हुनुपर्छ। पुन: प्रयास गर्नुहोस्।",
        "category_add" => "श्रेणी थप्नुहोस्",
        "category_edit" => "श्रेणी सम्पादन गर्नुहोस्",
        "category_deactivated" => "वर्ग र सबै zip फाइलहरू यस श्रेणीसँग सम्बन्धित छन् निष्क्रिय गरिएको छ।",
        "category_activated" => "वर्ग र सबै zip फाइलहरू यस वर्गसँग सम्बन्धित छन् सक्रिय गरिएको छ।",
        "category_zip_deleted" => "वर्ग र सबै zip फाइलहरू यस वर्गसँग सम्बन्धित मेटाइएको छ।",
        "category_id" => "कोटी आईडी",
        "name" => "नाम",
        "activate" => "सक्रिय गर्नुहोस्",
        "deactivate" => "निष्क्रिय पार्नुहोस्",
        "approve" => "अनुमोदन गर्नुहोस्",
        "approve_zip" => "Zip फाइल स्वीकृत र लाइभ भएको छ।",
        "zip" => "जिप फाइल",
        "zip_title_unique" => "Zip शीर्षक अद्वितीय हुनुपर्छ",
        "zipdescription" => "विवरण (ऐच्छिक)",
        "spam_msg" => "स्प्यामरलाई अनुमति छैन।",
        "zip_title_error" => "Zip शीर्षक अद्वितीय हुनुपर्छ। अर्को नामको साथ पुन: प्रयास गर्नुहोस्।",
        "category_error" => "श्रेणी खाली हुनु हुँदैन। पुन: प्रयास गर्नुहोस्।",
        "zip_review" => "Zip फाइल सफलतापूर्वक अपलोड भयो र यो विचाराधीन समीक्षामा छ।",
        "download" => "डाउनलोड गर्नुहोस्",
        "description" => "जिप विवरण",
        "share_fb" => "फेसबुकमा सेयर गर्नुहोस्",
        "share_tw" => "Twitter मा साझा गर्नुहोस्",
        "share_ld" => "Linkedin मा साझेदारी गर्नुहोस्",
        "share_wp" => "Whatsapp मा साझा गर्नुहोस्",
        "choose_category" => "श्रेणी छान्नुहोस्",
        "max_limit" => "अधिकतम सीमा - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "अधिकतम सीमा - ".BLOG_IMAGE_LIMIT." KB - १६०० x ८०० पिक्सेल",
        "zip_limit" => "अपलोड गरिएको Zip फाइल ".ZIP_LIMIT." भन्दा ठूलो छ। KB। पुन: प्रयास गर्नुहोस्।",
        "img_limit" => "अपलोड गरिएको छवि फाइल ".BLOG_IMAGE_LIMIT." भन्दा ठूलो छ। KB। पुन: प्रयास गर्नुहोस्।",
        "img_dimension" => "अपलोड गरिएको छवि फाइल ठ्याक्कै १६०० x ८०० पिक्सेलको हुनुपर्छ। पुन: प्रयास गर्नुहोस्।",
        "should_be_zip" => "अपलोड गरिएको फाइल zip होइन। कृपया zip फाइल अपलोड गर्नुहोस् र पुन: प्रयास गर्नुहोस्।",
        "should_be_image" => "अपलोड गरिएको फाइल छवि होइन। कृपया png, jpg वा jpeg छवि अपलोड गर्नुहोस् र पुन: प्रयास गर्नुहोस्।",
        "load_more" => "थप लोड गर्नुहोस्",
        "search" => "बेनामी जिप फाइलहरू खोज्नुहोस्...",
        "no_search_found" => "हामीले तपाईको खोज पदमा केही पनि फेला पारेनौं। विभिन्न कुञ्जी शब्दहरूसँग प्रयास गर्नुहोस्।",
        "blog_image" => "ब्लग छवि",
        "pages" => "पृष्ठहरू",
        "singlepage" => "पृष्ठ",
        "blog" => "ब्लगहरू",
        "singleblog" => "ब्लग",
        "create_page" => "पृष्ठ सिर्जना गर्नुहोस्",
        "edit_page" => "पृष्ठ सम्पादन गर्नुहोस्",
        "active_page" => "सक्रिय पृष्ठहरू",
        "page_id" => "पृष्ठ आईडी",
        "deactive_page" => "निष्क्रिय पृष्ठहरू",
        "page_activated" => "पृष्ठ सफलतापूर्वक सक्रिय गरिएको छ र अहिले लाइभ छ।",
        "page_deactivated" => "पृष्ठ सफलतापूर्वक निष्क्रिय र अब लुकाइएको छ।",
        "page_deleted" => "पृष्ठ सफलतापूर्वक मेटाइएको छ।",
        "create_blog" => "ब्लग सिर्जना गर्नुहोस्",
        "edit_blog" => "ब्लग सम्पादन गर्नुहोस्",
        "click_old_image" => "जुम गर्न छविमा क्लिक गर्नुहोस्",
        "active_blog" => "सक्रिय ब्लगहरू",
        "deactive_blog" => "निष्क्रिय ब्लगहरू",
        "blog_id" => "ब्लग आईडी",
        "blog_name" => "ब्लग शीर्षक",
        "blog_activated" => "ब्लग सफलतापूर्वक सक्रिय गरिएको छ र अहिले लाइभ छ।",
        "blog_deactivated" => "ब्लग सफलतापूर्वक निष्क्रिय र अब लुकाइएको छ।",
        "blog_deleted" => "ब्लग सफलतापूर्वक मेटाइएको छ।",
        "blog_name_unique" => "(ब्लग शीर्षक अद्वितीय र अधिकतम 100 वर्ण हुनुपर्छ)",
        "blog_description" => "ब्लग विवरण",
        "blog_short_description" => "ब्लग छोटो विवरण (अधिकतम 200 क्यारेक्टरहरू - यसले SEO बढाउँछ)",
        "page_name" => "पृष्ठको नाम",
        "page_description" => "पृष्ठ विवरण",
        "page_name_unique" => "(पृष्ठ नाम अद्वितीय र अधिकतम 25 वर्ण हुनुपर्छ)",
        "duplicate_page_name" => "पृष्ठको नाम अद्वितीय हुनुपर्छ। पुन: प्रयास गर्नुहोस्।",
        "duplicate_blog_name" => "ब्लग शीर्षक अद्वितीय हुनुपर्छ। पुन: प्रयास गर्नुहोस्।",
        "page_published" => "पृष्ठ सिर्जना र प्रकाशित गरिएको छ। तपाईं सक्रिय पृष्ठहरूमा फेला पार्न सक्नुहुन्छ।",
        "page_edited" => "पृष्ठ सफलतापूर्वक सम्पादन गरियो।",
        "blog_published" => "ब्लग सिर्जना र प्रकाशित छ। तपाईं सक्रिय ब्लगहरूमा फेला पार्न सक्नुहुन्छ।",
        "blog_edited" => "ब्लग सफलतापूर्वक सम्पादन गरिएको छ।",
        "empty_page_field" => "पृष्ठ क्षेत्रहरू खाली हुन सक्दैन। पुन: प्रयास गर्नुहोस्।",
        "zip_id" => "जिप आईडी",
        "active" => "सक्रिय",
        "pending" => "विचाराधीन",
        "copyright_name" => "प्रतिलिपि अधिकार नाम",
        "password" => "पासवर्ड",
        "self_destruct_text" => "एक पटक लिङ्क खोलिएपछि निजी नोट स्व-नष्ट हुनेछ।",
        "note_heading" => "बेनामी निजी नोट",
        "note_heading_password" => "पासवर्डको साथ बेनामी निजी नोट",
        "textarea_placeholder" => "तपाईको निजी नोट के हो ...?",
        "create_note_btn" => "निजी नोट सिर्जना गर्नुहोस्",
        "create_note_with_password_btn" => "पासवर्डको साथ निजी नोट सिर्जना गर्नुहोस्",
        "spam_msg" => "स्प्यामरलाई अनुमति छैन।",
        "empty_note_error" => "निजी नोट खाली हुनु हुँदैन।",
        "empty_note_error_password" => "निजी नोट, पासवर्ड र पुन: टाइप पासवर्ड खाली हुनु हुँदैन।",
        "empty_note_password_error" => "निजी नोट र पासवर्ड खाली हुनु हुँदैन।",
        "note_password_error" => "पासवर्ड गलत छ। पुन: प्रयास गर्नुहोस्।",
        "password_error" => "पासवर्ड र पुन: टाइप पासवर्ड मिल्दैन।",
        "note_heading_link" => "बेनामी निजी नोट लिङ्क",
        "note_destroy_msg" => "यो नोट नष्ट भयो। विन्डो बन्द गर्नु वा भाषा / मोड परिवर्तन गर्नु अघि यसलाई प्रतिलिपि गर्नुहोस्।",
        "create_pvt_note" => "आफ्नो निजी नोट सिर्जना गर्नुहोस्",
        "read_msg" => "यो नोट पढेर नष्ट भएको देखिन्छ।",
        "password_heading" => "पासवर्ड",
        "repassword_heading" => "पासवर्ड पुन: लेख्नुहोस",
        "password_msg_heading" => "निजी नोट पासवर्ड इन्क्रिप्टेड छ।",
        "enter_password" => "पासवर्ड प्रविष्ट गर्नुहोस् र नोट खोल्नुहोस्",
        "copyright_heading" => "प्रतिलिपि अधिकार",
        "all_right_reserved" => "सबै अधिकार सुरक्षित।",
        "admin_login_heading" => "व्यवस्थापक प्यानल लगइन",
        "username" => "प्रयोगकर्ता नाम",
        "admin_incorrectlogin_msg" => "या त गलत प्रयोगकर्ता नाम वा पासवर्ड। पुन: प्रयास गर्नुहोस्।",
        "empty_admin_error" => "व्यवस्थापक प्रयोगकर्ता नाम / पासवर्ड खाली हुनु हुँदैन।",
        "login" => "लग - इन",
        "notifications" => "सूचनाहरू र सर्टकटहरू",
        "view" => "हेर्नुहोस्",
        "total_private_note" => "कुल निजी नोटहरू",      
        "total_unreadprivate_note" => "कुल नपढिएका निजी नोटहरू" ,       
        "total_readprivate_note" => "कुल पढ्ने निजी नोटहरू",        
        "total_banned_ip" => "कुल प्रतिबन्धित प्रयोगकर्ता आईपी",
        "logout" => "बाहिर निस्कनु",
        "analysis" => "विश्लेषण",
        "lifetime_notes" => "आजीवन निजी नोटहरू",
        "thismonth_notes" => "यो महिना निजी नोटहरू",
        "today_notes" => "आज निजी नोटहरू",
        "wrong_password" => "पासवर्ड गलत छ। पुन: प्रयास गर्नुहोस्।",
        "form_empty" => "सबै क्षेत्र अनिवार्य छन्। पुन: प्रयास गर्नुहोस्।",
        "username_changed" => "व्यवस्थापक प्रयोगकर्ता नाम सफलतापूर्वक परिवर्तन भयो।",
        "change_admin_username" => "व्यवस्थापक प्रयोगकर्ता नाम परिवर्तन गर्नुहोस्",
        "old_admin_username" => "पुरानो व्यवस्थापक प्रयोगकर्ता नाम",
        "new_admin_username" => "नयाँ व्यवस्थापक प्रयोगकर्ता नाम",
        "change" => "परिवर्तन",
        "old_admin_password" => "पुरानो प्रशासक पासवर्ड",
        "new_admin_password" => "नयाँ प्रशासक पासवर्ड",
        "min_password" => "पासवर्डमा न्यूनतम ८ वर्ण, १ ठूला अक्षर, १ लोअरकेस क्यारेक्टर र १ नम्बर हुनुपर्छ (उदाहरण - Test1234)।",
        "change_admin_password" => "प्रशासक पासवर्ड परिवर्तन गर्नुहोस्",
        "password_changed" => "प्रशासक पासवर्ड सफलतापूर्वक परिवर्तन भयो।",
        "read" => "पढ्नुहोस्",
        "unread" => "नपढिएको",
        "delete_note" => "नोट मेटाउनुहोस्",
        "delete_note_with_ip" => "नोट मेटाउनुहोस् र प्रयोगकर्ता आईपी ब्लक गर्नुहोस्",
        "view_note" => "नोट हेर्नुहोस्",
        "yes" => "हो",
        "no" => "छैन",
        "serial_number" => "S. No.",
        "date" => "मिति",
        "note_id" => "नोट आईडी",
        "note_unique_id" => "अद्वितीय आईडी नोट गर्नुहोस्",
        "user_ip" => "प्रयोगकर्ता आईपी",
        "note" => "नोट",
        "password_protected" => "पासवर्ड सुरक्षित",
        "status" => "स्थिति",
        "action" => "कार्य",
        "note_deleted" => "नोट सफलतापूर्वक मेटिएको छ।",
        "note_deleted_with_ip" => "नोट सफलतापूर्वक मेटाइएको छ र प्रयोगकर्ता आईपी ब्लक गरिएको छ।",  
        "unblock_ip" => "प्रयोगकर्ता आईपी अनब्लक गर्नुहोस् र कालोसूचीबाट मेटाउनुहोस्।",
        "unblocked_ip" => "प्रयोगकर्ता आईपी अनब्लक र कालोसूचीबाट हटाइयो।",
        "blocked_msg" => "माफ गर्नुहोस्! यो वेबसाइट तपाईको लागि होइन।"
    );  
    return $userlang[$txt];
}

?>