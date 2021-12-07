<?php
    class forum
    {
            private $id=null;
            private $title=null;
            private $descr=null;
        

        function __construct($id,$title,$descr)
        {
            $this->id=$id;
            $this->title=$title;
            $this->descr=$descr;
        }

        function getid()
        {
            return $this->id;
        }
        function gettitle()
        {
            return $this->title;
        }
        function getdescr()
        {
            return $this->descr;
        }

        function settitle_q(string $title)
        {
            $this->title=$title;
        }
        function setdescr(string $descr)
        {
            $this->descr=$descr;
        }
        
    }
 
 ?>