      <div class="content">
          <?php

            $get = isset($_GET["view"]) ? $_GET["view"] : "";
            $mensaje = "PRE";
            switch ($get) {
                case 'form':
                    # code...
                    # entrada alternativa al formulario
                    if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>method->get: form ; vista incluida: formView");
                        include 'formView.php';
                    } else if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        include 'homeView.php';
                    }
                    break;
                case 'info':
                    # code...
                    error_log("Info=> main ; mensaje=>method->get: info ; vista incluida: opcinfoViewView");
                    include 'infoView.php';
                    break;
                    // case 'opc':
                    //     # code... retirado
                    //     error_log("Info=> main ; mensaje=>method->get: opc ; vista incluida: opcView" );
                    //     include 'opcView.php';
                    //     break; 
                case 'rec-pass':
                    # code...
                    error_log("Info=> main ; mensaje=>method->get: rec-pass ; vista incluida: pass_recuView");
                    include 'pass_recuView.php';
                    break;
                    /**solo para cerrar la session -- borrar despues  */
                    // case 'login':
                    //     # code...
                    //     error_log("Info=> main ; mensaje=>method->get: login ; vista incluida: loginView" );
                    //     $mensaje="no login";
                    //     include 'loginView.php';
                    //     break;
                case 'home':
                    # code...
                    error_log("Info=> main ; mensaje=>method->get: home");
                    if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->On ; vista incluida: homeView");
                        include 'homeView.php';
                    } else if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        include 'loginView.php';
                    }
                    break;
                case '':
                    # code...
                    error_log("Info=> main ; mensaje=>method->get: -");
                    if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->On ; vista incluida: homeView");
                        include 'homeView.php';
                    } else if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        include 'loginView.php';
                    }
                    break;
                default:
                    # code...
                    //include 'loginView.php';
            }
            ?>

      </div>