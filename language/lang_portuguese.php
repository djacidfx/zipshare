<?php
function userlang($txt){
    static $userlang = array(
        "xlan" => "portuguese",
        "total_zip_files" => "Total de arquivos zip",      
        "total_active_zip_files" => "Total de arquivos zip ativos" ,       
        "total_pending_zip_files" => "Total de arquivos zip pendentes",  
        "total_category" => "Categoria Total",      
        "total_active_category" => "Categoria Ativa Total" ,       
        "total_active_blog" => "Total de blogs ativos" ,       
        "total_active_page" => "Total de páginas ativas" ,       
        "total_disable_category" => "Categoria Total Desativada",
        "total_disable_blog" => "Total de blogs desativados",
        "total_disable_page" => "Total de páginas desativadas",
        "sitemap" => "Mapa do site",
        "quick_link" => "Links Rápidos",
        "save" => "Salvar",
        "latest_blog" => "Últimos blogs",
        "blogs" => "Blogues",
        "about_us" => "Sobre nós",
        "setting_saved" => "A configuração foi alterada com sucesso.",
        "ad_setting" => "Configurações de anúncio",
        "ad_javascript" => "Colar o código de anúncio Javascript do Google - 300 x 250 pixels",
        "analytic_javascript" => "Colar o código analítico do Google JavaScript",
        "ad_javascript_on" => "Ativar anúncio",
        "analytic_javascript_on" => "Ative o Google Analytics",
        "analytic_setting" => "Configuração analítica",
        "max_char" => "Máximo de 200 caracteres",
        "autoapprove_on" => "Arquivo zip de aprovação automática",
        "main_setting" => "Configuração principal",
        "show_default_limit" => "Limite padrão",
        "show_loadmore_limit" => "Carregar mais limite",
        "upload_zip" => "Envio zip",
        "unlock_zip" => "Desbloquear zip",
        "make" => "Faço",
        "featured" => "Destaque",
        "featured_zip" => "Zip é destaque, mas impopular agora.",
        "unfeatured" => "Sem destaque",
        "unfeatured_zip" => "Zip não está no centro das atenções agora.",
        "popular" => "Popular",
        "popular_zip" => "Zip é popular, mas sem destaque agora.",
        "unpopular_zip" => "Zip é impopular agora.",
        "unpopular" => "Impopular",
        "zip_deleted" => "O zip foi excluído com sucesso.",
        "delete_zip" => "Excluir zip",
        "delete_zip_with_ip" => "Excluir Zip e Bloquear IP do Usuário",
        "zip_deleted_with_ip" => "O zip é excluído e o usuário está bloqueado agora.",
        "view_all" => "Ver tudo",
        "sponsored" => "Patrocinados",
        "zip_files" => "Arquivos Zip",
        "upload_zip_file" => "Carregar arquivo zip anônimo",
        "zip_title" => "Título zip",
        "edit" => "Editar",
        "delete" => "Excluir",
        "category" => "Categoria",
        "category_create" => "Criar categoria",
        "duplicate_category_name" => "O nome da categoria deve ser exclusivo. Tente novamente.",
        "category_add" => "Adicionar categoria",
        "category_edit" => "Editar categoria",
        "category_deactivated" => "Categoria & Todos os arquivos zip pertencentes a esta categoria foram desativados.",
        "category_activated" => "Categoria e todos os arquivos zip pertencentes a esta categoria foram ativados.",
        "category_zip_deleted" => "Categoria e todos os arquivos zip pertencentes a esta categoria foram excluídos.",
        "category_id" => "Categoria ID",
        "name" => "Nome",
        "activate" => "Ativar",
        "deactivate" => "Desativar",
        "approve" => "Aprovar",
        "approve_zip" => "O arquivo zip foi aprovado e está ativo.",
        "zip" => "Arquivo zip",
        "zip_title_unique" => "O título do zip deve ser único",
        "zipdescription" => "Descrição (opcional )",
        "spam_msg" => "Spammer não é permitido.",
        "zip_title_error" => "O título do zip deve ser exclusivo. Tente novamente com outro nome.",
        "category_error" => "A categoria não deve estar vazia. Tente novamente.",
        "zip_review" => "O arquivo zip foi carregado com sucesso e está em análise pendente.",
        "download" => "Download",
        "description" => "Descrição zip",
        "share_fb" => "Compartilhar no Facebook",
        "share_tw" => "Compartilhar no Twitter",
        "share_ld" => "Compartilhar no Linkedin",
        "share_wp" => "Compartilhar no Whatsapp",
        "choose_category" => "Escolher categoria",
        "max_limit" => "Limite máximo - ".ZIP_LIMIT." KB",
        "blog_max_limit" => "Limite máximo - ".BLOG_IMAGE_LIMIT." KB - 1600 x 800 pixels",
        "zip_limit" => "O arquivo Zip enviado é maior que ".ZIP_LIMIT." KB. Tente novamente.",
        "img_limit" => "O arquivo de imagem enviado é maior que ".BLOG_IMAGE_LIMIT." KB. Tente novamente.",
        "img_dimension" => "O arquivo de imagem enviado deve ter exatamente 1600 x 800 pixels. Tente novamente.",
        "should_be_zip" => "O arquivo enviado não é zip. Carregue o arquivo zip e tente novamente.",
        "should_be_image" => "Arquivo enviado não é imagem. Carregue a imagem png, jpg ou jpeg e tente novamente.",
        "load_more" => "Carregue mais",
        "search" => "Pesquisar arquivos zip anônimos...",
        "no_search_found" => "Não encontramos nada com seu termo de pesquisa. Tente com palavras-chave diferentes.",
        "blog_image" => "Imagem do blog",
        "pages" => "Páginas",
        "singlepage" => "Página",
        "blog" => "Blogues",
        "singleblog" => "Blogue",
        "create_page" => "Criar página",
        "edit_page" => "Editar Página",
        "active_page" => "Páginas ativas",
        "page_id" => "ID da página",
        "deactive_page" => "Páginas desativadas",
        "page_activated" => "A página foi ativada com sucesso e está ativa agora.",
        "page_deactivated" => "A página foi desativada e ocultada com sucesso agora.",
        "page_deleted" => "A página foi excluída com sucesso.",
        "create_blog" => "Criar blog",
        "edit_blog" => "Editar blog",
        "click_old_image" => "Clique na imagem para ampliar",
        "active_blog" => "Blogues ativos",
        "deactive_blog" => "Blogues desativados",
        "blog_id" => "ID do blog",
        "blog_name" => "Título do Blog",
        "blog_activated" => "O blog foi ativado com sucesso e está no ar agora.",
        "blog_deactivated" => "O blog foi desativado e oculto com sucesso agora.",
        "blog_deleted" => "O blog foi excluído com sucesso.",
        "blog_name_unique" => "(O título do blog deve ser único e no máximo 100 caracteres)",
        "blog_description" => "Descrição do blog",
        "blog_short_description" => "Breve descrição do blog (máximo de 200 caracteres - aumenta o SEO)",
        "page_name" => "Nome da página",
        "page_description" => "Descrição da página",
        "page_name_unique" => "(O nome da página deve ser exclusivo e no máximo 25 caracteres)",
        "duplicate_page_name" => "O nome da página deve ser exclusivo. Tente novamente.",
        "duplicate_blog_name" => "O título do blog deve ser exclusivo. Tente novamente.",
        "page_published" => "A página é criada e publicada. Você pode encontrar em Páginas ativas.",
        "page_edited" => "A página foi editada com sucesso.",
        "blog_published" => "Blog é criado e publicado. Você pode encontrar em Blogs Ativos.",
        "blog_edited" => "O blog foi editado com sucesso.",
        "empty_page_field" => "Os campos de página não podem ficar vazios. Tente novamente.",
        "zip_id" => "Identidade zip",
        "active" => "Ativo",
        "pending" => "Pendente",
        "copyright_name" => "Nome de direitos autorais",
        "password" => "Senha",
        "self_destruct_text" => "A nota privada se autodestruirá assim que o link for aberto.",
        "note_heading" => "Nota privada anônima",
        "note_heading_password" => "Nota privada anônima com senha",
        "textarea_placeholder" => "Qual é a sua nota particular...?",
        "create_note_btn" => "Criar nota privada",
        "create_note_with_password_btn" => "Criar nota privada com senha",
        "spam_msg" => "Spammer não é permitido.",
        "empty_note_error" => "A Nota Privada não deve estar vazia.",
        "empty_note_error_password" => "Nota privada, senha e redigite a senha não devem estar vazias.",
        "empty_note_password_error" => "Nota privada e senha não devem estar vazias.",
        "note_password_error" => "A senha está errada. Tente novamente.",
        "password_error" => "Senha e redigite a senha não coincidem.",
        "note_heading_link" => "Link de Nota Privada Anônima",
        "note_destroy_msg" => "Esta nota foi destruída. Copie-o antes de fechar a janela ou alterar o idioma/modo.",
        "create_pvt_note" => "Crie sua nota privada",
        "read_msg" => "Parece que a nota foi lida e destruída.",
        "password_heading" => "Senha",
        "repassword_heading" => "Digite novamente a senha",
        "password_msg_heading" => "A Nota Privada é criptografada por senha.",
        "enter_password" => "Digite a senha e abra a nota",
        "copyright_heading" => "direito autoral",
        "all_right_reserved" => "Todos os direitos reservados.",
        "admin_login_heading" => "Login no painel de administração",
        "username" => "Nome do usuário",
        "admin_incorrectlogin_msg" => "Ou nome de usuário ou senha errados. Tente novamente.",
        "empty_admin_error" => "O nome de usuário/senha do administrador não deve estar vazio.",
        "login" => "Conecte-se",
        "notifications" => "Notificações e atalhos",
        "view" => "Visualizar",
        "total_private_note" => "Total de Notas Privadas",      
        "total_unreadprivate_note" => "Total de notas privadas não lidas" ,       
        "total_readprivate_note" => "Total Ler Notas Privadas",        
        "total_banned_ip" => "IP total de usuários banidos",
        "logout" => "Sair",
        "analysis" => "Análise",
        "lifetime_notes" => "Notas Privadas Vitalícias",
        "thismonth_notes" => "Este Mês Notas Particulares",
        "today_notes" => "Hoje Notas Particulares",
        "wrong_password" => "A senha está errada. Tente novamente.",
        "form_empty" => "Todos os campos são obrigatórios. Tente novamente.",
        "username_changed" => "Nome de usuário do administrador alterado com sucesso.",
        "change_admin_username" => "Alterar nome de usuário do administrador",
        "old_admin_username" => "Nome de usuário antigo do administrador",
        "new_admin_username" => "Novo nome de usuário do administrador",
        "change" => "Mudar",
        "old_admin_password" => "Senha de administrador antiga",
        "new_admin_password" => "Nova senha de administrador",
        "min_password" => "A senha deve conter no mínimo 8 caracteres, 1 caractere maiúsculo, 1 caractere minúsculo e 1 número (Exemplo - Test1234) .",
        "change_admin_password" => "Alterar senha do administrador",
        "password_changed" => "Senha do administrador alterada com sucesso.",
        "read" => "Leitura",
        "unread" => "Não lida",
        "delete_note" => "Excluir nota",
        "delete_note_with_ip" => "Excluir nota e bloquear IP do usuário",
        "view_note" => "Ver Nota",
        "yes" => "Sim",
        "no" => "Não",
        "serial_number" => "S.No.",
        "date" => "Encontro",
        "note_id" => "ID da nota",
        "note_unique_id" => "ID exclusivo da nota",
        "user_ip" => "IP do usuário",
        "note" => "Observação",
        "password_protected" => "Protegido por senha",
        "status" => "Status",
        "action" => "Açao",
        "note_deleted" => "A nota foi excluída com sucesso.",
        "note_deleted_with_ip" => "A nota foi excluída com sucesso e o Ip do usuário foi bloqueado.",  
        "unblock_ip" => "Desbloqueie o IP do usuário e exclua da lista negra.",
        "unblocked_ip" => "IP do usuário desbloqueado e excluído da lista negra.",
        "blocked_msg" => "Desculpe ! Este site não é para você."
    );  
    return $userlang[$txt];
}

?>