<?php 

class favorisLine
{
    private $idfavorisLine;
    private $idhotels;
    private $idfavoris;
   

    public function getIdfavorisLine()
    {
        return $this->idfavorisLine;

         }

         public function setIdfavorisLine($idfavorisLine)
         {
             $this->idfavorisLine = $idfavorisLine;
         }


            public function getIdhotels()
            {
                return $this->idhotels;
            }

            public function setIdhotels($idhotels)
            {
                $this->idhotels = $idhotels;
            }

            public function getIdfavoris()
            {
                return $this->idfavoris;
            }

            public function setIdfavoris($idfavoris)
            {
                $this->idfavoris = $idfavoris;
            }

       }