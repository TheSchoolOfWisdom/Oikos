<h1>Les articles</h1>

<table class="oikos-table">

    <thead>
        <tr>
            <?php $ordering = array("ID" => "id", "Titre" => "title", "Description" => "description", "Date de création" => "created") ?>

            <?php foreach ($ordering as $key => $value){ ?>

                <?php if (@$_GET['order'] == $value . '-down') { ?>

                    <th scope="col">
                        <div>
                            <a href="?controllers=articles&method=list&order=<?= $value ?>-up"><?= $key ?>
                            </a>
                            <a class="ordering-btn ordering-down">
                                <div>
                                </div>
                            </a>
                        </div>
                    </th>

                <?php } elseif (@$_GET['order'] == $value . '-up') { ?>

                    <th scope="col">
                        <div>
                            <a href="?controllers=articles&method=list&order=<?= $value ?>-down"><?= $key ?>
                            </a>
                            <a class="ordering-btn ordering-up">
                                <div>
                                </div>
                            </a>
                        </div>
                    </th>

                <?php } else { ?>

                    <th scope="col">
                        <div>
                            <a href="?controllers=articles&method=list&order=<?= $value ?>-up"><?= $key ?>
                            </a>
                        </div>
                    </th>

                <?php } ?>

            <?php } ?>

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
                        <a href="?controllers=articles&method=article&id=<?= ''.$value['id'].'' ?>"><?= ''.$value['title'].'' ?></a>
                        <a class="edit-button" href="?controllers=articles&method=edit&id=<?= ''.$value['id'].'' ?>">
                            <div></div>
                        </a>
                    </div>
                </td>

                <td> <?= ''.$value['description'].'' ?>
                </td>



                <td> <?= ''.$value['created'].'' ?>
                </td>

                <td>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer l\'article <?= ''.$value['title'].'' ?>?')" href="?controllers=articles&method=delete&id=<?= ''.$value['id'].'' ?>">
                        <div class="del-button"></div>
                    </a>
                </td>

            </tr>

        <?php } ?>

    </tbody>

</table>

<div class="success-btn">
    <a href="?controllers=articles&method=add">Créer un article</a>
</div>