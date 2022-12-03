<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Admin</title>

        <!-- Custom fonts for this template -->
        <link href="<?= RUTA_URL ?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        >

        <!-- Custom styles for this template -->
        <link href="<?= RUTA_URL ?>/public/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="<?= RUTA_URL ?>/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <style>

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin-bottom: 0;
}

.input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
    margin-bottom: 0;
}

.input-group > .custom-file {
    display: flex;
    align-items: center;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin: 0;
    overflow: hidden;
    opacity: 0;
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    overflow: hidden;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: none;
}
</style>
    </head>
    <body id="page-top">
                <!-- Page Wrapper -->
                <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= RUTA_URL ?>admin/index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Blog Admin</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= RUTA_URL ?>/noticias">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>NOTICIAS</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="/noticias">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span> VER INICIO DE NOTICIAS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>COMENTARIOS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-users"></i>
                        <span>USUARIOS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-user-shield"></i>
                        <span>ROLES</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-folder-open"></i>
                        <span>ARCHIVOS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tags"></i>
                        <span>ETIQUETAS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-info-circle"></i>
                        <span>ESTATUS</span>
                    </a>
                </li>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->