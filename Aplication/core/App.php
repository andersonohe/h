<?php
    class app{
        protected $controller = 'HomeController';
        protected $method = 'index';
        protected $page404 = 'false';
        protected $params = [];

        public function __construct(){
          $url_array = $this->parse_Url();
          $this->getControllerFromUrl( $url_array);
          $this->getMethodFromUrl( $url_array );
          $this ->getParamsFromUrl( $url_array );
        
          call_user_func_array([$this-> controller, $this->method], $this->params);

        }

        public function parseUrl(){

            $REQUEST_Url = explode('/', substr(filter_input(INPUT_SERVER,'Request_Url'),1));

        }

        public function getControllerFromUrl($url){

            if(!empty($url[0]) && isset($url[0])){
                if(file_exists('../Aplication/controllers/'
                .ucfirst($url[0]). 'Controle.php')){
                    $this->controller = ucfirst($url[0]).'cotroller';
                }else{
                    $this->page404= true;
                }
            }
            require_once'../Aplication/controllers/' . 
            $this ->controller.'.php';
            $this ->controller = new $this->controller();
        }

        private function getMethodFromUrl($url){
            if(!empty($url[1])  && isset($url[1])){
                if(method_exists($this ->controller, $url[1]
                && !$this->page404) ){
               
                }else{
                    $this->method = 'pageNotFound';
            }
        }
    }
    private function getParamsFromUrl($url){
        if(count($url) > 2){
            $this->params = array_slice($url,2);
        }
    }
    }

?>