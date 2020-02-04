<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>À la dérive</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="#" class="navbar-brand">À la dérive</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#oblog-nav" aria-controls="oblog-nav" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
                
                  <nav class="collapse navbar-collapse justify-content-end" id="oblog-nav">
                    <ul class="navbar-nav">  
                        
                    <?php foreach ($dataCategoriesList as $categoryList) : ?>
                    <li class="nav-item"><a href="#" class="nav-link"><?= $categoryList->category ?></a></li>
                    <?php endforeach; ?>

                   

                     <!-- <li class="nav-item"><a href="#" class="nav-link">TeamBack</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">TeamFront</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Collaboration</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Ma vie de dev</a></li> -->
                      
                    </ul>
                  </nav>
        </nav>

        <section class="subheader text-center d-md-none">
            <h1>À la dérive</h1>
            <hr>
            <p>Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace</p>
        </section>
    </header>