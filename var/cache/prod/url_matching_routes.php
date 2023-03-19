<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/adminController' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/find-user' => [[['_route' => 'app_finduser_find', '_controller' => 'App\\Controller\\FindUserController::find'], null, null, null, false, false, null]],
        '/ingredient' => [[['_route' => 'ingredient.index', '_controller' => 'App\\Controller\\IngredientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ingredient/creation' => [[['_route' => 'ingredient.new', '_controller' => 'App\\Controller\\IngredientController::new'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'recipe.index', '_controller' => 'App\\Controller\\RecipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/recette/communaute' => [[['_route' => 'recipe.community', '_controller' => 'App\\Controller\\RecipeController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/recette/creation' => [[['_route' => 'recipe.new', '_controller' => 'App\\Controller\\RecipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/autocomplete/([^/]++)(*:29)'
                .'|/ingredient/(?'
                    .'|edition/([^/]++)(*:67)'
                    .'|suppression/([^/]++)(*:94)'
                .')'
                .'|/recette/(?'
                    .'|edition/([^/]++)(*:130)'
                    .'|suppression/([^/]++)(*:158)'
                    .'|([^/]++)(*:174)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:215)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:248)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        67 => [[['_route' => 'ingredient.edit', '_controller' => 'App\\Controller\\IngredientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        94 => [[['_route' => 'ingredient.delete', '_controller' => 'App\\Controller\\IngredientController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'recipe.edit', '_controller' => 'App\\Controller\\RecipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        158 => [[['_route' => 'recipe.delete', '_controller' => 'App\\Controller\\RecipeController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        174 => [[['_route' => 'recipe.show', '_controller' => 'App\\Controller\\RecipeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        215 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        248 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
