<?php include "../config/bd.php"; ?>

<!DOCTYPE html>

<html lang="en">

<?php include "../src/view/layouts/head.php" ?>

    <body>

        <?php include "../src/view/layouts/navbar.php" ?>

            <main>

                <?php
                if(isset($_GET['controllers']) && isset($_GET['method'])) {
                    (file_exists('../src/controllers/'.$_GET['controllers'].'.php'))? include '../src/controllers/'.$_GET['controllers'].'.php' : 'Va te faire voir';
                        if ($_GET['method'] == 'article') echo article($pdo);
                        if ($_GET['method'] == 'list') echo liste($pdo);
                        if ($_GET['method'] == 'add') echo add($pdo);
                        if ($_GET['method'] == 'edit') echo edit($pdo);
                        if ($_GET['method'] == 'delete') echo delete($pdo);
                }
                ?>

            </main>

        <?php include "../src/view/layouts/footer.php" ?>

    </body>

</html>