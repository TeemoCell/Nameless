<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr6
 *
 *  License: MIT
 *
 *  Portuguese Language - Admin
 *  Translation By Douglas Teles & dasilvaj4
 *  Last Update: 24/04/2019
 */
$language = array(
    /*
     *  Admin Control Panel
     */
    // Login
    're-authenticate' => 'Por favor, logue-se novamente',   
    // Sidebar
    'dashboard' => 'Painel',
    'configuration' => 'Configuração',
    'layout' => 'Layout',
    'user_management' => 'Gerenciar Usuários',
    'admin_cp' => 'AdminCP',
    'administration' => 'Administração',
    'overview' => 'Visão Geral',
    'core' => 'Core',
    'integrations' => 'Integrações',
    'minecraft' => 'Minecraft',
    'modules' => 'Módulos',
    'security' => 'Segurança',
    'sitemap' => 'Sitemap',
    'styles' => 'Estilos',
    'users_and_groups' => 'Usuários & Grupos',  
    // Overview
    'running_nameless_version' => 'Versão do NamelessMC: <strong>{x}</strong>', // Don't replace "{x}"
    'running_php_version' => 'Versão do PHP: <strong>{x}</strong>', // Don't replace "{x}"
    'statistics' => 'Estatísticas',
    'registrations' => 'Cadastros',
    'topics' => 'Tópicos',
    'posts' => 'Postagens',
    'notices' => 'Notificações',
    'no_notices' => 'Sem notificações.',
    'email_errors_logged' => 'Erros de e-mail foram registrados',   
    // Core
    'settings' => 'Configurações',
    'general_settings' => 'Configurações Gerais',
    'sitename' => 'Nome do site',
    'default_language' => 'Linguagem padrão',
    'default_language_help' => 'Os usuários poderão escolher entre os idiomas instalados.',
    'install_language' => 'Instalar Linguagem',
    'update_user_languages' => 'Atualizar Linguagem dos Usuários',
    'update_user_languages_warning' => 'Isso atualizará o idioma para todos os usuários do seu site, mesmo que eles já tenham selecionado um!',
    'updated_user_languages' => 'A lingugagem dos usuários foi atualizada.',
    'installed_languages' => 'Todos os novos idiomas foram instalados com êxito.',
    'default_timezone' => 'Fuso horário padrão',
    'registration' => 'Cadastro',
    'enable_registration' => 'Ativar cadastro?',
    'verify_with_mcassoc' => 'Verificar contas dos usuários com MCAssoc?',
    'email_verification' => 'Ativar verificação de e-mail?',
    'registration_settings_updated' => 'Configurações de registro atualizadas com sucesso.',
    'homepage_type' => 'Tipo de Homepage',
    'post_formatting_type' => 'Tipo de formatação de postagem',
    'portal' => 'Portal',
    'private_profiles' => 'Perfis Privados',
    'missing_sitename' => 'Por favor, insira o nome do site contendo de 2 a 64 caracteres.',
    'missing_contact_address' => 'Please insert a contact email address between 3 and 255 characters long.',
    'use_friendly_urls' => 'URLs Amigáveis',
    'use_friendly_urls_help' => 'IMPORTANTE: Seu servidor deverá permitir o uso do mod_rewrite e do .htaccess para que isso funcione.',
    'config_not_writable' => 'Seu arquivo <strong>core/config.php</strong> não é gravável. Por favor, verifique as permissões do arquivo.',
    'settings_updated_successfully' => 'Configurações gerais atualizadas com sucesso.',
    'social_media' => 'Social',
    'youtube_url' => 'URL do Youtube',
    'twitter_url' => 'URL do Twitter',
    'twitter_dark_theme' => 'Utilizar tema escuro do Twitter?',
    'discord_id' => 'ID do Servidor Discord',
    'discord_widget_theme' => 'Tema do Widget do Discord',
    'dark' => 'Escuro',
    'light' => 'Claro',
    'google_plus_url' => 'URL do Google Plus',
    'facebook_url' => 'URL do Facebook',
    'social_media_settings_updated' => 'Configurações de mídia social atualizadas com sucesso.',
    'successfully_updated' => 'Atualizado com sucesso!',
    'debugging_and_maintenance' => 'Depuração e manutenção',
    'maintenance' => 'Manutenção',
    'debugging_settings_updated_successfully' => 'Configurações de depuração atualizadas com sucesso.',
    'enable_debug_mode' => 'Habilitar o modo de depuração?',
    'force_https' => 'Forçar o uso do https?',
    'force_https_help' => 'Se ativado, todas as requisições para o seu site serão redirecionadas para o https. Você deve ter um certificado SSL válido ativo para que isso funcione corretamente.',
    'force_www' => 'Forçar www?',
    'contact_email_address' => 'Endereço de e-mail para contato',
    'emails' => 'E-mails',
    'email_errors' => 'Erros de e-mail',
    'registration_email' => 'E-mail de inscrição',
    'contact_email' => 'Email de contato',
    'forgot_password_email' => 'Esqueceu o e-mail cadastrado',
    'unknown' => 'Desconhecido',
    'delete_email_error' => 'Erro de exclusão',
    'confirm_email_error_deletion' => 'Tem certeza de que deseja excluir esse erro?',
    'viewing_email_error' => 'Visualizando o erro',
    'unable_to_write_email_config' => 'Não é possível escrever no arquivo <strong>core/email.php</core>. Por favor, verifique as permissões de arquivo.',
    'enable_mailer' => 'Ativar o PHPMailer?',
    'enable_mailer_help' => 'Habilite isso se os e-mails não estão sendo enviados por padrão. O uso de PHPMailer exige que você tenha um serviço capaz de enviar e-mails, como o Gmail ou um provedor SMTP.',
    'outgoing_email' => 'Endereço de e-mail de envio',
    'outgoing_email_info' => 'Este é o endereço de e-mail do qual NamelessMC usará para enviar e-mails.',
    'mailer_settings_info' => 'Os campos a seguir são necessários se você tiver habilitado PHPMailer. Para obter mais informações sobre como preencher esses campos, confira <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">a wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Porta',
    'email_password_hidden' => 'A senha não é mostrada por razões de segurança.',
    'send_test_email' => 'Enviar e-mail de teste',
    'send_test_email_info' => 'O seguinte botão irá tentar enviar um e-mail para o seu endereço de e-mail, <strong>{x}</strong>. Qualquer erro que occora enquanto envia o e-mail será exibido.', // Don't replace {x}
    'send' => 'Enviar',
    'test_email_error' => 'Erro do e-mail de teste:',
    'test_email_success' => 'E-mail de teste enviado com sucesso!',
    'edit_email_messages' => 'Email Messages',
    'email_language_info' => 'Not seeing your language? Make sure \'emails.php\' is in your language directory and it is writable by your webserver.',
    'editing_language' => 'Editing Language',
    'email_preview_popup' => 'Preview',
    'email_preview_popup_message' => 'Click here to see a preview of the email.',
    'email_message_greeting' => 'Greeting',
    'email_message_thanks' => 'Thanks',
    'email_message_options' => 'Options',
    'email_message_subject' => 'Subject',
    'email_message_message' => 'Message',
    'terms_error' => 'Certifique-se de que seus termos e condições não passa dos 100000 caracteres.',
    'privacy_policy_error' => 'Por favor, insira uma política de privacidade com no máximo 100000 caracteres.',
    'terms_updated' => 'Termos atualizados com sucesso.',
    'avatars' => 'Avatares',
    'allow_custom_avatars' => 'Permitir os usuários utilizar avatares personalizados?',
    'default_avatar' => 'Avatar Padrão',
    'custom_avatar' => 'Avatar personalizado',
    'minecraft_avatar' => 'Minecraft Avatar',
    'minecraft_avatar_source' => 'Fonte do Minecraft avatar',
    'built_in_avatars' => 'Serviço de avatar incorporado',
    'minecraft_avatar_perspective' => 'Perspectiva do Minecraft avatar',
    'face' => 'Rosto',
    'head' => 'Cabeça',
    'bust' => 'Busto',
    'select_default_avatar' => 'Selecione um novo avatar padrão:',
    'no_avatars_available' => 'Não há avatares disponíveis. Por favor, envie uma nova imagem acima primeiro.',
    'avatar_settings_updated_successfully' => 'Configurações do Avatar atualizadas com sucesso.',
    'navigation' => 'Navegação',
    'navbar_order' => 'Ordem da Barra de Navegação',
    'navbar_order_instructions' => 'Você pode dar a cada item um número acima de 0 para os itens na barra de navegação, sendo 1 o primeiro item e os números mais altos após ele.',
    'navbar_icon' => 'Ícone da Barra de Navegação',
    'navbar_icon_instructions' => 'Você também pode adicionar um ícone a cada item da barra de navegação aqui, por exemplo, usando <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Configurações de navegação atualizadas com sucesso.',
    'dropdown_items' => 'Itens de menu suspenso',
    'enable_page_load_timer' => 'Ativar o page load timer?',
    'google_recaptcha' => 'Ativar Google reCAPTCHA?',
    'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
    'captcha_type' => 'Captcha Type',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Motivo do registro está desativado',
    'enable_nicknames_on_registration' => 'Ativar nickname para registrar usuários?',
    'validation_promote_group' => 'Grupo pós-validação',
    'validation_promote_group_info' => 'Este é o grupo para o qual um usuário será promovido depois de ter validado sua conta.',
    'login_method' => 'Método de login',
    'privacy_and_terms' => 'Termos & Privacidade',  
    // Reactions
    'icon' => 'Ícone',
    'type' => 'Tipo',
    'positive' => 'Positivo',
    'neutral' => 'Neutro',
    'negative' => 'Negativo',
    'editing_reaction' => 'Editando Reação',
    'html' => 'HTML',
    'new_reaction' => '<i class="fas fa-plus-circle"></i> Nova Reação',
    'creating_reaction' => 'Criando Reação',
    'no_reactions' => 'Ainda não há reações.',
    'reaction_created_successfully' => 'Reação criada com sucesso.',
    'reaction_edited_successfully' => 'Reação editada com sucesso.',
    'reaction_deleted_successfully' => 'Reação excluída com sucesso.',
    'name_required' => 'Um nome é obrigatório',
    'html_required' => 'HTML é obrigatório',
    'type_required' => 'Um tipo é obrigatório',
    'name_maximum_16' => 'O nome deve ter no máximo 16 caracteres',
    'html_maximum_255' => 'O HTML deve ter no máximo 255 caracteres',
    'confirm_delete_reaction' => 'Tem certeza de que deseja excluir essa reação?',  
    // Custom profile fields
    'custom_fields' => 'Campos Personalizados do Perfil',
    'new_field' => '<i class="fas fa-plus-circle"></i> Novo Campo',
    'required' => 'Requerido',
    'editable' => 'Editável',
    'public' => 'Público',
    'forum_posts' => 'Display on Forum',
    'text' => 'Texto',
    'textarea' => 'Área de texto',
    'date' => 'Data',
    'creating_profile_field' => 'Criando Campo de Perfil',
    'editing_profile_field' => 'Editando Campo de Perfil',
    'field_name' => 'Nome do Campo',
    'profile_field_required_help' => 'Os campos obrigatórios devem ser preenchidos pelo usuário, e eles aparecerão durante o registro.',
    'profile_field_public_help' => 'Os campos públicos serão exibidos para todos os usuários, se ele estiver desabilitado, somente os moderadores poderão ver os valores.',
    'profile_field_error' => 'Introduza um nome de campo entre 2 e 16 caracteres.',
    'description' => 'Descrição',
    'display_field_on_forum' => 'Mostrar campo no fórum?',
    'profile_field_forum_help' => 'Se ativado, o campo será exibido pelo usuário próximo aos posts do fórum.',
    'profile_field_editable_help' => 'Se ativado, os usuários terão permissão para editar o campo em suas configurações de perfil.',
    'no_custom_fields' => 'Ainda não há campos personalizados.',
    'profile_field_updated_successfully' => 'O campo de perfil foi atualizado com sucesso.',
    'profile_field_created_successfully' => 'O campo de perfil foi criado com sucesso.',
    'profile_field_deleted_successfully' => 'O campo do perfil foi excluído com sucesso.',  
    // Minecraft
    'enable_minecraft_integration' => 'Ativar a integração do Minecraft?',
    'mc_service_status' => 'Status do Minecraft Service',
    'service_query_error' => 'Não é possível recuperar o status do service.',
    'authme_integration' => 'Integração com o AuthMe',
    'authme_integration_info' => 'Quando a integração com o AuthMe estiver habilitada, os usuários só podem registrar dentro do jogo.',
    'enable_authme' => 'Ativar a integração com o AuthMe?',
    'authme_db_address' => 'Endereço do banco de dados do AuthMe',
    'authme_db_port' => 'Porta do banco de dados do AuthMe',
    'authme_db_name' => 'Nome do banco de dados do AuthMe',
    'authme_db_user' => 'Usuário do banco de dados do AuthMe',
    'authme_db_password' => 'Senha do banco de dados do AuthMe',
    'authme_db_password_hidden' => 'A senha do banco de dados do AuthMe fica oculta por motivos de segurança.',
    'authme_hash_algorithm' => 'Algoritmo de hash do AuthMe',
    'authme_db_table' => 'Tabela de usuário do AuthMe',
    'enter_authme_db_details' => 'Insira os detalhes do banco de dados válidos.',
    'authme_password_sync' => 'Sincronizar a senha com o AuthMe?',
    'authme_password_sync_help' => 'Se habilitado, sempre que a senha de um usuário é atualizada no jogo, a senha também será atualizada no site.',
    'minecraft_servers' => 'Servidores de Minecraft',
    'account_verification' => 'Verificação da Conta Minecraft',
    'server_banners' => 'Banners do Servidor',
    'query_errors' => 'Erros de Query',
    'add_server' => '<i class="fas fa-plus-circle"></i> Adicionar servidor',
    'no_servers_defined' => 'Nenhum servidor foi definido ainda',
    'query_settings' => 'Configurações de Query',
    'default_server' => 'Servidor padrão',
    'no_default_server' => 'Sem servidor padrão',
    'external_query' => 'Usar uma query externa?',
    'external_query_help' => 'Se a consulta de servidor padrão não funcionar, habilite esta opção.',
    'adding_server' => 'Adicionando Servidor',
    'server_name' => 'Nome do Servidor',
    'server_address' => 'Endereço do Servidor',
    'server_address_help' => 'Este é o endereço IP ou domínio usado para se conectar ao seu servidor, sem a porta.',
    'server_port' => 'Porta do Servidor',
    'parent_server' => 'Servidor Pai',
    'parent_server_help' => 'Um servidor pai geralmente é a instância Bungee à qual o servidor está conectado, se houver.',
    'no_parent_server' => 'Sem servidor pai',
    'bungee_instance' => 'Instância BungeeCord?',
    'bungee_instance_help' => 'Selecione essa opção se o servidor for uma instância BungeeCord.',
    'server_query_information' => 'Para exibir uma lista de jogadores online em seu site, seu servidor <strong>deve</strong> estar com a opção \'enable-query\' ativada no arquivo <strong>server.properties</strong> do seu servidor',
    'enable_status_query' => 'Ativar o status da query?',
    'status_query_help' => 'Se isso estiver habilitado, a página de status mostrará a este servidor como estando online ou offline.',
    'show_ip_on_status_page' => 'Exibir IP na página de status?',
    'show_ip_on_status_page_info' => 'Se isso estiver habilitado, os jogadores poderão visualizar e copiar o IP do servidor, na página de status.',
    'enable_player_list' => 'Ativar a lista de jogadores?',
    'pre_1.7' => 'A versão do Minecraft é mais velho que a 1.7?',
    'player_list_help' => 'Se isso estiver habilitado, a página de status exibirá uma lista de jogadores online.',
    'server_query_port' => 'Porta Query do Servidor',
    'server_query_port_help' => 'Esta é a opção query.port no arquivo server.properties do servidor, desde que a opção enable-query no mesmo arquivo seja definida como true.',
    'server_name_required' => 'Por favor, insira o nome do servidor',
    'server_name_minimum' => 'Certifique-se de que o nome do servidor tem pelo menos 1 caractere',
    'server_name_maximum' => 'Certifique-se de que o nome do servidor tem no máximo 20 caracteres',
    'server_address_required' => 'Por favor, insira o endereço do servidor',
    'server_address_minimum' => 'Verifique se o endereço do servidor tem pelo menos 1 caractere',
    'server_address_maximum' => 'Verifique se o endereço do servidor tem no máximo 64 caracteres',
    'server_port_required' => 'Por favor, insira a porta do servidor',
    'server_port_minimum' => 'Verifique se a porta do servidor tem pelo menos 2 caracteres',
    'server_port_maximum' => 'Verifique se a porta d oservidor tem no máximo 5 caracteres',
    'server_parent_required' => 'Por favor, selecione um servidor pai',
    'query_port_maximum' => 'Verifique se a porta de query tem no máximo 5 caracteres',
    'server_created' => 'Servidor criado com sucesso.',
    'confirm_delete_server' => 'Tem certeza de que deseja excluir este servidor?',
    'server_updated' => 'Servidor atualizado com sucesso.',
    'editing_server' => 'Editando o Servidor',
    'server_deleted' => 'Servidor deletado com sucesso',
    'unable_to_delete_server' => 'Não foi possível excluir o servidor.',
    'leave_port_empty_for_srv' => 'Você pode deixar a porta vazia se for 25565, ou se seu domínio usar um registro SRV',
    'viewing_query_error' => 'Visualizando os erros da Query',
    'confirm_query_error_deletion' => 'Tem certeza de que deseja excluir esse erro de Query?',
    'no_query_errors' => 'Sem erro de Query registrado.',
    'new_banner' => '<i class="fas fa-plus-circle"></i> Novo Banner',
    'purge_errors' => 'Limpar os erros',
    'confirm_purge_errors' => 'Tem certeza de que deseja limpar todos os erros?',
    'email_errors_purged_successfully' => 'Erros de e-mail foram eliminados com sucesso.',
    'error_deleted_successfully' => 'O erro foi excluído com sucesso.',
    'no_email_errors' => 'Nenhum erro de email registrado.',
    'email_settings_updated_successfully' => 'As configurações de e-mail foram atualizadas com sucesso.',
    'content' => 'Conteúdo',
    'mcassoc_help' => 'O mcassoc é um serviço externo que pode ser usado para verificar que os usuários possuem a conta Minecraft com a qual se registraram. Para usar este recurso, você precisará se inscrever para uma chave compartilhada <a href="https://mcassoc.lukegb.com/" target="_blank">aqui</a>.',
    'mcassoc_key' => 'Chave compartilhada mcassoc',
    'mcassoc_instance' => 'Chave de instância do mcassoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Clique para gerar uma chave de instância</a>',
    'mcassoc_error' => 'Certifique-se de que você inseriu sua chave compartilhada corretamente e que gerou uma chave de instância corretamente.',
    'updated_mcassoc_successfully' => 'Configurações do mcassoc atualizadas com sucesso.',
    'force_premium_accounts' => 'Forçar contas Minecraft premium?',
    'banner_background' => 'Fundo do Banner',
    'query_interval' => 'Intevalo de Consulta (em minutos, deve ser entre 5 e 60)',
    'player_graphs' => 'Gráficos de Jogadores',
    'player_count_cronjob_info' => 'Você pode configurar uma cron job para consultar o seu servidor a cada {x} minutos com os seguintes comandos:',
    'status_page' => 'Ativar página de status?',
    'minecraft_settings_updated_successfully' => 'Configurações atualizadas com sucesso.',
    'server_id_x' => 'ID do Servidor: {x}', // Don't replace {x}
    'server_information' => 'Informações do Servidor',
    'query_information' => 'Informações de Consulta',
    'query_errors_purged_successfully' => 'Erros de consulta removidos com sucesso.',
    'query_error_deleted_successfully' => 'Erro de consulta excluído com sucesso.',
    'banner_updated_successfully' => 'Banner atualizado com sucesso. Pode demorar um pouco até que suas alterações entrem em vigor.',   
    // Modules
    'modules_installed_successfully' => 'Todos os novos módulos foram instalados com êxito.',
    'enabled' => 'Ativado',
    'disabled' => 'Desativado',
    'enable' => 'Ativar',
    'disable' => 'Desativar',
    'module_enabled' => 'Módulo ativado.',
    'module_disabled' => 'Módulo desativado.',
    'author' => 'Autor:',
    'author_x' => 'Autor: {x}', // Don't replace {x}
    'module_outdated' => 'Detectamos que este módulo é destinado à versão {x} do Nameless, mas você está rodando a versão {y}', // Don't replace "{x}" or "{y}"
    'find_modules' => 'Encontrar Módulos',
    'view_all_modules' => 'Ver todos os módulos',
    'unable_to_retrieve_modules' => 'Não foi possível recuperar os módulos',
    'module' => 'Módulo',
    'unable_to_enable_module' => 'Não é possível habilitar o módulo incompatível.', 
    // Styles
    'templates' => 'Templates',
    'panel_templates' => 'Painel de Templates',
    'template_outdated' => 'Você está utilizando um template para a versão {x} do Nameless, porém sua versão do Nameless é {y}', // Don't replace "{x}" or "{y}"
    'active' => 'Ativo',
    'deactivate' => 'Desativar',
    'activate' => 'Ativar',
    'warning_editing_default_template' => 'Atenção! É recomendável que você não edite o modelo padrão.',
    'images' => 'Imagens',
    'upload_new_image' => 'Carregar nova imagem',
    'reset_background' => 'Redefinir o Background',
    'install' => '<i class="fas fa-plus-circle"></i> Instalar',
    'template_updated' => 'Template atualizado com sucesso.',
    'default' => 'Padrão',
    'make_default' => 'Tornar Padrão',
    'default_template_set' => 'Template padrão definido para {x} com sucesso.', // Don't replace {x}
    'template_deactivated' => 'Template desativado.',
    'template_activated' => 'Template ativado.',
    'permissions' => 'Permissões',
    'setting_perms_for_x' => 'Configurando as permissões do template {x}', // Don't replace {x}
    'templates_installed_successfully' => 'Todos os novos templates foi instalado com sucesso.',
    'confirm_delete_template' => 'Tem certeza que você quer remover esse template?',
    'delete' => 'Remover',
    'template_deleted_successfully' => 'Template removido com sucesso.',
    'background_image_x' => 'Imagem de fundo: <strong>{x}</strong>', // Don't replace {x}
    'banner_image_x' => 'Banner image: <strong>{x}</strong>', // Don't replace {x}
    'background_directory_not_writable' => 'O diretório <strong>uploads/backgrounds</strong> não é gravável!',
    'template_banners_directory_not_writable' => 'O diretório <strong>uploads/template_banners</strong> não é gravável!',
    'template_banner_reset_successfully' => 'Banner redefinido com sucesso.',
    'template_banner_updated_successfully' => 'Banner atualizado com sucesso.',
    'reset_banner' => 'Redefinir Banner',
    'find_templates' => 'Encontrar Templates',
    'view_all_templates' => 'Ver todos os templates',
    'unable_to_retrieve_templates' => 'Não foi possível recuperar os templates',
    'template' => 'Template',
    'stats' => 'Estatísticas',
    'downloads_x' => 'Downloads: {x}',
    'views_x' => 'Visualizações: {x}',
    'rating_x' => 'Avaliação: {x}',
    'editing_template_x' => 'Editando template {x}', // Don't replace {x}
    'editing_template_file_in_template' => 'Editando arquivo {x} no template {y}', // Don't replace {x} or {y}
    'cant_write_to_template' => 'Não foi possível salvar alterações no arquivo do template! Por favor, verifique as permissões de arquivo.',
    'unable_to_delete_template' => 'Não é possível excluir totalmente o template. Por favor, verifique as permissões de arquivo.',
    'background_reset_successfully' => 'Background redefinido com sucesso.',
    'background_updated_successfully' => 'Background atualizado com sucesso.',
    'unable_to_enable_template' => 'Não foi possível ativar o template incompatível.',  
    // Users & groups
    'users' => 'Usuários',
    'groups' => 'Grupos',
    'group' => 'Grupo',
    'new_user' => '<i class="fas fa-plus-circle"></i> Novo Usuário',
    'creating_new_user' => 'Criando novo usuário',
    'registered' => 'Cadastrado',
    'user_created' => 'Usuário criado com sucesso.',
    'cant_delete_root_user' => 'Não é possível excluir o usuário root!',
    'cant_modify_root_user' => 'Não é possível modificar o grupo root!',
    'user_deleted' => 'Usuário excluído com sucesso.',
    'confirm_user_deletion' => 'Você tem certeza que deseja excluir o usuário <strong>{x}</strong>?', // Don't replace {x}
    'validate_user' => 'Validar Usuário',
    'update_uuid' => 'Atualizar UUID',
    'update_mc_name' => 'Atualizar Usuário Minecraft',
    'reset_password' => 'Resetar Senha',
    'punish_user' => 'Punir Usuário',
    'delete_user' => 'Excluir Usuário',
    'minecraft_uuid' => 'Minecraft UUID',
    'other_actions' => 'Outras Ações',
    'disable_avatar' => 'Desativar Avatar',
    'select_user_group' => 'Você deve selecionar um grupo de usuários.',
    'uuid_max_32' => 'A UUID deve ter no máximo 32 caracteres.',
    'title_max_64' => 'O título do usuário deve ter no máximo 64 caracteres.',
    'group_id' => 'ID do Grupo',
    'name' => 'Nome',
    'title' => 'Título do Usuário',
    'new_group' => '<i class="fas fa-plus-circle"></i> Novo Grupo',
    'group_name_required' => 'Introduza um nome de grupo.',
    'group_name_minimum' => 'Certifique-se de que o nome do seu grupo tem um mínimo de 2 caracteres.',
    'group_name_maximum' => 'Certifique-se de que o nome do seu grupo tem um máximo de 20 caracteres.',
    'creating_group' => 'Criando novo grupo',
    'group_html_maximum' => 'Certifique-se de que o HTML do grupo não exceda 1024 caracteres.',
    'group_html' => 'HTML do Grupo',
    'group_html_lg' => 'HTML do Grupo Grande',
    'group_username_colour' => 'Cor do Grupo',
    'group_staff' => 'O grupo é um grupo da Staff?',
    'delete_group' => 'Excluír Grupo',
    'confirm_group_deletion' => 'Você tem certeza de que deseja excluir o grupo {x}?', // Don't replace {x}
    'group_not_exist' => 'Esse grupo não existe.',
    'secondary_groups' => 'Grupos secundários',
    'secondary_groups_info' => 'Este usuário vai ganhar qualquer permissão adicional provenientes destes grupos',
    'unable_to_update_uuid' => 'Unable to update UUID.',
    'default_group' => 'Grupo padrão (para novos usuários)?',
    'user_id' => 'User ID',
    'uuid' => 'UUID',
    'group_order' => 'Ordenação dos Grupos',
    'group_created_successfully' => 'Grupo criado com sucesso.',
    'group_updated_successfully' => 'Grupo atualizado com sucesso.',
    'group_deleted_successfully' => 'Grupo excluído com sucesso.',
    'unable_to_delete_group' => 'Não é possível excluir um grupo padrão ou um grupo que possa visualizar o StaffCP. Por favor, atualize as configurações do grupo primeiro!',
    'can_view_staffcp' => 'O grupo possui acesso ao StaffCP?',
    'user' => 'Usuário',
    'user_validated_successfully' => 'Usuário validado com sucesso.',
    'user_updated_successfully' => 'Usuário atualizado com sucesso.',
    'editing_user_x' => 'Editando usuário {x}', // Don't replace {x}
    'details' => 'Detalhes',    
    // Permissions
    'select_all' => 'Selecionar Todos',
    'deselect_all' => 'Deselecionar Todos',
    'background_image' => 'Imagem de Fundo',
    'can_edit_own_group' => 'Pode editar as permissão do seu próprio grupo',
    'permissions_updated_successfully' => 'Permissões atualizada com sucesso.',
    'cant_edit_this_group' => 'Você pode editar as permissões destes grupos!',  
    // General Admin language
    'task_successful' => 'Tarefa bem-sucedida.',
    'invalid_action' => 'Ação inválida.',
    'enable_night_mode' => 'Ativar modo noturno',
    'disable_night_mode' => 'Desativar modo noturno',
    'view_site' => 'Ver Site',
    'signed_in_as_x' => 'Logado como {x}', // Don't replace {x}
    'warning' => 'Aviso',   
    // Maintenance
    'maintenance_mode' => 'Modo de manutenção',
    'maintenance_enabled' => 'O modo de manutenção está ativado no momento.',
    'enable_maintenance_mode' => 'Habilitar modo de manutenção?',
    'maintenance_mode_message' => 'Mensagem de modo de manutenção',
    'maintenance_message_max_1024' => 'Certifique-se de que sua mensagem de manutenção é de no máximo 1024 caracteres.',    
    // Security
    'acp_logins' => 'Logins do StaffCP',
    'please_select_logs' => 'Selecione o registro para visualizar',
    'ip_address' => 'Endereço IP',
    'template_changes' => 'Alterações do Template',
    'file_changed' => 'Arquivo Modificado',
    'all_logs' => 'Todos os Registros',
    'action' => 'Ação',
    'action_info' => 'Informação de Ação',  
    // Updates
    'update' => 'Atualizar',
    'current_version_x' => 'Versão atual: <strong>{x}</strong>', // Don't replaec {x}
    'new_version_x' => 'Nova versão: <strong>{x}</strong>', // Don't replace {x}
    'new_update_available' => 'Há uma nova atualização disponível',
    'new_urgent_update_available' => 'Há uma nova atualização urgente disponível. Por favor, atualize o mais rápido possível!',
    'up_to_date' => 'A sua instalação do NamelessMC está atualizada!',
    'urgent' => 'Esta atualização é uma atualização crítica',
    'changelog' => 'Changelog',
    'update_check_error' => 'Ocorreu um erro ao verificar se havia uma atualização:',
    'instructions' => 'Instruções',
    'download' => 'Download',
    'install_confirm' => 'Certifique-se de que transferiu o pacote e carregou os ficheiros contidos em primeiro lugar!',
    'check_again' => 'Verificar novamente', 
    // Widgets
    'widgets' => 'Widgets',
    'widget_enabled' => 'Widget ativado.',
    'widget_disabled' => 'Widget desativado.',
    'widget_updated' => 'Widget atualizado.',
    'editing_widget_x' => 'Editando o widget {x}', // Don't replace {x}
    'module_x' => 'Módulo: {x}', // Don't replace {x}
    'widget_order' => 'Ordenação dos Widgets',  
    // Online users widget
    'include_staff_in_user_widget' => 'Incluir membros da equipe no widget do usuário?',
    'show_nickname_instead_of_username' => 'Mostrar o apelido do usuário em vez do nome de usuário?',   
    // Custom Pages
    'pages' => 'Páginas',
    'custom_pages' => 'Páginas',
    'new_page' => '<i class="fas fa-plus-circle"></i> Nova página',
    'no_custom_pages' => 'Nenhuma págia foi criada ainda.',
    'creating_new_page' => 'Criando Página',
    'page_title' => 'Título da Página',
    'page_path' => 'Endereço da Página (com o /, ex: /example)',
    'page_icon' => 'Ícone da Página',
    'page_link_location' => 'Local do link para Página',
    'page_link_navbar' => 'Barra de Navegação',
    'page_link_footer' => 'Rodapé',
    'page_link_more' => '"Mais" Dropdown',
    'page_link_none' => 'Sem link',
    'page_content' => 'Conteúdo da Página',
    'page_redirect' => 'Página de Redirecionamento?',
    'page_redirect_to' => 'Link para o redirecionamento (com o http:// ou https://)',
    'unsafe_html' => 'Permitir tags HTML não seguras?',
    'unsafe_html_warning' => 'Ativando está opção, siginifica que qualquer HTML pode ser usada nesta página, incluindo JavaScript potencialmente perigosos. Somente ativa esta opção se você está ciente que o seu HTML é seguro.',
    'include_in_sitemap' => 'Incluir no sitemap?',
    'sitemap_link' => 'Link do sitemap:',
    'page_permissions' => 'Permisões da Página',
    'view_page' => 'Ver Página?',
    'editing_page_x' => 'Editando a Página {x}', // Don't replace {x}
    'unable_to_create_page' => 'Não foi possível criar a página:',
    'page_title_required' => 'É necessário um título.',
    'page_url_required' => 'É necessário um endereço para página.',
    'link_location_required' => 'É necessário um link.',
    'page_title_minimum_2' => 'O título da página deve ter no mínimo 2 caracteres.',
    'page_url_minimum_2' => 'O endereço da página deve ter no mínimo 2 caracteres.',
    'page_title_maximum_30' => 'O título da página deve ter no máximo 30 caracteres.',
    'page_icon_maximum_64' => 'O ícone da página deve ter no máximo 64 caracteres.',
    'page_url_maximum_20' => 'O endereço da página deve ter no máximo 20 caracteres.',
    'page_content_maximum_100000' => 'O conteudo da página deve ter no máximo 100000 caracteres.',
    'page_redirect_link_maximum_512' => 'O link de redirecionamento deve ter no máximo 512 caracteres.',
    'confirm_delete_page' => 'Você tem certeza que quer deletar está página?',
    'page_created_successfully' => 'Página criada com sucesso',
    'page_updated_successfully' => 'Página atualizada com sucesso.',
    'page_deleted_successfully' => 'Página excluída com sucesso.',  
    // API
    'api' => 'API',
    'enable_api' => 'Ativar a API?',
    'api_info' => 'A API permite que plugins e outros serviços interajam com o seu site, como o <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >como o plugin Nameless oficial</a>.',
    'enable_legacy_api' => 'Ativar API legacy?',
    'legacy_api_info' => 'A API legacy permite que plugins que usam a API antiga do Nameless v1 funcionem com a versão atual do Nameless.',
    'confirm_api_regen' => 'Tem certeza de que deseja gerar uma nova chave para API?',
    'api_key' => 'API Key',
    'api_url' => 'API URL',
    'copy' => 'Copiar',
    'api_key_regenerated' => 'A chave da API foi regenerada com sucesso.',
    'api_registration_email' => 'E-mail de registro da API',
    'show_registration_link' => 'Mostrar link de registro',
    'registration_link' => 'Link de registro',
    'link_to_complete_registration' => 'Link para o registro completo: {x}', // Don't replace {x}
    'api_verification' => 'Ativar verificação de API?',
    'api_verification_info' => 'Se ativado, as contas só podem ser verificadas por meio da API, por exemplo, usando o plugin oficial Nameless. <strong>Essa opção substituirá a verificação de e-mail e as contas serão ativadas automaticamente.</strong><br />Você deve configurar seu grupo padrão para ter permissões limitadas e, em seguida, atualizar o grupo de pós-validação na guia StaffCP -> Configuration -> Cadastro para o grupo de membros completo com permissões normais.',
    'enable_username_sync' => 'Ativar sincronização de nome de usuário?',
    'enable_username_sync_info' => 'Se ativado, os nomes de usuário do site serão atualizados para corresponder aos nomes de usuário do jogo.',
    'api_settings_updated_successfully' => 'Configurações da API atualizadas com sucesso.',
    'group_sync' => 'Sincronizar Grupo',
    'group_sync_info' => 'Você pode configurar a API para atualizar automaticamente o grupo de sites de um usuário quando seu grupo de jogos é alterado. Basta digitar o nome do grupo no jogo e o grupo do site com o qual deve ser sincronizado abaixo.',
    'ingame_group' => 'Nome do Grupo Ingame',
    'website_group' => 'Grupo no Site',
    'set_as_primary_group' => 'Definir como grupo principal?',
    'set_as_primary_group_info' => 'Se ativado, o grupo principal do site do usuário será atualizado. Se desativado, o grupo ingame será adicionado aos grupos secundários do site do usuário.',
    'ingame_group_maximum' => 'Certifique-se de que o nome do seu grupo tenha no máximo 64 caracteres.',
    'select_website_group' => 'Por favor, selecione um grupo de sites.',
    'ingame_group_already_exists' => 'Uma regra de sincronização de classificação já foi criada para esse grupo no jogo.',
    'group_sync_rule_created_successfully' => 'A regra de sincronização do grupo foi criada com sucesso.',
    'group_sync_rules_updated_successfully' => 'As regras de sincronização de grupo foram atualizadas com sucesso.',
    'group_sync_rule_deleted_successfully' => 'A regra de sincronização do grupo foi excluída com sucesso.',
    'existing_rules' => 'Regras Existentes',
    'new_rule' => 'Nova Regra', 
    // File uploads
    'drag_files_here' => 'Arraste arquivos aqui para fazer o upload.',
    'invalid_file_type' => 'Tipo de arquivo inválido!',
    'file_too_big' => 'Arquivo muito grande! Seu arquivo possui {{filesize}} e o limite é {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
    'allowed_proxies' => 'Proxies permitidos',
    'allowed_proxies_info' => 'Lista separada por linha de IPs de proxy permitidos.',   
    // Error logs
    'error_logs' => 'Logs de erros',
    'notice_log' => 'Logs notices',
    'warning_log' => 'Logs de avisos',
    'custom_log' => 'Logs custom',
    'other_log' => 'Outros logs',
    'fatal_log' => 'Logs fatais',
    'log_file_not_found' => 'Arquivo de log não encontrado.',
    'log_purged_successfully' => 'O log foi removido com sucesso.', 
	// Hooks
	'hooks' => 'Webhooks',
	'hooks_info' => 'Webhooks allow external services to be notified when certain events happen. When the specified events happen.',
	'new_hook' => 'New Hook',
	'creating_new_hook' => 'Creating New Webhook',
	'editing_hook' => 'Editing Webhook',
	'delete_hook' => 'Are you sure you want to delete this hook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Webhook Type',
	'hook_events' => 'Events to trigger this webhook',
	'invalid_hook_url' => 'Invalid webhook url',
	'invalid_hook_events' => 'You must select at least 1 event',
    'register_hook_info' => 'Registro do usuário',
    'validate_hook_info' => 'Validação do usuário',
    'delete_hook_info' => 'Exclusão do usuário',    
    // Sitemap
    'unable_to_load_sitemap_file_x' => 'Não foi possível carregar o arquivo do mapa do site {x}', // Don't replace {x}
    'sitemap_generated' => 'Mapa do site gerado com sucesso',
    'sitemap_not_writable' => 'O diretório <strong>cache/sitemaps</strong> não é gravável.',
    'cache_not_writable' => 'O diretório <strong>cache</strong> não é gravável.',
    'generate_sitemap' => 'Gerar Mapa do Site',
    'download_sitemap' => 'Baixar Mapa do Site',
    'sitemap_not_generated_yet' => 'O mapa do site não foi gerado ainda!',
    'sitemap_last_generated_x' => 'Último mapa do site gerado {x}', // Don't replace {x}    
    // Page metadata
    'page_metadata' => 'Metadados da Página',
    'metadata_page_x' => 'Visualizando metadados da página {x}', // Don't replace {x}
    'keywords' => 'Palavras-chave',
    'description_max_500' => 'A descrição deve ter no máximo 500 caracteres.',
    'page' => 'Página',
    'metadata_updated_successfully' => 'Metadados atualizados com sucesso.',    
    // Dashboard
    'total_users' => 'Total de Usuários',
    'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
    'recent_users' => 'Novo Usuário',
    'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
    'average_players' => 'Média de Jogadores',
    'nameless_news' => 'Notícias do NamelessMC',
    'unable_to_retrieve_nameless_news' => 'Não foi possível recuperar as últimas notícias',
    'confirm_leave_site' => 'Você está prestes a sair deste site! Tem a certeza que quer visitar <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
    'server_compatibility' => 'Compatibilidade do Servidor',
    'issues' => 'Problemas',    
    // Other
    'source' => 'Fonte',
    'support' => 'Suporte',
    'admin_dir_still_exists' => 'Aviso! O diretório <strong>modules/Core/pages/admin</strong> ainda existe. Por favor remova este diretório.',
    'mod_dir_still_exists' => 'Aviso! O diretório <strong>modules/Core/pages/mod</strong> ainda existe. Por favor remova este diretório.'
);
