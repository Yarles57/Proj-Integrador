<?php

    class Disciplina{
        private $idDisc;
        private $cursoDisc; //$cursoDisc recebe o nomeDisc enviado pelo <option>
        private $nomeDisc;
        private $siglaDisc;

        public function getIdDisc(){
            return $this->idDisc;
        }
        
        public function setIdDisc($idDisc){
            return $this->idDisc = $idDisc;
        }

        public function getCursoDisc(){
            return $this->cursoDisc;
        }
        
        public function setCursoDisc($cursoDisc){
            return $this->cursoDisc = $cursoDisc;
        }

        public function getNomeDisc(){
            return $this->nomeDisc;
        }
        
        public function setNomeDisc($nomeDisc){
            return $this->nomeDisc = $nomeDisc;
        }

        public function getSiglaDisc(){
            return $this->siglaDisc;
        }
        
        public function setSiglaDisc($siglaDisc){
            return $this->siglaDisc = $siglaDisc;
        }
}