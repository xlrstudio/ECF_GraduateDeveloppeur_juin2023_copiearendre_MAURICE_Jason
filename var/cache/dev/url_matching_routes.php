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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/adminControllereu' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/post' => [[['_route' => 'post.index', '_controller' => 'App\\Controller\\Blog\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/find-user' => [[['_route' => 'app_finduser_find', '_controller' => 'App\\Controller\\FindUserController::find'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient' => [[['_route' => 'ingredient.index', '_controller' => 'App\\Controller\\IngredientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient/creation' => [[['_route' => 'ingredient.new', '_controller' => 'App\\Controller\\IngredientController::new'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/recette' => [[['_route' => 'recipe.index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/recette/communaute' => [[['_route' => 'recipe.community', '_controller' => 'App\\Controller\\RecipeController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/recette/creation' => [[['_route' => 'recipe.new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\RegistrationController::notification'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/accueil' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'carte', '_controller' => 'App\\Controller\\MenuController::menu'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::reservation'], null, null, null, false, false, null]],
        '/connection' => [[['_route' => 'connection', '_controller' => 'App\\Controller\\ConnectionController::connection'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\MentionsController::mentions'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::test'], null, null, null, false, false, null]],
        '/formulaire' => [[['_route' => 'formulaire', '_controller' => 'App\\Controller\\FormController::index'], null, null, null, false, false, null]],
        '/contacter' => [[['_route' => 'validation', '_controller' => 'App\\Controller\\ValidationController::validation'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:194)'
                    .'|rticle/([^/]++)(*:217)'
                .')'
                .'|/c(?'
                    .'|ategories/([^/]++)(*:249)'
                    .'|omment/([^/]++)(*:272)'
                .')'
                .'|/etiquettes/([^/]++)(*:301)'
                .'|/ingredient/(?'
                    .'|edition/([^/]++)(*:340)'
                    .'|suppression/([^/]++)(*:368)'
                .')'
                .'|/like/article/([^/]++)(*:399)'
                .'|/recette/(?'
                    .'|edition/([^/]++)(*:435)'
                    .'|suppression/([^/]++)(*:463)'
                    .'|([^/]++)(*:479)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:520)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:553)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        217 => [[['_route' => 'post.show', '_controller' => 'App\\Controller\\Blog\\PostController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        249 => [[['_route' => 'category.index', '_controller' => 'App\\Controller\\Blog\\CategoryController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'comment.delete', '_controller' => 'App\\Controller\\Blog\\CommentController::delete'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'tag.index', '_controller' => 'App\\Controller\\Blog\\TagController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'ingredient.edit', '_controller' => 'App\\Controller\\IngredientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        368 => [[['_route' => 'ingredient.delete', '_controller' => 'App\\Controller\\IngredientController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'like.post', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], ['GET' => 0], null, false, true, null]],
        435 => [[['_route' => 'recipe.edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        463 => [[['_route' => 'recipe.delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'recipe.show', '_controller' => 'App\\Controller\\RecipeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        520 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        553 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
