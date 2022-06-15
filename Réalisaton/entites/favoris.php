<?php 

class favoris{

    private $id;
    private $userReference;

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

}