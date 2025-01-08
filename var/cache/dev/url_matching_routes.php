<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/company' => [[['_route' => 'app_company_index', '_controller' => 'App\\Controller\\CompanyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/company/new' => [[['_route' => 'app_company_new', '_controller' => 'App\\Controller\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\LandingController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\LandingController::profi'], null, null, null, false, false, null]],
        '/editprofil' => [[['_route' => 'app_editprofil', '_controller' => 'App\\Controller\\LandingController::editprofil'], null, null, null, false, false, null]],
        '/dev' => [[['_route' => 'target_path', '_controller' => 'App\\Controller\\LandingController::homeLogin'], null, null, null, false, false, null]],
        '/langages' => [[['_route' => 'app_langages_index', '_controller' => 'App\\Controller\\LangagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/langages/new' => [[['_route' => 'app_langages_new', '_controller' => 'App\\Controller\\LangagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste' => [[['_route' => 'app_poste_index', '_controller' => 'App\\Controller\\PosteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/poste/new' => [[['_route' => 'app_poste_new', '_controller' => 'App\\Controller\\PosteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/postes' => [[['_route' => 'app_postes_index', '_controller' => 'App\\Controller\\PostesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/postes/new' => [[['_route' => 'app_postes_new', '_controller' => 'App\\Controller\\PostesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/company/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
                .'|/langages/([^/]++)(?'
                    .'|(*:110)'
                    .'|/edit(*:123)'
                    .'|(*:131)'
                .')'
                .'|/poste(?'
                    .'|/([^/]++)(?'
                        .'|(*:161)'
                        .'|/edit(*:174)'
                        .'|(*:182)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:204)'
                        .'|/edit(*:217)'
                        .'|(*:225)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_company_show', '_controller' => 'App\\Controller\\CompanyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_company_edit', '_controller' => 'App\\Controller\\CompanyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_company_delete', '_controller' => 'App\\Controller\\CompanyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'app_langages_show', '_controller' => 'App\\Controller\\LangagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_langages_edit', '_controller' => 'App\\Controller\\LangagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'app_langages_delete', '_controller' => 'App\\Controller\\LangagesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        161 => [[['_route' => 'app_poste_show', '_controller' => 'App\\Controller\\PosteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        174 => [[['_route' => 'app_poste_edit', '_controller' => 'App\\Controller\\PosteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        182 => [[['_route' => 'app_poste_delete', '_controller' => 'App\\Controller\\PosteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_postes_show', '_controller' => 'App\\Controller\\PostesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        217 => [[['_route' => 'app_postes_edit', '_controller' => 'App\\Controller\\PostesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        225 => [
            [['_route' => 'app_postes_delete', '_controller' => 'App\\Controller\\PostesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
