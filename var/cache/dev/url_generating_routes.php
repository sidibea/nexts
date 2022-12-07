<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'nucleos_user_security_login' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\LoginAction'], [], [['text', '/login']], [], [], []],
    'nucleos_user_security_check' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\CheckLoginAction'], [], [['text', '/login_check']], [], [], []],
    'nucleos_user_security_logout' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\LogoutAction'], [], [['text', '/logout']], [], [], []],
    'nucleos_user_resetting_request' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\RequestResetAction'], [], [['text', '/resetting/request']], [], [], []],
    'nucleos_user_resetting_send_email' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\SendEmailAction'], [], [['text', '/resetting/send-email']], [], [], []],
    'nucleos_user_resetting_check_email' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\CheckEmailAction'], [], [['text', '/resetting/check-email']], [], [], []],
    'nucleos_user_resetting_reset' => [['token'], ['_controller' => 'Nucleos\\UserBundle\\Action\\ResetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], [], []],
    'nucleos_user_resetting' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController', 'route' => 'nucleos_user_resetting_request', 'permanent' => true], [], [['text', '/resetting/']], [], [], []],
    'nucleos_user_change_password' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\ChangePasswordAction'], [], [['text', '/security/change-password']], [], [], []],
    'nucleos_user_delete_account' => [[], ['_controller' => 'Nucleos\\UserBundle\\Action\\AccountDeletionAction'], [], [['text', '/deletetion/delete']], [], [], []],
    'ns_admin_to_action' => [[], ['_controller' => 'App\\Controller\\Admin\\CallToActionController::index'], [], [['text', '/admin/call-to-action']], [], [], []],
    'ns_admin_to_action_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CallToActionController::add'], [], [['text', '/admin/call-to-action/new']], [], [], []],
    'ns_admin_homepage' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'ns_admin_forun' => [[], ['_controller' => 'App\\Controller\\Admin\\ForumController::listAction'], [], [['text', '/admin/forums']], [], [], []],
    'ns_admin_forun_add_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ForumController::addAction'], [], [['text', '/admin/forums/new']], [], [], []],
    'ns_admin_forun_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ForumController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/forums']], [], [], []],
    'ns_admin_scenes' => [[], ['_controller' => 'App\\Controller\\Admin\\SceneController::listAction'], [], [['text', '/admin/scenes']], [], [], []],
    'ns_admin_view_proposed_scenes' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SceneController::viewAction'], [], [['text', '/view-proposed'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/scenes']], [], [], []],
    'ns_admin_activate_scenes' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SceneController::validateAction'], [], [['text', '/validate'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/scenes']], [], [], []],
    'ns_admin_storyline' => [[], ['_controller' => 'App\\Controller\\Admin\\StoryController::listAction'], [], [['text', '/admin/storylines']], [], [], []],
    'ns_admin_top_authors' => [[], ['_controller' => 'App\\Controller\\Admin\\TopAuthorsController::index'], [], [['text', '/admin/top-authors']], [], [], []],
    'ns_admin_top_authors_new' => [[], ['_controller' => 'App\\Controller\\Admin\\TopAuthorsController::add'], [], [['text', '/admin/top-authors/new']], [], [], []],
    'conversations.newConversations' => [[], ['_controller' => 'App\\Controller\\ConversationController::index'], [], [['text', '/conversations/']], [], [], []],
    'conversations.getConversations' => [[], ['_controller' => 'App\\Controller\\ConversationController::getConvs'], [], [['text', '/conversations/']], [], [], []],
    'connect_facebook_start' => [[], ['_controller' => 'App\\Controller\\FacebookController::connectAction'], [], [['text', '/connect/facebook']], [], [], []],
    'connect_facebook_check' => [[], ['_controller' => 'App\\Controller\\FacebookController::connectCheckAction'], [], [['text', '/connect/facebook/check']], [], [], []],
    'app_forum_show' => [['id'], ['_controller' => 'App\\Controller\\ForumController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forum']], [], [], []],
    'ns_web_forums_display' => [[], ['_controller' => 'App\\Controller\\ForumController::list'], [], [['text', '/forums']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\MainController::register'], [], [['text', '/register']], [], [], []],
    'app_registration_confirm' => [['token'], ['_controller' => 'App\\Controller\\MainController::confirmation'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/registration/confirm']], [], [], []],
    'app_forum_menu' => [[], ['_controller' => 'App\\Controller\\MainController::forumMenu'], [], [['text', '/menu/forum']], [], [], []],
    'app_forum_slider' => [[], ['_controller' => 'App\\Controller\\MainController::forumSlider'], [], [['text', '/slider/forum']], [], [], []],
    'ns_web_how_it_works' => [[], ['_controller' => 'App\\Controller\\MainController::how'], [], [['text', '/how-it-works']], [], [], []],
    'ns_web_contact' => [[], ['_controller' => 'App\\Controller\\MainController::contact'], [], [['text', '/contact-us']], [], [], []],
    'ns_web_terms_of_use' => [[], ['_controller' => 'App\\Controller\\MainController::term'], [], [['text', '/terms-of-use']], [], [], []],
    'app_edit_profile' => [[], ['_controller' => 'App\\Controller\\MainController::editProfile'], [], [['text', '/user/edit-profile']], [], [], []],
    'app_podcasts' => [[], ['_controller' => 'App\\Controller\\PodcastController::index'], [], [['text', '/podcasts']], [], [], []],
    'app_podcast_new' => [[], ['_controller' => 'App\\Controller\\PodcastController::add'], [], [['text', '/podcasts/new']], [], [], []],
    'ns_web_proposed_scenes_view' => [['id'], ['_controller' => 'App\\Controller\\ProposedSceneController::viewAction'], [], [['text', '/view-proposed-scene'], ['variable', '/', '[^/]++', 'id', true], ['text', '/scenes']], [], [], []],
    'ns_web_validate_scenes' => [['id'], ['_controller' => 'App\\Controller\\ProposedSceneController::validateAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scenes/validate']], [], [], []],
    'ns_web_scenes_view' => [['id'], ['_controller' => 'App\\Controller\\SceneController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scenes/view']], [], [], []],
    'ns_web_scenes_edit' => [['id'], ['_controller' => 'App\\Controller\\SceneController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scenes/edit']], [], [], []],
    'ns_web_scenes_add' => [['id'], ['_controller' => 'App\\Controller\\SceneController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scenes/add']], [], [], []],
    'ns_web_scenes_read' => [['id'], ['_controller' => 'App\\Controller\\SceneController::readAction'], [], [['text', '/read'], ['variable', '/', '[^/]++', 'id', true], ['text', '/scenes']], [], [], []],
    'app_story_create' => [[], ['_controller' => 'App\\Controller\\StoryController::index'], [], [['text', '/story']], [], [], []],
    'ns_web_story_new_scene' => [['id'], ['_controller' => 'App\\Controller\\StoryController::createScene'], [], [['text', '/new/first-scene'], ['variable', '/', '[^/]++', 'id', true], ['text', '/story']], [], [], []],
    'ns_web_story_view' => [['id'], ['_controller' => 'App\\Controller\\StoryController::view'], [], [['text', '/view'], ['variable', '/', '[^/]++', 'id', true], ['text', '/story']], [], [], []],
    'ns_web_story_edit' => [['id'], ['_controller' => 'App\\Controller\\StoryController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/story/edit']], [], [], []],
    'ns_web_read_story' => [['id'], ['_controller' => 'App\\Controller\\StoryController::read'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/story/read']], [], [], []],
];