<?php

namespace OCA\LocHist\AppInfo;

$application = new Application();
$application->registerRoutes($this, [
    'routes' => [
        [
            // The handler is the PageController's index method
            'name' => 'page#index',
            // The route
            'url' => '/',
            // Only accessible with GET requests
            'verb' => 'GET'
        ],
    ]
]);
