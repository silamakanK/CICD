<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/phpinfo' => [[['_route' => 'phpinfo', '_controller' => 'App\\Controller\\InfoController::phpinfoAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|t(?'
                            .'|a(?'
                                .'|gs/([^/\\.]++)(?:\\.([^/]++))?(*:152)'
                                .'|sks(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:192)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:218)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:253)'
                                .')'
                            .')'
                            .'|odolists(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:300)'
                                .'|(?:\\.([^/]++))?(*:323)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:363)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        152 => [[['_route' => '_api_/tags/{id}.{_format}_get', '_controller' => 'ApiPlatform\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_operation_name' => '_api_/tags/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => '_api_/tasks/{id}.{_format}_get', '_controller' => 'ApiPlatform\\Action\\NotFoundAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        218 => [
            [['_route' => '_api_/tasks.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tasks.{_format}_post', '_controller' => 'App\\Controller\\CreateTaskController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        253 => [[['_route' => '_api_/tasks/{id}.{_format}_put', '_controller' => 'App\\Controller\\UpdateTaskController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        300 => [[['_route' => '_api_/todolists/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Todolist', '_api_operation_name' => '_api_/todolists/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => '_api_/todolists.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Todolist', '_api_operation_name' => '_api_/todolists.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        363 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
