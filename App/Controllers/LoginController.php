<?php

namespace App\Controllers;

class LoginController {
    public function index() {
        return require_once __DIR__ . '/../Views/login.php';
    }

    public function autorizarLogin(){
        try{

            $_POST['email'] ??= null;
            $_POST['senha'] ??= null;

            if(!$_POST['email'] || !$_POST['senha']){
                throw new Exception("Obrigatório inserir email e senha");
            }

            $usuario = Usuario::where([
                ['email', '=', $_POST['email']],
                ['senha', '=', sha1(md5($_POST['senha']))]
            ])->first();

            if(!$usuario){
                throw new Exception("Credenciais incorretas");
            }

            $_SESSION['logado'] = true;
            $_SESSION['email']  = $usuario->email;
            $_SESSION['nome']   = $usuario->nome;
       
            return redirect('/')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            echo($e->getMessage());
        }
    }
}