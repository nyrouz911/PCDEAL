<?php

class reclamation{
    public int $id_rec;
    public string $desc_rec;
    public string $etat_rec;
    public bool $traiter_rec;
   
    
    public function __construct(string $desc_rec, string $etat_rec, bool $traiter_rec) //instantiation mta reclamation 
    {
       // $this->id_rec=$id_rec;
        $this ->desc_rec=$desc_rec;  
        $this ->etat_rec=$etat_rec; 
        $this ->traiter_rec=$traiter_rec ; 
        
    } 

    public function get_id_rec()
    {
        return $this->id_rec;
    }
    public function get_desc_rec()
    {
        return $this->desc_rec;
    }
    public function get_etat_rec()
    {
        return $this->etat_rec;
    }
    public function get_traiter_rec()
    {
        return $this->traiter_rec;
    }
    

}

?>


