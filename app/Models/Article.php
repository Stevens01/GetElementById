<?php

namespace App\Models;

class  Article extends Model{

    protected $table ='article';
    public $contenu = 'contenu';

    public function getExcerpt(): string{

        return substr($this->contenu, 0, 200).'....';
    }
    /*public function getButton(int $id): string
    {
        return <<<HTML
        
         <a href="/posts/$id ?>"><button class="class btn btn-primary">Lire plus</button></a>
        HTML;
    }*/
    public function getButton(): string{
        

    }

    public function ajout($titre,$contenu,$createAt){
        $req = $this->db->getPDO()->prepare("INSERT INTO {$this->table}(titre, contenu,createAt) 
         VALUES ('" .$titre."' ,'".$contenu."','".$createAt."')");
         $req->execute();
    }
    
    
}
?>
