<?php

    class usuarioModel extends Model{

        public $id;
        public $nombre;
        public $apellido;
        public $sexo;
        public $correo;
        public $check1;
        public $check2;

        /**
         *
         * Model Usuario
         * @return @id
         */

        public function add(){
            $sql = 'INSERT INTO usuarios(nombre,apellido,sexo,correo,check1,check2) 
                VALUES(:nombre,:apellido,:sexo, :correo,:check1,:check2)';

            $user =
            [
                'nombre'    =>  $this->nombre,
                'apellido'  =>  $this->apellido,
                'sexo'      =>  $this->sexo,
                'correo'    =>  $this->correo,
                'check1'    =>  $this->check1,
                'check2'    =>  $this->check2
            ];

            try{
                return ($this->id = parent::query($sql, $user)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

                /**
         *
         * Model Usuario
         * @return Usuarios
         */

        
        public function all(){

            $sql = 'SELECT * FROM usuarios';

            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }
    }
