<?php
namespace OCA\LocHist\AppInfo;

use \OCP\AppFramework\App;
use \OCA\LocHist\Controller\PageController;

class Application extends App {
    public function __construct(array $urlParams=array()){
        parent::__construct('LocHist', $urlParams);

        $container = $this->getContainer();
        $container->registerService('PageController', function($c) {
            return new PageController(
                $c->query('AppName'),
                $c->query('Request')
            );
        });
    }
}
