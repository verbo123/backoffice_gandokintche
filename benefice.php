<?php
$active="benef";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>
<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">


<section class="content">
    <header class="content__title">
        <h1>BENEFICES REALISEES SUR VENTE DE RECHARGE</h1>
        <h4 style="margin-top: 12px;" class="card-title">
            Bénéfices actuelle
            <span class="badge badge-pill badge-success">
                    <?php echo getBenefice()->montant; ?> FCFA
                </span>
        </h4>
    </header>

    <div class="card">
        <div class="card-body">

            <h4 style="margin-top: 12px;" class="card-title">
               Historiques des recharges effectuées
            </h4>

            <div class="table-responsive">
                <table id="" class="data-table table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de recharge</th>
                        <th>Envoyeur</th>
                        <th>Reçeveur</th>
                        <th>Commissions</th>
                        <th>Bénéfice perçue</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (getTraceRecharge() as $rec)
                    {
                        ?>
                        <tr>
                            <td><?php echo $rec->id_tans; ?></td>
                            <td><?php echo date_conversion($rec->created_at); ?></td>
                            <td><?php echo infos_user($rec->codeDist)->nom." ".infos_user($rec->codeDist)->prenom; ?></td>
                            <td><?php echo infos_user($rec->codeClient)->nom." ".infos_user($rec->codeClient)->prenom; ?></td>
                            <td><?php echo $rec->commission; ?> FCFA</td>
                            <td><?php echo findTraceBenefice($rec->id_tans)->benef; ?> FCFA</td>
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


    <script type="text/javascript">


        function viewData(nbre,login)
        {
            swal({
                title: 'Nombre total d\'opération effectuée',
                text: nbre+' transaction(s)',
                type: 'info',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Consulter',
                cancelButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            }).then(function(){
                window.location.href='operation?id='+login;
            });
        }



    </script>


