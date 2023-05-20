<?php 
class System{

    protected $controllerPath = ControllerPath;
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        if(isset($_GET["url"])){
            $url = explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
            if(isset($url[0])){
                $this->controller = $url[0];
                unset($url[0]);
            }
           
            if(file_exists(ControllerPath. "/".$this->controller. ".php")){
                require ControllerPath. "/". $this->controller.".php";  
                if(class_exists($this->controller)){
                    $this->controller = new $this->controller;
                    if(isset($url[1])){
                        $this->method = $url[1];
                        unset($url[1]);
                        if(method_exists($this->controller, $this->method)){
                            $this->params = $url;
                            call_user_func_array([$this->controller, $this->method], $this->params);
                            
                        }
                    }
                }
            }else{
                echo "File Not Found". "<br />";
            }
            
            
        }else{
            $url = "";
        }
       
        
    }
}