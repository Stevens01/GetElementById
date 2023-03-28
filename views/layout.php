    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon blog</title>
        <link rel="stylesheet" href="<?=SCRIPTS .'css'.DIRECTORY_SEPARATOR .'app.css' ?>">
        <style>
            a{
                        text-decoration:none;
                        color:black;
                        
                        
            }
            .navbar-light {
                            }
            
        </style>
    </head>
    <body>
    <nav class="navbar-light navbar-expand-md sticky-top">
        <div class="container-fluid" style="background-color: aqua"> 
        <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
            <a class="nav-link" href="/inscription" >Creer un article</a>
            <a class="nav-link" href="/posts">Categorie</a>
            <a class="nav-link" href="/contacts">About</a>
            
        </div>
        </div>
    </div>
    </nav>

        <div class="class container">
            <?= $content ?>
        </div>
        </div>
    </body>
    </html>

