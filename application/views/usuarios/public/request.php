
<form class="ui form" novalidate>

    <h4>Datos Personales</h4>
    <input id="puserid" value="<?php echo $user['uacc_id']; ?>" hidden disabled>

    <div class="two fields">
        <div class="field">
            <label>Nombres</label><input readonly id="pnombre" value="<?php echo $user['upro_first_name']; ?>" >
        </div>
        <div class="field">
            <label>Apellidos</label><input readonly id="papellidos" value="<?php echo $user['upro_last_name']; ?>" >
        </div>
    </div>


    <div class="two fields">
        <div class="field">
            <label>Codigo/Cedula</label>
            <input readonly id="pcodigo" value="<?php echo $user['uacc_username'] ?>" >
        </div>
        <div class="field"></div>

    </div>

    <div class="ui divider"></div>

    <h4>Datos de Contacto</h4>
    <div class="ui two fields">
        <div class="field">
            <label>Email</label><input readonly id="pemail" value="<?php echo $user['uacc_email'] ?>" >
        </div>
        <div class="field">
            <label>Telefono</label><input readonly id="ptelefono" value="<?php echo $user['upro_phone']; ?>" >
        </div>
    </div>
    <div class="ui two fields">
        <div class="field">
            <label>Programa Academico</label>
            
            
            <input readonly id="pprograma" value="<?php  foreach ($programas as $programa){
                
                if ($user['upro_programa'] === $programa['id']) {
                         echo $programa['codigo'].'-'. $programa['nombre'];
            }} ?>" >
        </div>
        <div class="field">
            <label>Sede</label><input readonly id="pdireccion" value="<?php echo $user['upro_sede'] ?>" >
        </div>
    </div>

    <div class="ui divider"></div>

    <h4>Trabajo de Grado a Solicitar</h4>

    <div class=" field">
        <label>Titulo: </label><input readonly value="<?php echo $ficha['Titulo']; ?>"/>
    </div>

    <div class="ui divider"></div>
    <div class="ui one fields">

        <div class="inline required field">
            <label>Paginas a Solicitar </label>

            <input class="inputpopup" type="text" id="paginas" required>
                <div class="ui popup">
                    <div class="header">Ingrese Paginas</div>
                    <div class="content">Individual: 12,24,35 <br/> Rango: 1-10,20-30,50-80 <br/> Combinado: 10,20,30-40,60-80 </div>
                </div>
            <button type="button" id="añadir" class="ui small button">Añadir</button>
        </div>
    </div>
    <div id="etiquetas"></div>

</form>

<script type="text/javascript"> $('.inputpopup').popup({ inline: true}); </script> 











<!--<input id="confirmar" type="submit" value="Confirmar">-->





