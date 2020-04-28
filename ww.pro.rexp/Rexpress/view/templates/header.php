<!-- contenedor principal de header -->
<header>
<?php  if(!isset($_SESSION["home"])){ ?>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-text"><a class="navbar-brand" href=<?php echo "'{$path}'"?>>Sistema de administración Rexpress</a></span>
        <span class="navbar-text"><a href=<?php echo "'{$path}view/info'"?>><i class="material-icons">info</i></a></span>

    </nav>
<?php   }else if (isset($_SESSION["home"])){?>
    <div class="contenedor-header">
        <div class="header-content">
            <div class="header-title">
                <h1><a href=<?php echo "'{$path}'"?>>Sistema de administración Rexpress</a></h1>
            </div>
            <div class="header-list">
                <ul>
                <?php
                if(isset($_SESSION["home"])){
                    echo "<li><a href='' id='agregar-popup'><i class='material-icons'>person_add</i></a></li>";
                }
                ?>
                     <li><a href=<?php echo "'{$path}view/info'"?>><i class="material-icons">info</i></a></li>
                <!-- <li><a href="/Rexpress/view/lct">Localización</a></li> -->
                <!-- <li><a href="/Rexpress/view/opc">Otras Opciones</a></li> -->
                <?php
                if(isset($_SESSION["home"])){
                    echo "<li><a href='{$path}controladores/pr_dtroy_session.php'><i class='material-icons'>power_settings_new</i></a></li>";
                }
                ?>
                </ul>
           </div>
        </div>
    </div>
<?php
        }
?>
</header>