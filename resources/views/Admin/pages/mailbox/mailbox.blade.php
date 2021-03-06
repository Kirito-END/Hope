<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Mailbox</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
                                                <i class="right fas fa-angle-left"></i>
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
                            <h1>Correo</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{url('/compose')}}" class="btn btn-primary btn-block mb-3">Redactar</a>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Carpeta de Mensajeria</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-inbox"></i> Entrantes
                                            <span class="badge bg-primary float-right">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-envelope"></i> Enviados
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-file-alt"></i> Borradores
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-filter"></i> Filtrar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-trash-alt"></i> Eliminados
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Inicio</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search Mail">
                                        <div class="input-group-append">
                                            <div class="btn btn-primary">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                    <div class="float-right">
                                        1-7/200
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.float-right -->
                                </div>
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check1">
                                                        <label for="check1"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>Tengo un Problema</b> - Doctor tengo un problema de salud...
                                                </td>
                                                <td class="mailbox-attachment"></td>
                                                <td class="mailbox-date">5 mins ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check2">
                                                        <label for="check2"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>Tengo un Problema</b> - Doctor tengo un problema de salud...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                <td class="mailbox-date">28 mins ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check3">
                                                        <label for="check3"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Banco</a></td>
                                                <td class="mailbox-subject"><b>Pago de Censantias</b> - Sr. Jose Luis hoy te han Pagado...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                <td class="mailbox-date">11 hours ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check4">
                                                        <label for="check4"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>Tengo un Problema</b> - Doctor tengo un problema de salud...
                                                </td>
                                                <td class="mailbox-attachment"></td>
                                                <td class="mailbox-date">15 hours ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check5">
                                                        <label for="check5"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Banco</a></td>
                                                <td class="mailbox-subject"><b>Pago de Nomina</b> - Sr. Jose Luis hoy te han Pagado...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                <td class="mailbox-date">Yesterday</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check6">
                                                        <label for="check6"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>Tengo un Problema</b> - Doctor tengo un problema de salud...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                <td class="mailbox-date">2 days ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check7">
                                                        <label for="check7"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Dr. Alberto Hurtado</a></td>
                                                <td class="mailbox-subject"><b>Reunion del Consejo Hospitalario</b> - Dr. Jose Luis hoy tenemos una reunión...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                <td class="mailbox-date">2 days ago</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.table -->
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer p-0">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                    <div class="float-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.float-right -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function() {
            //Enable check and uncheck all functionality
            $('.checkbox-toggle').click(function() {
                var clicks = $(this).data('clicks')
                if (clicks) {
                    //Uncheck all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                    $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
                } else {
                    //Check all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                    $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
                }
                $(this).data('clicks', !clicks)
            })

            //Handle starring for glyphicon and font awesome
            $('.mailbox-star').click(function(e) {
                e.preventDefault()
                    //detect type
                var $this = $(this).find('a > i')
                var glyph = $this.hasClass('glyphicon')
                var fa = $this.hasClass('fa')

                //Switch states
                if (glyph) {
                    $this.toggleClass('glyphicon-star')
                    $this.toggleClass('glyphicon-star-empty')
                }

                if (fa) {
                    $this.toggleClass('fa-star')
                    $this.toggleClass('fa-star-o')
                }
            })
        })
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>