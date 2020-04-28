      <div class="content-cont header-content">
      <?php echo "{$path}" ?>
            <form action="controladores/pr_ini_session.php" method="post">
                  <!-- <label for="email" class="">E-Mail:</label> required="true"-->
                  <div>
                  <?php echo $mensaje;
                  ?>
                  </div>
                  <?php
                  if(isset($_COOKIE["user"])){
                         $email_usu=$_COOKIE["user"]["correo"];
                         $usu_dec=base64_decode($email_usu);
                        echo"<input  type='text' name='nombreUsuario'  class='' value='{$usu_dec}' placeholder='Nombre'><br>";  
                  }else{
                        // echo var_dump($_COOKIE["user"]);
                        echo"<input  type='text' name='nombreUsuario'  class='' value='' placeholder='Nombre'><br>";  

                  }
                  ?>
                  <!-- <label for="pass">Password:</label> -->
                  <input type="password" name="password"  class=""  title="" placeholder="Password"><br>
                  <input type="submit" value="log in" name="bot-login"><br>
                  <input type="checkbox" id="check-login" name="check-login"  class="">
                  <label for="check-login"  class="cont-label" id="lb_estado_check">recordar</label>
          <?php
              include "passlink.php";
          ?>
            <div id="alert_check"></div>
            </form>
      </div>