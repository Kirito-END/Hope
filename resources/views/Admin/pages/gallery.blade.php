<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Gallery</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/')}}" class="nav-link">Inicio</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Llamame.</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Estoy esperando tu mensaje</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas y media</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Por favor llamame</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 5 horas</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Ver todos los Mensajes</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notificaciones </span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
                            <span class="float-right text-muted text-sm">3 minutos</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 Nuevas Consultas
                            <span class="float-right text-muted text-sm">2 horas</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 Nuevos Reportes
                            <span class="float-right text-muted text-sm">5 Horas</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/dasboart')}}" class="brand-link">
                <img src="assets/images/hope-2.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Hope</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Dr. Jose Luis</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('/dasboart')}}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Inicio
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                
                                <li class="nav-item has-treeview">
                                    <a href="{{url('/flot')}}" class="nav-link">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>
                                            Estadisticas
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="{{url('/simple')}}" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Tabla de Datos
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/calendar')}}" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt"></i>
                                        <p>
                                            Calendario
                                            <span class="badge badge-info right">2</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/gallery')}}" class="nav-link">
                                        <i class="nav-icon far fa-image"></i>
                                        <p>
                                            Galeria
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-envelope"></i>
                                        <p>
                                            Correo
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{url('/inbox')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Inicio</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/compose')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Crear</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/read')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Leer</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-header">Llamadas y Mensajes</li>
                                <li class="nav-item">
                                    <a href="{{url('/call')}}" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p class="text">Llamada de Emergencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/vcall')}}" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Video Llamada</p>
                                    </a>
                                </li>
                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Galeria</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-title">
                                        Organizar Fotos
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="btn-group w-100 mb-2">
                                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> ATodas las fotos </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Categoria 1 (Blnacas) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Categoria 2 (Oscuras) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Categoria 3 (Coloridas) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Categoria 4 (Coloridas, Oscuras) </a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Reorganizar </a>
                                            <div class="float-right">
                                                <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Ver por nombre </option>
                        <option value="sortData"> Ver for fecha </option>
                      </select>
                                                <div class="btn-group">
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Acendente </a>
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Decendente </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://hr-dental.com/wp-content/uploads/2020/03/partes-receta-medica-hr-dental.jpg" data-toggle="lightbox" data-title="Formula Medica - en blanco">
                                                    <img src="https://hr-dental.com/wp-content/uploads/2020/03/partes-receta-medica-hr-dental.jpg" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://eitmedia.mx/media/k2/items/cache/cac699565320d9c0f8ed3307c8b2d183_XL.jpg" data-toggle="lightbox" data-title="Formula Medica - llena">
                                                    <img src="https://eitmedia.mx/media/k2/items/cache/cac699565320d9c0f8ed3307c8b2d183_XL.jpg" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://www.arsenalterapeutico.com/wp-content/uploads/2016/08/asma.jpg_1718483346255B1255D.jpg" data-toggle="lightbox" data-title="Asma">
                                                    <img src="https://www.arsenalterapeutico.com/wp-content/uploads/2016/08/asma.jpg_1718483346255B1255D.jpg" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://www.ilerna.es/blog/wp-content/uploads/2019/02/shutterstock_657290509.jpg" data-toggle="lightbox" data-title="Hospitalizar">
                                                    <img src="https://www.ilerna.es/blog/wp-content/uploads/2019/02/shutterstock_657290509.jpg" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://images-na.ssl-images-amazon.com/images/I/81SJCsWFmzL._AC_SX466_.jpg" data-toggle="lightbox" data-title="sample 5 - black">
                                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81SJCsWFmzL._AC_SX466_.jpg" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://amp.dolex.com.co/assets/img/Productos_455x455_gripa.png" data-toggle="lightbox" data-title="sample 6 - white">
                                                    <img src="https://amp.dolex.com.co/assets/img/Productos_455x455_gripa.png" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_cb/caricam-spanish-images/New-Packshots/408x300/PANADOL_NOCHE_16.jpg?auto=format" data-toggle="lightbox" data-title="sample 7 - white">
                                                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_cb/caricam-spanish-images/New-Packshots/408x300/PANADOL_NOCHE_16.jpg?auto=format" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_PE/peru-product-images/panadol-ninos-gotas/Panadol%20Nin-%C2%AA+%C3%B3os%20Gotas_Product_408x300.png?auto=format" data-toggle="lightbox" data-title="sample 8 - black">
                                                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_PE/peru-product-images/panadol-ninos-gotas/Panadol%20Nin-%C2%AA+%C3%B3os%20Gotas_Product_408x300.png?auto=format" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_PE/peru-product-images/panadol-ninos-jarabe/Panadol%20Nin-%C2%AA+%C3%B3os%20Jarabe_Product_408x300.png?auto=format" data-toggle="lightbox" data-title="sample 9 - red">
                                                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_PE/peru-product-images/panadol-ninos-jarabe/Panadol%20Nin-%C2%AA+%C3%B3os%20Jarabe_Product_408x300.png?auto=format" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://sanatos.pharmadel.com/wp-content/uploads/2018/11/medicamentos-para-la-gripe-tos-resfriado-sanatos-cajitas.png" data-toggle="lightbox" data-title="sample 10 - white">
                                                    <img src="https://sanatos.pharmadel.com/wp-content/uploads/2018/11/medicamentos-para-la-gripe-tos-resfriado-sanatos-cajitas.png" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://i.blogs.es/b6e744/oscillococcinum/450_1000.jpg" data-toggle="lightbox" data-title="sample 11 - white">
                                                    <img src="https://i.blogs.es/b6e744/oscillococcinum/450_1000.jpg" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://www.lapatilla.com/wp-content/uploads/2014/04/robitussin.jpg?fit=838%2C533" data-toggle="lightbox" data-title="sample 12 - black">
                                                    <img src="https://www.lapatilla.com/wp-content/uploads/2014/04/robitussin.jpg?fit=838%2C533" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="http://adminlte.io">Consultapp</a>.</strong> Todos lo Derechos Reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Filterizr-->
    <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>