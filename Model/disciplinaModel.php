<?php

class Disciplina{
    private $idDisc;
    private $cursoDisc;
    private $diaDisc;
    private $idProf;
    private $horarioDisc;
    private $nomeDisc;

    //Gets e Sets
    public function getIdDisc(){
        return $this->idDisc;
    }
    public function setIdDisc($idDisc){
        $this->idDisc = $idDisc;
    }

    public function getCursoDisc(){
        return $this->cursoDisc;
    }
    public function setCursoDisc($cursoDisc){
        $this->cursoDisc = $cursoDisc;
    }

    public function getDiaDisc(){
        return $this->diaDisc;
    }
    public function setDiaDisc($diaDisc){
        $this->diaDisc = $diaDisc;
    }

    public function getIdProf(){
        return $this->idProf;
    }
    public function setIdProf($idProf){
        $this->idProf = $idProf;
    }

    public function getHorarioDisc(){
        return $this->horarioDisc;
    }
    public function setHorarioDisc($horarioDisc){
        $this->horarioDisc = $horarioDisc;
    }

    public function getNomeDisc(){
        return $this->nomeDisc;
    }
    public function setNomeDisc($nomeDisc){
        $this->nomeDisc = $nomeDisc;
    }
}