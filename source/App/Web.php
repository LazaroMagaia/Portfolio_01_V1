<?php
    namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
class Web{
        private $view;
        public function __construct()
        {
            $this->view = Engine::create("theme","php");
        }
        public function home(): void{
            $users = (new User())->find()->fetch(true);//busca todo na tabela user
            echo $this->view->render("home",[
                "title"=>"Home | ".SITE,
                "users" =>$users
            ]);
        }        
        public function contacto(): void{
            echo $this->view->render("contacto",[
                "title"=>"Contacto | ".SITE,
            ]);
        }
        public function error(array $data):void {
            echo $this->view->render("error",[
                "title"=>"Erro {$data["errcode"]} | ".SITE,
                "Error" => $data["errcode"]
            ]);
        }
    }
?>