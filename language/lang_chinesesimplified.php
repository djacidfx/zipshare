<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "chinesesimplified",
        "total_zip_files" => "压缩文件总数",      
        "total_active_zip_files" => "活动 Zip 文件总数" ,       
        "total_pending_zip_files" => "待处理的 Zip 文件总数",  
        "total_category" => "总类别",      
        "total_active_category" => "总活跃类别" ,       
        "total_active_blog" => "活跃博客总数" ,       
        "total_active_page" => "总活跃页面" ,       
        "total_disable_category" => "总停用类别",
        "total_disable_blog" => "无效博客总数",
        "total_disable_page" => "无效页面总数",
        "sitemap" => "网站地图",
        "quick_link" => "快速链接",
        "save" => "节省",
        "latest_blog" => "最新博客",
        "blogs" => "博客",
        "about_us" => "关于我们",
        "setting_saved" => "设置已成功更改。",
        "ad_setting" => "广告设置",
        "ad_javascript" => "粘贴 Google Javascript 广告代码 - 300 x 250 像素",
        "analytic_javascript" => "粘贴 Google Javascript 分析代码",
        "ad_javascript_on" => "打开广告",
        "analytic_javascript_on" => "打开谷歌分析",
        "analytic_setting" => "分析设置",
        "max_char" => "最多 200 个字符",
        "autoapprove_on" => "自动批准 zip 文件",
        "main_setting" => "主要设置",
        "show_default_limit" => "默认限制",
        "show_loadmore_limit" => "加载更多限制",
        "upload_zip" => "上传邮编",
        "unlock_zip" => "解锁拉链",
        "make" => "制作",
        "featured" => "精选",
        "featured_zip" => "Zip 是精选但现在不受欢迎。",
        "unfeatured" => "无特色",
        "unfeatured_zip" => "Zip 现在没有特色。",
        "popular" => "受欢迎的",
        "popular_zip" => "Zip 很流行，但现在没有特色。",
        "unpopular_zip" => "Zip 现在不流行了。",
        "unpopular" => "不受欢迎",
        "zip_deleted" => "Zip 已成功删除。",
        "delete_zip" => "删除邮编",
        "delete_zip_with_ip" => "删除 Zip 并阻止用户 IP",
        "zip_deleted_with_ip" => "Zip 已删除，用户现在已被阻止。",
        "view_all" => "查看全部",
        "sponsored" => "赞助",
        "zip_files" => "压缩文件",
        "upload_zip_file" => "上传匿名 Zip 文件",
        "zip_title" => "邮编标题",
        "edit" => "编辑",
        "delete" => "删除",
        "category" => "类别",
        "category_create" => "创建类别",
        "duplicate_category_name" => "类别名称必须是唯一的。再试一次。",
        "category_add" => "添加类别",
        "category_edit" => "编辑类别",
        "category_deactivated" => "类别和属于此类别的所有 zip 文件已被停用。",
        "category_activated" => "类别和属于此类别的所有 zip 文件已被激活。",
        "category_zip_deleted" => "类别和属于此类别的所有 zip 文件已被删除。",
        "category_id" => "类别 ID",
        "name" => "姓名",
        "activate" => "启用",
        "deactivate" => "停用",
        "approve" => "批准",
        "approve_zip" => "Zip 文件已获批准并生效。",
        "zip" => "压缩文件",
        "zip_title_unique" => "邮编标题必须是唯一的",
        "zipdescription" => "说明（可选）",
        "spam_msg" => "垃圾邮件是不允许的。",
        "zip_title_error" => "邮编标题必须是唯一的。使用其他名称重试。",
        "category_error" => "类别不应为空。再试一次。",
        "zip_review" => "Zip 文件已成功上传，正在等待审核。",
        "download" => "下载",
        "description" => "邮编说明",
        "share_fb" => "在脸书上分享",
        "share_tw" => "分享到Twitter",
        "share_ld" => "在领英上分享",
        "share_wp" => "分享到 Whatsapp",
        "choose_category" => "选择类别",
        "max_limit" => "最大限制 - ".ZIP_LIMIT."。知识库",
        "blog_max_limit" => "最大限制 - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 像素",
        "zip_limit" => "上传的 Zip 文件大于 ".ZIP_LIMIT." 。知识库。再试一次。",
        "img_limit" => "上传的图片文件大于 ".BLOG_IMAGE_LIMIT." 。知识库。再试一次。",
        "img_dimension" => "上传的图像文件应为 1600 x 800 像素。再试一次。",
        "should_be_zip" => "上传的文件不是 zip。请上传 zip 文件，然后重试。",
        "should_be_image" => "上传的文件不是图像。请上传 png、jpg 或 jpeg 图像，然后重试。",
        "load_more" => "装载更多",
        "search" => "搜索匿名 Zip 文件...",
        "no_search_found" => "我们没有发现您的搜索字词。尝试使用不同的关键字。",
        "blog_image" => "博客图片",
        "pages" => "页面",
        "singlepage" => "页",
        "blog" => "博客",
        "singleblog" => "博客",
        "create_page" => "创建页面",
        "edit_page" => "编辑页面",
        "active_page" => "活动页面",
        "page_id" => "页面 ID",
        "deactive_page" => "无效页面",
        "page_activated" => "页面已成功激活并上线。",
        "page_deactivated" => "页面现已成功停用和隐藏。",
        "page_deleted" => "页面已成功删除。",
        "create_blog" => "创建博客",
        "edit_blog" => "编辑博客",
        "click_old_image" => "点击图片放大",
        "active_blog" => "活跃的博客",
        "deactive_blog" => "无效的博客",
        "blog_id" => "博客 ID",
        "blog_name" => "博客标题",
        "blog_activated" => "博客已成功激活并上线。",
        "blog_deactivated" => "博客现已成功停用和隐藏。",
        "blog_deleted" => "博客已成功删除。",
        "blog_name_unique" => "（博客标题必须是唯一的，最多 100 个字符）",
        "blog_description" => "博客描述",
        "blog_short_description" => "博客简短描述（最多 200 个字符 - 它促进 SEO）",
        "page_name" => "页面名称",
        "page_description" => "页面说明",
        "page_name_unique" => "（页面名称必须唯一且最多 25 个字符）",
        "duplicate_page_name" => "页面名称必须是唯一的。再试一次。",
        "duplicate_blog_name" => "博客标题必须是唯一的。再试一次。",
        "page_published" => "页面已创建并发布。您可以在活动页面中找到。",
        "page_edited" => "页面编辑成功。",
        "blog_published" => "博客已创建并发布。您可以在活动博客中找到。",
        "blog_edited" => "博客已成功编辑。",
        "empty_page_field" => "页面字段不能为空。再试一次。",
        "zip_id" => "邮编编号",
        "active" => "积极的",
        "pending" => "待办的",
        "copyright_name" => "版权名称",
        "password" => "密码",
        "self_destruct_text" => "一旦打开链接，私人笔记将自毁。",
        "note_heading" => "匿名私人笔记",
        "note_heading_password" => "带密码的匿名私人笔记",
        "textarea_placeholder" => "你的私人笔记是什么……？",
        "create_note_btn" => "创建私人笔记",
        "create_note_with_password_btn" => "使用密码创建私人笔记",
        "spam_msg" => "垃圾邮件是不允许的。",
        "empty_note_error" => "私人笔记不应为空。",
        "empty_note_error_password" => "私人备注、密码和重新输入密码不应为空。",
        "empty_note_password_error" => "私人备注和密码不应为空。",
        "note_password_error" => "密码错误。再试一次。",
        "password_error" => "密码和重新输入密码不匹配。",
        "note_heading_link" => "匿名私人笔记链接",
        "note_destroy_msg" => "这张纸条被销毁了。在关闭窗口或更改语言/模式之前复制它。",
        "create_pvt_note" => "创建您的私人笔记",
        "read_msg" => "似乎笔记已被读取并销毁。",
        "password_heading" => "密码",
        "repassword_heading" => "重新输入密码",
        "password_msg_heading" => "私人笔记是密码加密的。",
        "enter_password" => "输入密码并打开备注",
        "copyright_heading" => "版权",
        "all_right_reserved" => "版权所有。",
        "admin_login_heading" => "管理面板登录",
        "username" => "用户名",
        "admin_incorrectlogin_msg" => "用户名或密码错误。再试一次。",
        "empty_admin_error" => "管理员用户名/密码不应为空。",
        "login" => "登录",
        "notifications" => "通知和快捷方式",
        "view" => "看法",
        "total_private_note" => "私人笔记总数",      
        "total_unreadprivate_note" => "未读私人笔记总数" ,       
        "total_readprivate_note" => "总阅读私人笔记",        
        "total_banned_ip" => "总禁止用户 IP",
        "logout" => "登出",
        "analysis" => "分析",
        "lifetime_notes" => "终身私人笔记",
        "thismonth_notes" => "本月私人笔记",
        "today_notes" => "今日私人笔记",
        "wrong_password" => "密码错误。再试一次。",
        "form_empty" => "所有字段均为必填项。再试一次。",
        "username_changed" => "管理员用户名已成功更改。",
        "change_admin_username" => "更改管理员用户名",
        "old_admin_username" => "旧管理员用户名",
        "new_admin_username" => "新管理员用户名",
        "change" => "改变",
        "old_admin_password" => "旧管理员密码",
        "new_admin_password" => "新的管理员密码",
        "min_password" => "密码必须包含至少 8 个字符、1 个大写字符、1 个小写字符和 1 个数字（示例 - Test1234）。",
        "change_admin_password" => "更改管理员密码",
        "password_changed" => "管理员密码更改成功。",
        "read" => "读",
        "unread" => "未读",
        "delete_note" => "删除笔记",
        "delete_note_with_ip" => "删除注释并阻止用户 IP",
        "view_note" => "查看注释",
        "yes" => "是的",
        "no" => "不",
        "serial_number" => "编号",
        "date" => "日期",
        "note_id" => "笔记编号",
        "note_unique_id" => "备注 唯一 ID",
        "user_ip" => "用户IP",
        "note" => "笔记",
        "password_protected" => "密码保护",
        "status" => "地位",
        "action" => "行动",
        "note_deleted" => "笔记已成功删除。",
        "note_deleted_with_ip" => "笔记已成功删除，用户IP已被屏蔽。",  
        "unblock_ip" => "取消阻止用户 IP 并从黑名单中删除。",
        "unblocked_ip" => "用户 IP 解锁并从黑名单中删除。",
        "blocked_msg" => "对不起 ！这个网站不适合你。"
    );  
    return $userlang[$txt];
}

?>