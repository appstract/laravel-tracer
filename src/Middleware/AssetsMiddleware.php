<?php

namespace Appstract\Tracer\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AssetsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
    	$response = $next($request);
    	$content = $response->content();

    	$content = str_replace(
    		'</head>',
    		'<link href="/css/laravel-tracer.css" rel="stylesheet">
             <script type="text/javascript" src="/js/laravel-tracer.js"></script>
             </head>',
    		$content
    	);

    	return $response->setContent($content);
    }
}