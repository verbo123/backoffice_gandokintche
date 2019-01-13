<?php
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
<section class="content">
    <header class="content__title">
        <h1>LISTE DES PREMIERES CONNEXION</h1>


    </header>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="" class="data-table table">
                    <thead>
                    <tr>
                        <th>Adresse IP</th>
                        <th>Pays</th>
                        <th>Commune</th>
                        <th>Ville</th>
                        <th>Navigateur utilisé</th>
                        <th>Première connexion</th>
                        <th>Dernière connexion</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (getAllVisiteur24() as $user)
                    {
                        ?>
                        <tr>
                            <td><?php echo $user->ip; ?></td>
                            <td><?php echo  $user->pays; ?></td>
                            <td><?php echo $user->commune; ?></td>
                            <td><?php echo $user->ville; ?></td>
                            <td><?php echo $user->navigateur; ?></td>
                            <td><?php echo date_conversion($user->date_visite) ; ?></td>
                            <td><?php echo date_conversion($user->date_updated) ; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <?php
    require 'pages/footer.php';
    ?>
    <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
