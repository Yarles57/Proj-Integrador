<?php

    class Reserva{
        private $idReserva;
        private $dataReserva;
        private $horaReserva;
        private $statusReserva;
        private $justificativaReserva;
        private Curso $idCurso;
    

        public function getIdRes(){
            return $this->idRes;
        }

        public function setIdRes($idRes){
            $this->idRes = $idRes;
        }


        public function getDataRes(){
            return $this->dataRes;
        }

        public function setDataRes($dataRes){
            $this->dataRes = $dataRes;
        }


        public function getHoraRes(){
            return $this->horaRes;
        }

        public function setHoraRes($horaRes){
            $this->horaRes = $horaRes;
        }


        public function getIdProf(){
            return $this->idProf;
        }

        public function setIdProf($idProf){
            $this->idProf = $idProf;
        }


        public function getIdLab(){
            return $this->idLab;
        }

        public function setIdLab($idLab){
            $this->idLab = $idLab;
        }


        public function getIdAdmin(){
            return $this->idAdmin;
        }

        public function setIdAdmin($idAdmin){
            $this->idAdmin = $idAdmin;
        }
        
    }