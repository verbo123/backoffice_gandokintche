<?php
$active = "letter";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Messages</h1>

            <div class="actions">
                <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Refresh</a>
                        <a href="#" class="dropdown-item">Manage Widgets</a>
                        <a href="#" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="messages">
            <div class="messages__sidebar">
                <div class="toolbar toolbar--inner">
                    <div class="toolbar__label">Malinda Hollaway</div>

                    <div class="actions toolbar__actions">
                        <a href="#" class="actions__item zmdi zmdi-plus"></a>
                    </div>
                </div>

                <div class="messages__search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <div class="listview listview--hover">
                    <div class="scrollbar-inner">
                        <a class="listview__item" href="#">
                            <img src="demo/img/profile-pics/4.jpg" alt="" class="listview__img">

                            <div class="listview__content">
                                <div class="listview__heading">Davil Parnell</div>
                                <p>Fierent fastidii recteque ad pro</p>
                            </div>
                        </a>

                        <a class="listview__item listview__item--active" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/8.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Ann Watkinson</div>
                                <p>Cum sociis natoque penatibus </p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Marse Walter</div>
                                <p>Suspendisse sapien ligula</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Jeremy Robbins</div>
                                <p>Phasellus porttitor tellus nec</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/4.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Reginald Horace</div>
                                <p>Quisque consequat arcu eget</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/5.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Shark Henry</div>
                                <p>Nam lobortis odio et leo maximu</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Paul Van Dack</div>
                                <p>Nam posuere purus sed velit auctor sodales</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/1.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">James Anderson</div>
                                <p>Vivamus imperdiet sagittis quam</p>
                            </div>
                        </a>

                        <a class="listview__item" href="#">
                            <div class="pull-left">
                                <img src="demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                            </div>
                            <div class="listview__content">
                                <div class="listview__heading">Kane Williams</div>
                                <p>Suspendisse justo nulla luctus nec</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="messages__body">
                <div class="messages__header">
                    <div class="toolbar toolbar--inner mb-0">
                        <div class="toolbar__label">Sharah Conor</div>

                        <div class="actions toolbar__actions">
                            <i class="actions__item zmdi zmdi-search" data-sa-action="toolbar-search-open"></i>
                            <a href="#" class="actions__item zmdi zmdi-time"></a>
                            <a href="#" class="actions__item zmdi zmdi-info-outline"></a>
                            <div class="dropdown actions__item">
                                <i class="actions__item zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Delete all</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                        </div>
                    </div>
                </div>

                <div class="messages__content">
                    <div class="scrollbar-inner">
                        <div class="messages__item">
                            <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                            <div class="messages__details">
                                <p>Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.</p>
                                <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:00</small>
                            </div>
                        </div>

                        <div class="messages__item messages__item--right">
                            <div class="messages__details">
                                <p>Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.</p>
                                <p>Nunc sed turpis mi. In eu massa a sem pulvinar condimentum.</p>
                                <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:10</small>
                            </div>
                        </div>

                        <div class="messages__item">
                            <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                            <div class="messages__details">
                                <p>Etiam ex arcumentum</p>
                                <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:11</small>
                            </div>
                        </div>

                        <div class="messages__item messages__item--right">
                            <div class="messages__details">
                                <p>Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:15</small>
                            </div>
                        </div>

                        <div class="messages__item">
                            <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                            <div class="messages__details">
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                <p>Nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien volutpat eget</p>
                                <small><i class="zmdi zmdi-time"></i> 20/04/2017 at 09:22</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="messages__reply">
                    <textarea class="messages__reply__text" placeholder="Type a message..."></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php
    require 'pages/footer.php';
    ?>
    <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script type="text/javascript">

        function changeValidate(id,val)
        {
            $.ajax({
               url: 'Tools/distributeur_statut.php',
                type:'POST',
                async:true,
                data: "user="+encodeURIComponent(id)+"&val="+encodeURIComponent(val),
                success : function (data)
                {
                    console.log(val);
                    data=JSON.parse(data);
                    window.location.reload(true);
                }
            });
        }

        function myChange(id)
        {
                if($('#id'+id).prop("checked") == false){
                    changeValidate(id,false);
                }

                if($('#id'+id).prop("checked") == true){
                    changeValidate(id,true);
                }

        }



        // $('#sel').change(function () {
        //     if($('#sel').val() != ''){
        //         dat=$('#sel').val() * 1.1;
        //         $("#res").html("Soit "+dat.toFixed(0)+" de crédit");
        //     }
        //
        // });

        $('#enr').click(function () {
            if($('#sel').val() != '' && $('#code').val() != '')
            {

                $("#modal-no-backdrop").modal("hide");
                $.ajax({
                    url:'Tools/recharge_credit.php',
                    type:'POST',
                    async:true,
                    data:"credit="+encodeURIComponent( $('#sel').val() )+"&user="+encodeURIComponent($('#code').val()),
                    success : function (data) {
                        console.log(data);
                        data=JSON.parse(data);
                        if(data.msg != false)
                        {
                            swal({
                                title: data.msg,
                                text:'',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-sm btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                            }).then(function(){
                                window.location.href="partner";
                            });
                        }else{
                            swal({
                                title: 'Recharge de compte' ,
                                text: 'Le compte a été désactivé !',
                                type: 'info',
                                showCancelButton: false,
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-danger',
                                confirmButtonText: 'OK',
                                cancelButtonClass: 'btn btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                            })
                        }
                    }
                });

            }
        });

        function viewData(nom,login)
        {
            swal({
                title: 'Recharge de crédit ?' ,
                text: 'Compte de : '+nom,
                type: 'question',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Oui',
                cancelButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            }).then(function(){
                $('#titre').html(nom);
                $('#code').val(login);
                $("#modal-no-backdrop").modal("show");
            });
        }



    </script>


