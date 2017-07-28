
<?php 
require("../../presentacion/vista/cabeza.php");
require("../../menu/vista/menu_solo_proyectos.php");

?>

<!--  Vista del formulario de registro del proyecto	-->

<form action="" method="post">
	
    <div>
        <label for="name">1. Institucion:</label>
        <?php 
        $insti = new clase_conecta_postgresql();
        $insti->generaSelect('SELECT id_pro_insti, ins_nombr FROM proyectos.pro_insti', 'pro_distr', '', 'pro_insti'); 
        ?>                
    </div>
    <div>
        <label for="mail">2. Distrito:</label>
        <?php 
        $distr = new clase_conecta_postgresql();
        $distr->generaSelect('SELECT id_pro_distr, dis_nombr FROM proyectos.pro_distr', 'pro_distr', '', 'pro_insti'); 
        ?>                
    </div>
    <div>
        <label for="msg">3. Tipo de Ambulatorio u Hospital</label>
        <?php 
        $asist = new clase_conecta_postgresql();
        $asist->generaSelect('SELECT id_pro_asist, asi_nombr FROM proyectos.pro_asist', 'pro_asist', '', 'pro_asist'); 
        ?>
    </div>
        <div>
        <label for="msg">4. Sitio:</label>
        <?php 
        $sitio = new clase_conecta_postgresql();
        $sitio->generaSelect('SELECT id_pro_sitio, sit_nombr FROM proyectos.pro_sitio', 'pro_sitio', '', 'pro_sitio'); 
        ?>
    </div>
    </div>
        <div>
        <label for="msg">5. Sujeto:</label>
        <?php 
        $sitio = new clase_conecta_postgresql();
        $sitio->generaSelect('SELECT id_pro_sujet, suj_nombr FROM proyectos.pro_sujet', 'pro_sujet', '', 'pro_sujet'); 
        ?>
    </div>
    <div>
        <label for="msg">6. Revision:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
        <label for="msg">Direccion:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>    
    <div>
        <label for="msg">Archivo</label>
        <input type="file" />
    </div>    
    <div>
        <label for="msg">Minuta:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    

    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>




<?php require("../../presentacion/vista/pie.php"); ?>