
<footer class="footer hidden-xs-down">
    <p>GANDOKINTCHE Copyright © <script>document.write(new Date().getFullYear());</script>.</p>
</footer>
</section>
</main>

<style>
    option{
        color: black;
    }
</style>


<!-- Javascript -->
<!-- Vendors -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- Vendors: Data tables -->
<script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>

<script src="vendors/bower_components/Clamp.js/clamp.js"></script>
<script src="vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>



<!-- App functions and actions -->
<script src="js/cookies.js"></script>
<script src="js/app.min.js"></script>
<script src="js/alertb.js"></script>


</body>
<style type="text/css">
    button{
        cursor: pointer;
    }
</style>

<script type="text/javascript">



    function logout()
    {
        $.ajax({
            url:'logout.php',
            success : function (data) {
                window.location.href="login";
            }
        });

    }

    function change(id)
    {
        $.ajax({
            url:'Tools/theme.php?id='+id,
            success : function (data) {
                data=JSON.parse(data);
                console.log(data);
                if(data == true)
                {
                    window.location.reload(true);
                }
            }
        });

    }

</script>

</html>