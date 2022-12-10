<header class="main-header">
    <!-- logotipo -->
    <a href="inicio" class="logo">
        <!-- logo mini -->
        <span class="logo-mini">
            <!-- <img src="vistas/img/plantilla/logo.jpg" class="img-responsive" style="padding:10px"> -->

        </span>
        <!-- logo normal -->
        <span class="logo-lg">
            <!-- <img src="" class="img-responsive" style="padding:10px 0px"> -->

        </span>
    </a>
    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="navbar navbar-stactic-top" role="navigation">
        <!-- BOTÓN DE NAVEGACIÓN -->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>

        </a>
        <!-- PERFIL DE USUARIO -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php

                        if ($_SESSION["foto"] != "") {
                            echo '<img src="' . $_SESSION["foto"] . '"class=<"user-image">';
                        } else {

                            echo '<img src="vistas/img/usuarios/default/avatar5.png" class="user-image">';
                        }
                        ?>
                        <!-- <img src="vistas/img/usuarios/default/" class="user-image"> -->
                        <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
                    </a>
                    <!-- DROPDOWN-TOGGLE -->
                    <ul class="dropdown-menu">
                        <li class="user-body">
                            <div class="pull-right">
                                <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>

                </li>
            </ul>

        </div>

        <!-- DROPDOWN-TOGGLE -->
        <ul class="dropdown-menu">
            <li class="user-body">
                <div class="pull-right">
                    <a href="" class="btn btn-default btn-flat">Salir</a>
                </div>
            </li>
        </ul>

    </nav>

</header>