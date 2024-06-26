<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "thai",
        "total_zip_files" => "ไฟล์ซิปทั้งหมด",      
        "total_active_zip_files" => "ไฟล์ Zip ที่ใช้งานอยู่ทั้งหมด" ,       
        "total_pending_zip_files" => "ไฟล์ Zip ที่รอดำเนินการทั้งหมด",  
        "total_category" => "หมวดหมู่ทั้งหมด",      
        "total_active_category" => "หมวดหมู่แอคทีฟทั้งหมด" ,       
        "total_active_blog" => "บล็อกที่ใช้งานอยู่ทั้งหมด" ,       
        "total_active_page" => "เพจที่ใช้งานทั้งหมด" ,       
        "total_disable_category" => "หมวดหมู่ที่ปิดใช้งานทั้งหมด",
        "total_disable_blog" => "บล็อกที่ปิดใช้งานทั้งหมด",
        "total_disable_page" => "เพจที่ปิดใช้งานทั้งหมด",
        "sitemap" => "แผนผังเว็บไซต์",
        "quick_link" => "ลิงค์ด่วน",
        "save" => "บันทึก",
        "latest_blog" => "บล็อกล่าสุด",
        "blogs" => "บล็อก",
        "about_us" => "เกี่ยวกับเรา",
        "setting_saved" => "เปลี่ยนการตั้งค่าเรียบร้อยแล้ว",
        "ad_setting" => "การตั้งค่าโฆษณา",
        "ad_javascript" => "วางโค้ดโฆษณา Google Javascript - 300 x 250 Pixel",
        "analytic_javascript" => "วาง Google Javascript Analytics Code",
        "ad_javascript_on" => "เปิดโฆษณา",
        "analytic_javascript_on" => "เปิด Google Analytics",
        "analytic_setting" => "การตั้งค่าการวิเคราะห์",
        "max_char" => "สูงสุด 200 ตัวอักษร",
        "autoapprove_on" => "อนุมัติไฟล์ zip อัตโนมัติ",
        "main_setting" => "การตั้งค่าหลัก",
        "show_default_limit" => "ขีดจำกัดเริ่มต้น",
        "show_loadmore_limit" => "โหลดเพิ่มเติม Limit",
        "upload_zip" => "อัพโหลด Zip",
        "unlock_zip" => "ปลดล็อค Zip",
        "make" => "ทำ",
        "featured" => "จุดเด่น",
        "featured_zip" => "Zip เป็นจุดเด่น แต่ไม่เป็นที่นิยมในขณะนี้",
        "unfeatured" => "ไม่มีจุดเด่น",
        "unfeatured_zip" => "Zip is ไม่มีจุดเด่น ในขณะนี้",
        "popular" => "เป็นที่นิยม",
        "popular_zip" => "Zip เป็นที่นิยมแต่ตอนนี้ไม่มีฟีเจอร์",
        "unpopular_zip" => "Zip ไม่เป็นที่นิยมในขณะนี้",
        "unpopular" => "ไม่เป็นที่นิยม",
        "zip_deleted" => "ลบ Zip สำเร็จแล้ว",
        "delete_zip" => "ลบ Zip",
        "delete_zip_with_ip" => "ลบ zip & บล็อก IP ผู้ใช้",
        "zip_deleted_with_ip" => "Zip ถูกลบและผู้ใช้ถูกบล็อกในขณะนี้",
        "view_all" => "ดูทั้งหมด",
        "sponsored" => "สปอนเซอร์",
        "zip_files" => "ไฟล์ซิป",
        "upload_zip_file" => "อัปโหลดไฟล์ Zip ที่ไม่ระบุชื่อ",
        "zip_title" => "Zip ชื่อ",
        "edit" => "แก้ไข",
        "delete" => "ลบ",
        "category" => "หมวดหมู่",
        "category_create" => "สร้างหมวดหมู่",
        "duplicate_category_name" => "ชื่อหมวดหมู่ต้องไม่ซ้ำกัน ลองอีกครั้ง.",
        "category_add" => "เพิ่มหมวดหมู่",
        "category_edit" => "แก้ไขหมวดหมู่",
        "category_deactivated" => "หมวดหมู่ & ไฟล์ zip ทั้งหมดที่อยู่ในหมวดหมู่นี้ถูกปิดใช้งาน",
        "category_activated" => "เปิดใช้งานหมวดหมู่ & ไฟล์ zip ทั้งหมดที่อยู่ในหมวดหมู่นี้แล้ว",
        "category_zip_deleted" => "หมวดหมู่ & ไฟล์ zip ทั้งหมดที่อยู่ในหมวดหมู่นี้ถูกลบแล้ว",
        "category_id" => "รหัสหมวดหมู่",
        "name" => "ชื่อ",
        "activate" => "เปิดใช้งาน",
        "deactivate" => "ปิดการใช้งาน",
        "approve" => "อนุมัติ",
        "approve_zip" => "ไฟล์ Zip ได้รับการอนุมัติและใช้งานได้แล้ว",
        "zip" => "ไฟล์ซิป",
        "zip_title_unique" => "Zip Title ต้องไม่ซ้ำกัน",
        "zipdescription" => "คำอธิบาย (ไม่บังคับ)",
        "spam_msg" => "ไม่อนุญาตให้ส่งสแปม",
        "zip_title_error" => "ชื่อ Zip ต้องไม่ซ้ำกัน ลองอีกครั้งโดยใช้ชื่ออื่น",
        "category_error" => "หมวดหมู่ไม่ควรว่างเปล่า ลองอีกครั้ง.",
        "zip_review" => "อัปโหลดไฟล์ Zip สำเร็จแล้วและอยู่ในระหว่างการตรวจสอบ",
        "download" => "ดาวน์โหลด",
        "description" => "คำอธิบายซิป",
        "share_fb" => "แบ่งปันบน Facebook",
        "share_tw" => "แบ่งปันบน Twitter",
        "share_ld" => "แบ่งปันบน Linkedin",
        "share_wp" => "แบ่งปันบน Whatsapp",
        "choose_category" => "เลือกหมวดหมู่",
        "max_limit" => "ขีดจำกัดสูงสุด - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "ขีดจำกัดสูงสุด - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 พิกเซล",
        "zip_limit" => "ไฟล์ Zip ที่อัปโหลดมีขนาดใหญ่กว่า ".ZIP_LIMIT." เคบี. ลองอีกครั้ง.",
        "img_limit" => "ไฟล์ภาพที่อัปโหลดมีขนาดใหญ่กว่า ".BLOG_IMAGE_LIMIT." เคบี. ลองอีกครั้ง.",
        "img_dimension" => "ไฟล์ภาพที่อัปโหลดควรมีขนาด 1600 x 800 พิกเซลพอดี ลองอีกครั้ง.",
        "should_be_zip" => "ไฟล์ที่อัพโหลดไม่ใช่ zip โปรดอัปโหลดไฟล์ zip แล้วลองอีกครั้ง",
        "should_be_image" => "ไฟล์ที่อัปโหลดไม่ใช่รูปภาพ โปรดอัปโหลดรูปภาพ png, jpg หรือ jpeg แล้วลองอีกครั้ง",
        "load_more" => "โหลดเพิ่ม",
        "search" => "ค้นหาไฟล์ Zip ที่ไม่ระบุชื่อ...",
        "no_search_found" => "เราไม่พบสิ่งใดในคำค้นหาของคุณ ลองใช้คีย์เวิร์ดอื่น",
        "blog_image" => "รูปภาพบล็อก",
        "pages" => "หน้า",
        "singlepage" => "หน้าหนังสือ",
        "blog" => "บล็อก",
        "singleblog" => "บล็อก",
        "create_page" => "สร้างเพจ",
        "edit_page" => "แก้ไขหน้า",
        "active_page" => "เพจที่ใช้งาน",
        "page_id" => "รหัสเพจ",
        "deactive_page" => "หน้าปิดการใช้งาน",
        "page_activated" => "เปิดใช้งานเพจเรียบร้อยแล้วและใช้งานได้แล้ว",
        "page_deactivated" => "ปิดการใช้งานและซ่อนเพจเรียบร้อยแล้ว",
        "page_deleted" => "ลบเพจเรียบร้อยแล้ว",
        "create_blog" => "สร้างบล็อก",
        "edit_blog" => "แก้ไขบล็อก",
        "click_old_image" => "คลิกที่ภาพเพื่อซูม",
        "active_blog" => "บล็อกที่ใช้งานอยู่",
        "deactive_blog" => "บล็อกปิดการใช้งาน",
        "blog_id" => "รหัสบล็อก",
        "blog_name" => "ชื่อบล็อก",
        "blog_activated" => "บล็อกเปิดใช้งานและใช้งานได้สำเร็จแล้วในขณะนี้",
        "blog_deactivated" => "บล็อกถูกปิดใช้งานและซ่อนเรียบร้อยแล้ว",
        "blog_deleted" => "บล็อกถูกลบเรียบร้อยแล้ว",
        "blog_name_unique" => "(ชื่อบล็อกต้องไม่ซ้ำกัน & สูงสุด 100 ตัวอักษร )",
        "blog_description" => "คำอธิบายบล็อก",
        "blog_short_description" => "คำอธิบายสั้น ๆ ของบล็อก (อักขระสูงสุด 200 ตัว - ช่วยเพิ่ม SEO)",
        "page_name" => "ชื่อเพจ",
        "page_description" => "คำอธิบายหน้า",
        "page_name_unique" => "( ชื่อเพจต้องไม่ซ้ำกัน & ไม่เกิน 25 ตัวอักษร )",
        "duplicate_page_name" => "ชื่อเพจต้องไม่ซ้ำกัน ลองอีกครั้ง.",
        "duplicate_blog_name" => "ชื่อบล็อกต้องไม่ซ้ำกัน ลองอีกครั้ง.",
        "page_published" => "เพจถูกสร้างและเผยแพร่ คุณสามารถค้นหาได้ใน Active Pages",
        "page_edited" => "แก้ไขหน้าสำเร็จแล้ว",
        "blog_published" => "บล็อกถูกสร้างขึ้นและเผยแพร่ คุณสามารถหาได้ใน Active Blogs",
        "blog_edited" => "บล็อกได้รับการแก้ไขเรียบร้อยแล้ว",
        "empty_page_field" => "ฟิลด์เพจไม่สามารถเว้นว่างได้ ลองอีกครั้ง.",
        "zip_id" => "รหัสไปรษณีย์",
        "active" => "คล่องแคล่ว",
        "pending" => "รอดำเนินการ",
        "copyright_name" => "ชื่อลิขสิทธิ์",
        "password" => "รหัสผ่าน",
        "self_destruct_text" => "บันทึกส่วนตัวจะทำลายตัวเองเมื่อเปิดลิงก์",
        "note_heading" => "บันทึกส่วนตัวนิรนาม",
        "note_heading_password" => "บันทึกส่วนตัวที่ไม่ระบุชื่อพร้อมรหัสผ่าน",
        "textarea_placeholder" => "บันทึกส่วนตัวของคุณคืออะไร ... ?",
        "create_note_btn" => "สร้างบันทึกส่วนตัว",
        "create_note_with_password_btn" => "สร้างบันทึกส่วนตัวด้วยรหัสผ่าน",
        "spam_msg" => "ไม่อนุญาตให้ส่งสแปม",
        "empty_note_error" => "บันทึกส่วนตัวไม่ควรว่างเปล่า",
        "empty_note_error_password" => "บันทึกส่วนตัว รหัสผ่าน & พิมพ์รหัสผ่านซ้ำไม่ควรว่างเปล่า",
        "empty_note_password_error" => "บันทึกส่วนตัวและรหัสผ่านไม่ควรเว้นว่างไว้",
        "note_password_error" => "รหัสผ่านไม่ถูกต้อง ลองอีกครั้ง.",
        "password_error" => "รหัสผ่านและรหัสผ่านพิมพ์ซ้ำไม่ตรงกัน",
        "note_heading_link" => "ลิงก์บันทึกย่อส่วนตัวที่ไม่ระบุชื่อ",
        "note_destroy_msg" => "บันทึกนี้ถูกทำลาย คัดลอกก่อนปิดหน้าต่างหรือเปลี่ยนภาษา / โหมด",
        "create_pvt_note" => "สร้างบันทึกส่วนตัวของคุณ",
        "read_msg" => "ดูเหมือนว่าบันทึกถูกอ่านและทำลาย",
        "password_heading" => "รหัสผ่าน",
        "repassword_heading" => "พิมพ์รหัสผ่านอีกครั้ง",
        "password_msg_heading" => "Private Note คือรหัสผ่านที่เข้ารหัส",
        "enter_password" => "ป้อนรหัสผ่านและเปิดหมายเหตุ",
        "copyright_heading" => "ลิขสิทธิ์",
        "all_right_reserved" => "สงวนลิขสิทธิ์.",
        "admin_login_heading" => "เข้าสู่ระบบแผงผู้ดูแลระบบ",
        "username" => "ชื่อผู้ใช้",
        "admin_incorrectlogin_msg" => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง ลองอีกครั้ง.",
        "empty_admin_error" => "ผู้ดูแลระบบ ชื่อผู้ใช้ / รหัสผ่านไม่ควรว่างเปล่า",
        "login" => "เข้าสู่ระบบ",
        "notifications" => "การแจ้งเตือนและทางลัด",
        "view" => "ดู",
        "total_private_note" => "บันทึกส่วนตัวทั้งหมด",      
        "total_unreadprivate_note" => "บันทึกส่วนตัวที่ยังไม่ได้อ่านทั้งหมด" ,       
        "total_readprivate_note" => "อ่านบันทึกส่วนตัวทั้งหมด",        
        "total_banned_ip" => "IP ผู้ใช้ที่ถูกแบนทั้งหมด",
        "logout" => "ออกจากระบบ",
        "analysis" => "การวิเคราะห์",
        "lifetime_notes" => "บันทึกส่วนตัวตลอดชีพ",
        "thismonth_notes" => "บันทึกส่วนตัวของเดือนนี้",
        "today_notes" => "บันทึกส่วนตัววันนี้",
        "wrong_password" => "รหัสผ่านไม่ถูกต้อง ลองอีกครั้ง.",
        "form_empty" => "ทุกสาขามีผลบังคับใช้. ลองอีกครั้ง.",
        "username_changed" => "ชื่อผู้ใช้ผู้ดูแลระบบเปลี่ยนเรียบร้อยแล้ว",
        "change_admin_username" => "เปลี่ยนชื่อผู้ใช้ผู้ดูแลระบบ",
        "old_admin_username" => "ชื่อผู้ใช้ผู้ดูแลระบบเก่า",
        "new_admin_username" => "ผู้ดูแลระบบใหม่ ชื่อผู้ใช้",
        "change" => "เปลี่ยน",
        "old_admin_password" => "รหัสผ่านผู้ดูแลระบบเก่า",
        "new_admin_password" => "รหัสผ่านผู้ดูแลระบบใหม่",
        "min_password" => "รหัสผ่านต้องมีอักขระอย่างน้อย 8 ตัว ตัวพิมพ์ใหญ่ 1 ตัว ตัวพิมพ์เล็ก 1 ตัว และตัวเลข 1 ตัว (ตัวอย่าง - Test1234)",
        "change_admin_password" => "เปลี่ยนรหัสผ่านผู้ดูแลระบบ",
        "password_changed" => "เปลี่ยนรหัสผ่านผู้ดูแลระบบเรียบร้อยแล้ว",
        "read" => "อ่าน",
        "unread" => "ยังไม่ได้อ่าน",
        "delete_note" => "ลบหมายเหตุ",
        "delete_note_with_ip" => "ลบบันทึก & บล็อกผู้ใช้ IP",
        "view_note" => "ดูหมายเหตุ",
        "yes" => "ใช่",
        "no" => "ไม่",
        "serial_number" => "ส.น.",
        "date" => "วันที่",
        "note_id" => "หมายเหตุ ID",
        "note_unique_id" => "หมายเหตุ ID ที่ไม่ซ้ำ",
        "user_ip" => "IP ผู้ใช้",
        "note" => "บันทึก",
        "password_protected" => "ป้องกันด้วยพาสเวิร์ด",
        "status" => "สถานะ",
        "action" => "หนังบู๊",
        "note_deleted" => "ลบโน้ตเรียบร้อยแล้ว",
        "note_deleted_with_ip" => "บันทึกถูกลบเรียบร้อยแล้ว & User Ip ถูกบล็อก",  
        "unblock_ip" => "เลิกบล็อก IP ผู้ใช้ & ลบออกจากบัญชีดำ",
        "unblocked_ip" => "IP ผู้ใช้ถูกปลดบล็อกและถูกลบออกจากบัญชีดำ",
        "blocked_msg" => "เสียใจ ! เว็บไซต์นี้ไม่เหมาะสำหรับคุณ"
    );  
    return $userlang[$txt];
}

?>