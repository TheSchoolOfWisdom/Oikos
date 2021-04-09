<h1>Les catégories</h1>
<table class="oikos-table">

    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($resultats as $key => $value){ ?>

        <tr>

            <td> <?= ''.$value['id'].'' ?>
            </td>
            <td>

                <div>
                    <?= ''.$value['title'].'' ?>
                    <a class="edit-button" href="?controllers=categories&method=edit&id=<?= ''.$value['id'].'' ?>">
                        <div></div>
                    </a>
                </div>
            </td>

            <td> <?= ''.$value['description'].'' ?>
            </td>

            <td>
                <a onclick="return confirm('Voulez-vous vraiment supprimer la categorie <?= ''.$value['title'].'' ?>?')" href="?controllers=categories&method=delete&id=<?= ''.$value['id'].'' ?>">
                    <div class="del-button"></div>
                </a>
            </td>

        </tr>

    <?php } ?>

    </tbody>
</table>

<div class="success-btn">
    <a href="?controllers=categories&method=add">Créer une catégorie</a>
</div>