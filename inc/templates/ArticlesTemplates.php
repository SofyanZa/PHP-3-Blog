<main class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-md-10 col-lg-8 oblog-articles">
            
                     <article class="card">
                     <div class="card-body">
                        <h2 class="card-title"><?= $article->title ?></h2>
                         <p class="card-text"><?= $article->content ?></p>
                    </div>
                    </article>
                           
                
                <nav class="border-top" aria-label="Pagination des articles">
                    <ul class="pagination justify-content-between">
                        <li class="page-item"><a href="index.php" class="page-link">← Précédent</a></li>
                    </ul>
                </nav>
            </section>
            <section class="d-none d-lg-block col-lg-4 oblog-sidebar">
                <form action="">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" name="" id="" placeholder="Recherche">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-secondary">Allez</button>
                        </div>
                    </div>
                </form>
                <div class="card mb-3">
                    <div class="card-header">
                        Catégories
                    </div>
                    <ul class="list-group list-group-flush">
                    <?php foreach ($dataCategoriesList as $categoryList) : ?>
                    <li class="list-group-item"><?= $categoryList->category ?></li>
                    
                    <?php endforeach; ?>
                </ul>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        Auteurs
                    </div>
                    <ul class="list-group list-group-flush text-lowercase">
                    <?php foreach ($dataAuthorsList as $authorName) : ?>
                    <li class="list-group-item"><?= $authorName->author ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        </section>
    </main>

    