<?php

    class ajaxController extends Controller {

        private $accepted_actions = ['add','get','load','update','delete'];
        private $required_params = ['hook','action'];

        function __construct()
        {
            foreach ($this->required_params as $param) {

                if(!isset($_POST[$param])) {
                    json_output(json_build(403));
                }
            }
            if(!in_array($_POST['action'] , $this->accepted_actions)) {

                json_output(json_build(403));
            }
        }

        function index()
        {
            json_output(json_build(403));
        }

        function bee_add_usuario(){

            try{

                $usuario                = new usuarioModel();
                $usuario->nombre        =   $_POST['nombre'];
                $usuario->apellido      =   $_POST['apellido'];
                $usuario->sexo          =   $_POST['sexo'];
                $usuario->correo        =   $_POST['correo'];
                $usuario->check1        =   $_POST['check1'];
                $usuario->check2        =   $_POST['check2'];

                if(!$id = $usuario->add()){

                    json_output(json_build(400, null, "Hubo error al guardar el registro"));

                }

                $usuario->id = $id;

                json_output(json_build(201, $usuario));

            }catch(Exeption $e){

                json_output(json_build(400, null, $e->getMessage()));

            }

        }

    }




