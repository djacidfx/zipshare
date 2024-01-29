<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "korean",
        "total_zip_files" => "총 Zip 파일",      
        "total_active_zip_files" => "총 활성 Zip 파일" ,       
        "total_pending_zip_files" => "보류 중인 총 Zip 파일",  
        "total_category" => "총 카테고리",      
        "total_active_category" => "총 활성 카테고리" ,       
        "total_active_blog" => "총 활성 블로그" ,       
        "total_active_page" => "총 활성 페이지" ,       
        "total_disable_category" => "총 비활성화 범주",
        "total_disable_blog" => "총 비활성 블로그",
        "total_disable_page" => "총 비활성 페이지",
        "sitemap" => "사이트맵",
        "quick_link" => "빠른 링크",
        "save" => "구하다",
        "latest_blog" => "최신 블로그",
        "blogs" => "블로그",
        "about_us" => "회사 소개",
        "setting_saved" => "설정이 성공적으로 변경되었습니다.",
        "ad_setting" => "광고 설정",
        "ad_javascript" => "Google 자바스크립트 광고 코드 붙여넣기 - 300 x 250 픽셀",
        "analytic_javascript" => "Google 자바스크립트 분석 코드 붙여넣기",
        "ad_javascript_on" => "광고 켜기",
        "analytic_javascript_on" => "구글 애널리틱스 켜기",
        "analytic_setting" => "분석 설정",
        "max_char" => "최대 200자",
        "autoapprove_on" => "자동 승인 zip 파일",
        "main_setting" => "주요 설정",
        "show_default_limit" => "기본 제한",
        "show_loadmore_limit" => "추가 로드 제한",
        "upload_zip" => "우편번호 업로드",
        "unlock_zip" => "지퍼 잠금 해제",
        "make" => "만들다",
        "featured" => "추천",
        "featured_zip" => "Zip은 추천되지만 지금은 인기가 없습니다.",
        "unfeatured" => "기능 없음",
        "unfeatured_zip" => "Zip은 이제 Unfeatured입니다.",
        "popular" => "인기 있는",
        "popular_zip" => "Zip은 인기가 있지만 지금은 추천되지 않습니다.",
        "unpopular_zip" => "Zip은 현재 인기가 없습니다.",
        "unpopular" => "인기 없는",
        "zip_deleted" => "Zip이 성공적으로 삭제되었습니다.",
        "delete_zip" => "우편번호 삭제",
        "delete_zip_with_ip" => "우편번호 삭제 및 사용자 IP 차단",
        "zip_deleted_with_ip" => "Zip이 삭제되고 사용자가 차단되었습니다.",
        "view_all" => "모두보기",
        "sponsored" => "후원",
        "zip_files" => "Zip 파일",
        "upload_zip_file" => "익명의 Zip 파일 업로드",
        "zip_title" => "우편 제목",
        "edit" => "편집하다",
        "delete" => "삭제",
        "category" => "범주",
        "category_create" => "카테고리 생성",
        "duplicate_category_name" => "범주 이름은 고유해야 합니다. 다시 시도하십시오.",
        "category_add" => "카테고리 추가",
        "category_edit" => "카테고리 편집",
        "category_deactivated" => "범주 및 이 범주에 속한 모든 zip 파일이 비활성화되었습니다.",
        "category_activated" => "카테고리 및 이 카테고리에 속한 모든 zip 파일이 활성화되었습니다.",
        "category_zip_deleted" => "카테고리 및 이 카테고리에 속한 모든 zip 파일이 삭제되었습니다.",
        "category_id" => "카테고리 ID",
        "name" => "이름",
        "activate" => "활성화",
        "deactivate" => "비활성화",
        "approve" => "승인하다",
        "approve_zip" => "Zip 파일이 승인되어 게시되었습니다.",
        "zip" => "압축 파일",
        "zip_title_unique" => "우편번호는 고유해야 합니다.",
        "zipdescription" => "설명 (선택 사항 )",
        "spam_msg" => "스패머는 허용되지 않습니다.",
        "zip_title_error" => "우편번호는 고유해야 합니다. 다른 이름으로 다시 시도하십시오.",
        "category_error" => "카테고리는 비워둘 수 없습니다. 다시 시도하십시오.",
        "zip_review" => "Zip 파일이 성공적으로 업로드되었으며 검토 대기 중입니다.",
        "download" => "다운로드",
        "description" => "우편번호 설명",
        "share_fb" => "페이스북에서 공유",
        "share_tw" => "트위터에서 공유",
        "share_ld" => "링크드인에서 공유",
        "share_wp" => "Whatsapp에서 공유",
        "choose_category" => "카테고리 선택",
        "max_limit" => "최대 한도 - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "최대 한도 - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800픽셀",
        "zip_limit" => "업로드한 Zip 파일이 ".ZIP_LIMIT." 보다 큽니다. KB 다시 시도하십시오.",
        "img_limit" => "업로드한 이미지 파일이 ".BLOG_IMAGE_LIMIT." 보다 큽니다. KB 다시 시도하십시오.",
        "img_dimension" => "업로드된 이미지 파일은 정확히 1600 x 800픽셀이어야 합니다. 다시 시도하십시오.",
        "should_be_zip" => "업로드된 파일은 zip이 아닙니다. zip 파일을 업로드하고 다시 시도하십시오.",
        "should_be_image" => "업로드된 파일은 이미지가 아닙니다. png, jpg 또는 jpeg 이미지를 업로드하고 다시 시도하십시오.",
        "load_more" => "더 찾아보기",
        "search" => "익명 Zip 파일 검색...",
        "no_search_found" => "귀하의 검색어에 대해 아무것도 찾지 못했습니다. 다른 키워드로 시도하십시오.",
        "blog_image" => "블로그 이미지",
        "pages" => "페이지",
        "singlepage" => "페이지",
        "blog" => "블로그",
        "singleblog" => "블로그",
        "create_page" => "페이지 만들기",
        "edit_page" => "페이지 편집",
        "active_page" => "활성 페이지",
        "page_id" => "페이지 ID",
        "deactive_page" => "비활성 페이지",
        "page_activated" => "페이지가 성공적으로 활성화되었으며 현재 사용 중입니다.",
        "page_deactivated" => "페이지가 성공적으로 비활성화되었으며 현재 숨겨져 있습니다.",
        "page_deleted" => "페이지가 성공적으로 삭제되었습니다.",
        "create_blog" => "블로그 만들기",
        "edit_blog" => "블로그 편집",
        "click_old_image" => "확대하려면 이미지를 클릭하십시오",
        "active_blog" => "활성 블로그",
        "deactive_blog" => "비활성화된 블로그",
        "blog_id" => "블로그 아이디",
        "blog_name" => "블로그 제목",
        "blog_activated" => "블로그가 성공적으로 활성화되어 현재 사용 중입니다.",
        "blog_deactivated" => "블로그가 성공적으로 비활성화되었으며 현재 숨겨져 있습니다.",
        "blog_deleted" => "블로그가 성공적으로 삭제되었습니다.",
        "blog_name_unique" => "( 블로그 제목은 고유해야 하며 최대 100자여야 합니다.)",
        "blog_description" => "블로그 설명",
        "blog_short_description" => "블로그 짧은 설명(최대 200자 - SEO 향상)",
        "page_name" => "페이지 이름",
        "page_description" => "페이지 설명",
        "page_name_unique" => "( 페이지 이름은 고유해야 하며 최대 25자여야 합니다. )",
        "duplicate_page_name" => "페이지 이름은 고유해야 합니다. 다시 시도하십시오.",
        "duplicate_blog_name" => "블로그 제목은 고유해야 합니다. 다시 시도하십시오.",
        "page_published" => "페이지가 생성되고 게시됩니다. 활성 페이지에서 찾을 수 있습니다.",
        "page_edited" => "페이지가 성공적으로 편집되었습니다.",
        "blog_published" => "블로그가 만들어지고 게시됩니다. 활성 블로그에서 찾을 수 있습니다.",
        "blog_edited" => "블로그가 성공적으로 수정되었습니다.",
        "empty_page_field" => "페이지 필드는 비워둘 수 없습니다. 다시 시도하십시오.",
        "zip_id" => "우편번호",
        "active" => "활동적인",
        "pending" => "보류 중",
        "copyright_name" => "저작권 이름",
        "password" => "비밀번호",
        "self_destruct_text" => "비공개 메모는 링크가 열리면 자동으로 파기됩니다.",
        "note_heading" => "익명의 개인 메모",
        "note_heading_password" => "비밀번호가 있는 익명의 개인 메모",
        "textarea_placeholder" => "당신의 개인 메모는 무엇입니까 ... ?",
        "create_note_btn" => "비공개 메모 만들기",
        "create_note_with_password_btn" => "비밀번호로 개인 메모 작성",
        "spam_msg" => "스패머는 허용되지 않습니다.",
        "empty_note_error" => "비공개 메모는 비워둘 수 없습니다.",
        "empty_note_error_password" => "개인 메모, 비밀번호 및 비밀번호 재입력은 비워둘 수 없습니다.",
        "empty_note_password_error" => "개인 메모 및 비밀번호는 비워둘 수 없습니다.",
        "note_password_error" => "비밀번호가 잘못되었습니다. 다시 시도하십시오.",
        "password_error" => "비밀번호와 비밀번호 재입력이 일치하지 않습니다.",
        "note_heading_link" => "익명 개인 메모 링크",
        "note_destroy_msg" => "이 메모는 폐기되었습니다. 창을 닫거나 언어/모드를 변경하기 전에 복사하십시오.",
        "create_pvt_note" => "개인 메모 만들기",
        "read_msg" => "메모를 읽고 파괴한 것 같습니다.",
        "password_heading" => "비밀번호",
        "repassword_heading" => "비밀번호 재입력",
        "password_msg_heading" => "비공개 메모는 암호로 암호화되어 있습니다.",
        "enter_password" => "비밀번호 입력 및 메모 열기",
        "copyright_heading" => "저작권",
        "all_right_reserved" => "판권 소유.",
        "admin_login_heading" => "관리자 패널 로그인",
        "username" => "사용자 이름",
        "admin_incorrectlogin_msg" => "잘못된 사용자 이름 또는 비밀번호입니다. 다시 시도하십시오.",
        "empty_admin_error" => "관리자 사용자 이름/비밀번호는 비워둘 수 없습니다.",
        "login" => "로그인",
        "notifications" => "알림 및 바로가기",
        "view" => "보다",
        "total_banned_ip" => "총 차단된 사용자 IP",
        "logout" => "로그 아웃",
        "analysis" => "분석",
        "wrong_password" => "비밀번호가 잘못되었습니다. 다시 시도하십시오.",
        "form_empty" => "모든 필드는 필수입니다. 다시 시도하십시오.",
        "username_changed" => "관리자 사용자 이름이 성공적으로 변경되었습니다.",
        "change_admin_username" => "관리자 사용자 이름 변경",
        "old_admin_username" => "이전 관리자 사용자 이름",
        "new_admin_username" => "새 관리자 사용자 이름",
        "change" => "변화",
        "old_admin_password" => "이전 관리자 비밀번호",
        "new_admin_password" => "새 관리자 비밀번호",
        "min_password" => "비밀번호는 최소 8자, 대문자 1자, 소문자 1자, 숫자 1자를 포함해야 합니다(예제 - Test1234).",
        "change_admin_password" => "관리자 비밀번호 변경",
        "password_changed" => "관리자 비밀번호가 성공적으로 변경되었습니다.",
        "yes" => "예",
        "no" => "아니",
        "serial_number" => "S.No.",
        "date" => "날짜",
        "user_ip" => "사용자 IP",
        "status" => "상태",
        "action" => "동작",
        "unblock_ip" => "사용자 IP 차단을 해제하고 블랙리스트에서 삭제합니다.",
        "unblocked_ip" => "사용자 IP가 차단 해제되고 블랙리스트에서 삭제되었습니다.",
        "blocked_msg" => "죄송합니다 ! 이 웹사이트는 당신을 위한 것이 아닙니다."   
    );  
    return $userlang[$txt];
}

?>