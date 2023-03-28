<?php

namespace App\Controllers;
use App\Models\Article;

class BlogController extends Controller
{
    public function index (){
        
        return $this->view('blog.index');
    }
    public function welcome(){
        $article = new Article($this->db);
        $articles = $article->read();
    
        return $this->view('blog.welcome',compact('articles'));

    }

    public function show (int $id)
    {
    
        $article = new Article($this->db);
        $article = $article->findById($id);
        
        return $this->view('blog.show', compact('article'));
    }
    public function inscription(){
        return $this->view('blog.Creer');
    }
    public function enregistrer(){

        if(!empty($_POST)){
            extract($_POST);
            $valide=true;
        
            if(isset($_POST['btnS'])){
        
              $titre=htmlentities(trim($titre));
              $contenu=htmlentities(trim($contenu));
              $createAt=htmlentities(trim($createAt));
                 
               if(!empty($titre) || !empty($contenu) || !empty($createAt)){
               
                        $notification=true;

                        $article = new Article($this->db);
                        $article = $article->ajout($titre,$contenu,$createAt);

                        header('location: /posts');

                  
        
               } else
                {
                $valide=false;
              }
        
               
            }
          
            }  
}
}
