<?php
namespace app\core;

use app\controllers\Controller;

class Application
{
    public static $ROOT_DIR;
    public Router $router; 
    public Controller $controller; 
    public Request $request; 
    public Response $response;

    public static $app; 

    public function __construct(string $rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request(); 
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response); 
    }


    public function run()
    {
        echo $this->router->resolve();
    }
}