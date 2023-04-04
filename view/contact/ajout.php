<div class="card">
    <div class="card-header">
        <span class="h3">Nouveau contact</span>
        <span class="offset-6"></span>
        <a href="/Mes projets/CRUD_MVC_POO/index.php" class="btn btn-warning">Liste de contacts</a>
    </div>
    <div class="card-body">
        <form action="/Mes projets/CRUD_MVC_POO/index.php?action=add" method="post">
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                <label for="">Téléphone</label>
                <input type="text" class="form-control" name="tel">
            </div>
            <div class="row">
                <input type="submit" name="add" class="btn btn-primary" value="Enregistrer" >
            </div>
        </form>
    
    </div>
</div>