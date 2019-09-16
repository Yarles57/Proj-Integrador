<?php

class Professo{
    private $idProf;
    private $loginProf;
    private $senhaProf;
    private $cursoProf;
    private $emailProf;
    private $celProf;

    public function getIdProf(){
        return $this->idProf;
    }
    public function setIdProf($idProf){
        $this->idProf = $idProf;
    }

    public function getLoginProf(){
        return $this->logProf;
    }
    public function setLoginProf($loginProf){
        $this->loginProf = $loginProf;
    }
}