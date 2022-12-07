<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'nucleos_user_security_login', '_controller' => 'Nucleos\\UserBundle\\Action\\LoginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'nucleos_user_security_check', '_controller' => 'Nucleos\\UserBundle\\Action\\CheckLoginAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'nucleos_user_security_logout', '_controller' => 'Nucleos\\UserBundle\\Action\\LogoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'nucleos_user_resetting_request', '_controller' => 'Nucleos\\UserBundle\\Action\\RequestResetAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'nucleos_user_resetting_send_email', '_controller' => 'Nucleos\\UserBundle\\Action\\SendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'nucleos_user_resetting_check_email', '_controller' => 'Nucleos\\UserBundle\\Action\\CheckEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting' => [[['_route' => 'nucleos_user_resetting', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController', 'route' => 'nucleos_user_resetting_request', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
        '/security/change-password' => [[['_route' => 'nucleos_user_change_password', '_controller' => 'Nucleos\\UserBundle\\Action\\ChangePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deletetion/delete' => [[['_route' => 'nucleos_user_delete_account', '_controller' => 'Nucleos\\UserBundle\\Action\\AccountDeletionAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/call-to-action' => [[['_route' => 'ns_admin_to_action', '_controller' => 'App\\Controller\\Admin\\CallToActionController::index'], null, null, null, false, false, null]],
        '/admin/call-to-action/new' => [[['_route' => 'ns_admin_to_action_new', '_controller' => 'App\\Controller\\Admin\\CallToActionController::add'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'ns_admin_homepage', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/forums' => [[['_route' => 'ns_admin_forun', '_controller' => 'App\\Controller\\Admin\\ForumController::listAction'], null, null, null, false, false, null]],
        '/admin/forums/new' => [[['_route' => 'ns_admin_forun_add_new', '_controller' => 'App\\Controller\\Admin\\ForumController::addAction'], null, null, null, false, false, null]],
        '/admin/scenes' => [[['_route' => 'ns_admin_scenes', '_controller' => 'App\\Controller\\Admin\\SceneController::listAction'], null, null, null, false, false, null]],
        '/admin/storylines' => [[['_route' => 'ns_admin_storyline', '_controller' => 'App\\Controller\\Admin\\StoryController::listAction'], null, null, null, false, false, null]],
        '/admin/top-authors' => [[['_route' => 'ns_admin_top_authors', '_controller' => 'App\\Controller\\Admin\\TopAuthorsController::index'], null, null, null, false, false, null]],
        '/admin/top-authors/new' => [[['_route' => 'ns_admin_top_authors_new', '_controller' => 'App\\Controller\\Admin\\TopAuthorsController::add'], null, null, null, false, false, null]],
        '/conversations' => [
            [['_route' => 'conversations.newConversations', '_controller' => 'App\\Controller\\ConversationController::index'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'conversations.getConversations', '_controller' => 'App\\Controller\\ConversationController::getConvs'], null, ['GET' => 0], null, true, false, null],
        ],
        '/connect/facebook' => [[['_route' => 'connect_facebook_start', '_controller' => 'App\\Controller\\FacebookController::connectAction'], null, null, null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\FacebookController::connectCheckAction'], null, null, null, false, false, null]],
        '/forums' => [[['_route' => 'ns_web_forums_display', '_controller' => 'App\\Controller\\ForumController::list'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\MainController::register'], null, null, null, false, false, null]],
        '/menu/forum' => [[['_route' => 'app_forum_menu', '_controller' => 'App\\Controller\\MainController::forumMenu'], null, null, null, false, false, null]],
        '/slider/forum' => [[['_route' => 'app_forum_slider', '_controller' => 'App\\Controller\\MainController::forumSlider'], null, null, null, false, false, null]],
        '/how-it-works' => [[['_route' => 'ns_web_how_it_works', '_controller' => 'App\\Controller\\MainController::how'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'ns_web_contact', '_controller' => 'App\\Controller\\MainController::contact'], null, null, null, false, false, null]],
        '/terms-of-use' => [[['_route' => 'ns_web_terms_of_use', '_controller' => 'App\\Controller\\MainController::term'], null, null, null, false, false, null]],
        '/user/edit-profile' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\MainController::editProfile'], null, null, null, false, false, null]],
        '/podcasts' => [[['_route' => 'app_podcasts', '_controller' => 'App\\Controller\\PodcastController::index'], null, null, null, false, false, null]],
        '/podcasts/new' => [[['_route' => 'app_podcast_new', '_controller' => 'App\\Controller\\PodcastController::add'], null, null, null, false, false, null]],
        '/story' => [[['_route' => 'app_story_create', '_controller' => 'App\\Controller\\StoryController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/re(?'
                    .'|setting/reset/([^/]++)(*:70)'
                    .'|gistration/confirm/([^/]++)(*:104)'
                .')'
                .'|/admin/(?'
                    .'|forums/([^/]++)/edit(*:143)'
                    .'|scenes/([^/]++)/v(?'
                        .'|iew\\-proposed(*:184)'
                        .'|alidate(*:199)'
                    .')'
                .')'
                .'|/forum/([^/]++)(*:224)'
                .'|/s(?'
                    .'|cenes/(?'
                        .'|([^/]++)/view\\-proposed\\-scene(*:276)'
                        .'|v(?'
                            .'|alidate/([^/]++)(*:304)'
                            .'|iew/([^/]++)(*:324)'
                        .')'
                        .'|edit/([^/]++)(*:346)'
                        .'|add/([^/]++)(*:366)'
                        .'|([^/]++)/read(*:387)'
                    .')'
                    .'|tory/(?'
                        .'|([^/]++)/(?'
                            .'|new/first\\-scene(*:432)'
                            .'|view(*:444)'
                        .')'
                        .'|edit/([^/]++)(*:466)'
                        .'|read/([^/]++)(*:487)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'nucleos_user_resetting_reset', '_controller' => 'Nucleos\\UserBundle\\Action\\ResetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        104 => [[['_route' => 'app_registration_confirm', '_controller' => 'App\\Controller\\MainController::confirmation'], ['token'], null, null, false, true, null]],
        143 => [[['_route' => 'ns_admin_forun_edit', '_controller' => 'App\\Controller\\Admin\\ForumController::editAction'], ['id'], null, null, false, false, null]],
        184 => [[['_route' => 'ns_admin_view_proposed_scenes', '_controller' => 'App\\Controller\\Admin\\SceneController::viewAction'], ['id'], null, null, false, false, null]],
        199 => [[['_route' => 'ns_admin_activate_scenes', '_controller' => 'App\\Controller\\Admin\\SceneController::validateAction'], ['id'], null, null, false, false, null]],
        224 => [[['_route' => 'app_forum_show', '_controller' => 'App\\Controller\\ForumController::index'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'ns_web_proposed_scenes_view', '_controller' => 'App\\Controller\\ProposedSceneController::viewAction'], ['id'], null, null, false, false, null]],
        304 => [[['_route' => 'ns_web_validate_scenes', '_controller' => 'App\\Controller\\ProposedSceneController::validateAction'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'ns_web_scenes_view', '_controller' => 'App\\Controller\\SceneController::view'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'ns_web_scenes_edit', '_controller' => 'App\\Controller\\SceneController::edit'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'ns_web_scenes_add', '_controller' => 'App\\Controller\\SceneController::add'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'ns_web_scenes_read', '_controller' => 'App\\Controller\\SceneController::readAction'], ['id'], null, null, false, false, null]],
        432 => [[['_route' => 'ns_web_story_new_scene', '_controller' => 'App\\Controller\\StoryController::createScene'], ['id'], null, null, false, false, null]],
        444 => [[['_route' => 'ns_web_story_view', '_controller' => 'App\\Controller\\StoryController::view'], ['id'], null, null, false, false, null]],
        466 => [[['_route' => 'ns_web_story_edit', '_controller' => 'App\\Controller\\StoryController::edit'], ['id'], null, null, false, true, null]],
        487 => [
            [['_route' => 'ns_web_read_story', '_controller' => 'App\\Controller\\StoryController::read'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
