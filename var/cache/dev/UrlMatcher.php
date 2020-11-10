<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::home'], null, null, null, false, false, null]],
        '/article/news' => [[['_route' => 'create', '_controller' => 'App\\Controller\\ArticleController::form'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'security_dashboard', '_controller' => 'App\\Controller\\ArticleController::dashboard'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticleController::articles'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_controller' => 'App\\Controller\\ArticleController::sitemap'], null, null, null, false, false, null]],
        '/Success_com' => [[['_route' => 'success_com', '_controller' => 'App\\Controller\\ArticleController::SuccessCom'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ArticleController::contact'], null, null, null, false, false, null]],
        '/contact/error/mail' => [[['_route' => 'error_contact', '_controller' => 'App\\Controller\\ArticleController::errorContact'], null, null, null, false, false, null]],
        '/Success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\ArticleController::Success'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/RGPD' => [[['_route' => 'rgpd', '_controller' => 'App\\Controller\\SecurityController::rgpd'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mention_legal', '_controller' => 'App\\Controller\\SecurityController::mentions'], null, null, null, false, false, null]],
        '/404' => [[['_route' => '404', '_controller' => 'App\\Controller\\SecurityController::notFound'], null, null, null, false, false, null]],
        '/security_logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/article/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:200)'
                            .'|like(*:212)'
                        .')'
                        .'|(*:221)'
                    .')'
                    .'|remove/comment/([^/]++)(*:253)'
                .')'
                .'|/d(?'
                    .'|ashboard/user/(?'
                        .'|([^/]++)(*:292)'
                        .'|delete/([^/]++)(*:315)'
                    .')'
                    .'|elete/user/([^/]++)(*:343)'
                .')'
                .'|/modif/pass/user/([^/]++)(*:377)'
                .'|/user/([^/]++)/articles(*:408)'
                .'|/contact/user/([^/]++)(*:438)'
                .'|/remove/article/([^/]++)(*:470)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\ArticleController::form'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'article_like', '_controller' => 'App\\Controller\\ArticleController::like'], ['id'], null, null, false, false, null]],
        221 => [[['_route' => 'show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\ArticleController::deleteCommentUserById'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'show_user', '_controller' => 'App\\Controller\\ArticleController::showUser'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\ArticleController::removeUser'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'delete_user_id', '_controller' => 'App\\Controller\\ArticleController::removeUserId'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'modif_pass', '_controller' => 'App\\Controller\\ArticleController::modifPass'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'my_articles', '_controller' => 'App\\Controller\\ArticleController::showArticlesByUser'], ['name'], null, null, false, false, null]],
        438 => [[['_route' => 'contact_user', '_controller' => 'App\\Controller\\ArticleController::contactUser'], ['id'], null, null, false, true, null]],
        470 => [
            [['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticleController::deleteArticleById'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
