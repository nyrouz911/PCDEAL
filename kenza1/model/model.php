<?php





class Article{

    private int $id; 
    private string $nom, $contenu, $ecrivain;

    public function __construct(int $id, string $nom, string $contenu, string $ecrivain){
        $this->id = $id;
        $this->nom = $nom;
        $this->contenu = $contenu;
        $this->ecrivain = $ecrivain;
    }

    public function getnom() {
        return $this->nom;
    }
    public function getcontenu() {
        return $this->contenu;
    }
    public function getecrivain() {
        return $this->ecrivain;
    }
    

    public function setnom($nom) {
         $this->nom = $nom;
    }
    public function setcontenu($contenu) {
        $this->contenu = $contenu;
    }
    public function setecrivain($ecrivain) {
         $this->ecrivain = $ecrivain;
    }
  

}


class Commentaire{

    private int $id, $id_user, $id_article; 
    private string $contenu;

    public function __construct($id, $id_user, $id_article, $contenu){
        $this->id = $id;
        $this->id_user = $id_user;
        $this->id_article = $id_article;
        $this->contenu = $contenu;
    }

    public function get_iduser() {
        return $this->id_user;
    }
    public function get_idarticle() {
        return $this->id_article;
    }
    public function get_contenu() {
        return $this->contenu;
    }

    


    public function setuser($user) {
        $this->id_user = $user;
    }
    public function set_idarticle($id) {
        $this->id_article = $id;
    }
    public function get_contenu($contenu) {
        $this->contenu = $contenu;
    }
  
  

}


?>  