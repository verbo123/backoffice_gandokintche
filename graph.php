<?php
$active = "graph";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
error_reporting(0);
?>



<section class="content">
    <header class="content__title">
        <h1>Statistique sous forme de graphe</h1>
        <div>

            <div style="max-width: 20%" class="form-group">
                <div class="select">
                    <select id="change_date" class="form-control">

                        <?php
                        if(isset($_COOKIE["annee"]))
                        {
                            $an=$_COOKIE["annee"];
                            echo "<option value=$an>";
                            echo " Au cours de l'année ".$an;
                            echo "</option>";
                        }
                        foreach (getAnnee() as $ann)
                        {
                            if($_COOKIE["annee"] != $ann->annee)
                            {
                                echo "<option value=$ann->annee>";
                                echo " Au cours de l'année ".$ann->annee;
                                echo "</option>";
                            }

                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>


        <div class="actions">
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:loadview()" class="dropdown-item">Rafraîchir</a>
                    <a href="other-statistic" class="dropdown-item">Autres statistiques</a>
                    <a href="mensuel-data" class="dropdown-item">Données mensuelles </a>
                </div>
            </div>
        </div>
    </header>


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistique de ventes en ligne</h4>
                    <h6 class="card-subtitle">Il s'agit des ventes sur le site e-commerce</h6>

                    <div class="flot-chart flot-line4"></div>
                    <div class="flot-chart-legends flot-chart-legends--line"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistique du service de virement </h4>
                    <h6 class="card-subtitle">Il s'agit du nombre de virements effectués par les utilisateurs</h6>

                    <div class="flot-chart flot-line2"></div>
                    <div class="flot-chart-legends flot-chart-legends--line"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistique des recharges de compte</h4>
                    <h6 class="card-subtitle">Il s'agit du nombre de virements effectués par les utilisateurs</h6>

                    <div class="flot-chart flot-line5"></div>
                    <div class="flot-chart-legends flot-chart-legends--line"></div>
                </div>
            </div>
        </div>

    </div>

    <?php require 'pages/footer.php'; ?>

    <!-- Charts and maps-->
    <script src="demo/js/flot-charts/curved-line.js"></script>
    <script src="demo/js/flot-charts/line.js"></script>
    <script src="demo/js/flot-charts/dynamic.js"></script>
    <script src="demo/js/flot-charts/chart-tooltips.js"></script>
    <script src="demo/js/other-charts.js"></script>
    <script src="demo/js/jqvmap.js"></script>

    <script type="text/javascript">

        $('#24h').html("Chargement...");
        $('#30mn').html("Chargement...");
        cont=$('#list');
        function template(data) {

            html='';
            $.each(data,function (index, item) {
                html += '<div class="listview__heading">Navigateurs utilisés actuellement</div><div class="listview__attrs"><span>'+item.navigateur+'</span></div>';
            });
            return html;
        }

        function resut(nbre)
        {
            data='';
            if(nbre == 0 || nbre==1 || nbre==2 || nbre==3 || nbre==4 || nbre==5 || nbre==6 || nbre==7 || nbre==8 || nbre==9)
            {
                data="0"+nbre;
            }else {
                data=nbre;
            }
            return data;
        }

        setInterval(function () {
            $.ajax({
                url:'Tools/visiteurs24h.php',
                success : function (data) {
                    data=JSON.parse(data);
                    $('#24h').html(resut(data.nbre));
                }
            });
        }, 5000);


        /*   setInterval(function () {
               $.ajax({
                   url:'Tools/navigateurs.php',
                   success : function (data) {
                       data=JSON.parse(data);
                       console.log(data);
                       if(data != false)
                       {
                           cont.html(template(data));
                       }
                   }
               });
           }, 5000);*/


        setInterval(function () {
            $.ajax({
                url:'Tools/visiteurs30mn.php',
                success : function (data) {
                    data=JSON.parse(data);
                    $('#30mn').html(resut(data.nbre));
                }
            });
        }, 5000);

        function loadview() {
            window.location.reload();
        }


    </script>
