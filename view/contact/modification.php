
<div class="card">
    <div class="card-header">
        <span class="h3">Modiication contact</span>
        <span class="offset-6"></span>
        <a href="/Mes projets/CRUD_MVC_POO/index.php" class="btn btn-warning">Liste de contacts</a>
    </div>
    <div class="card-body">
        <form action="/Mes projets/CRUD_MVC_POO/index.php?action=modifier" method="post">
            <input type="hidden" name= "id" value="<?= $contacts['id']?>">
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?= $contacts['prenom']?>">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $contacts['nom']?>">
            </div>
            <div class="form-group">
                <label for="">Téléphone</label>
                <input type="text" class="form-control" name="tel" value="<?= $contacts['tel']?>">
            </div>
            <div class="row">
                <input type="submit" name="modif" class="btn btn-primary" value="Enregistrer" >
            </div>
        </form>
    
    </div>
</div>