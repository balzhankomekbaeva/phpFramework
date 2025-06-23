<?php

namespace Somecode\Framework\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $routes = BASE_PATH.'/routes/web.php';

        $dispatcher = simpleDispatcher(function (RouteCollector $collector) {
            //            $collector->get('/public/', function () {
            //                $content = '<h1>Balzhan, good luck</h1>';
            //
            //                return new Response($content);
            //            });
            //
            //            $collector->get('/public/posts/{id}', function (array $vars) {
            //                $content = "<h1>Post - {$vars['id']}</h1>";
            //
            //                return new Response($content);
            //            });
        });

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPath()
        );

        //        if ($routeInfo[0] !== \FastRoute\Dispatcher::FOUND) {
        //            return new Response('404 Not Found', 404);
        //        }

        [$status, [$controller, $method], $vars] = $routeInfo;

        $responce = call_user_func_array([new $controller, $method], $vars);

        return $responce;
    }
}
