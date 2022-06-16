<?php 

class favoris{

    private $id;
    private $userReference;
    private $favorisLineList = array();

    public function getId()
    { 
      return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserReference()
    {
        return $this->userReference;
    
    }

    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;
    }

    function setFavorisLineList($favorisLineList){
        array_push($this->favorisLineList, $favorisLineList);
    }

    function getFavorisLineList(){
        return $this->favorisLineList;
    }

}