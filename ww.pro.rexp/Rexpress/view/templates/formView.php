            <!-- <script>
    function addinput(){document.getElementById("inpt-surname").innerHTML="<input type='text'  name='' id='Surname' required='' placeholder='Surname User'><br>";}function addinputreppass(){document.getElementById("inpt-reppass").innerHTML="<input type='password'  name='' id='Surname' required='' placeholder='Repeat'><br>";
   }

        </script> -->
    <div class="content-cont header-content">
        <form action=<?php echo "'{$path}controladores/pr_registrar_user.php?tipo=".base64_encode("USU")."&activo=".base64_encode(1)."'";?> method="post" id="form">  
            <!-- <label for="">Name User:</label> -->
            <input type="text"  name="nombre" id="name" required="" placeholder="Name User" onfocus="addinput()"><br>
            <div id="inpt-surname" ></div>
            <!-- <input type="text"  name="" id="Surname" required="" placeholder="Surname User"><br> -->
            <!-- <label for="">E-Mail:</label> -->
            <input type="email" name="correo" required="" placeholder="E-Mail"><br>
            <!-- <label for="">Password:</label> -->
            <input type="password" name="password" required="" placeholder="Password" onfocus="addinputreppass()"><br>
            <div id="inpt-reppass" ></div>
            <input type="submit" value="submit">
        <?php
            include "passlink.php";
            ?>
        </form>
        <?php
        /**session_start();**/
        if(isset($_SESSION["regitrado"])){
        echo "<div class=''>".$_SESSION["regitrado"]."</div>";
        }
          ?>
        
    </div>
    