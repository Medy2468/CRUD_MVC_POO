<div class="row">
    <span class="h3">Liste des contacts</span>
    <span class="offset-8">
    <a href="/Mes projets/CRUD_MVC_POO/index.php?view=add" class="btn btn-primary">Nouveau</a>
    </span>
</div>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                foreach($contacts as $c){ ?>
                <tr>
                    <td><?= $c['id']?></td>
                    <td><?= $c['prenom']?></td>
                    <td><?= $c['nom']?></td>
                    <td><?= $c['tel']?></td>
                    <td>
                        <a href="/Mes projets/CRUD_MVC_POO/index.php?view=update&id=<?=$c['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/Mes projets/CRUD_MVC_POO/index.php?action=supprimer&id=<?=$c['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
            </tr>
                <?php
                     }
                ?>

               
            
        </tbody>
    </table>
</div>