<?php

class catrec{
    public int $id_catrec;
    public string $nom_catrec;
   
    
    public function __construct(int $id_catrec,string $nom_catrec) //instantiation mta catrec
    {
        $this->id_catrec=$id_catrec;
        $this ->nom_catrec=$nom_catrec;     
        
    } 

    public function get_id_catrec()
    {
        return $this->id_catrec;
    }
    public function get_nom_catrec()
    {
        return $this->nom_catrec;
    }
    

}

?>