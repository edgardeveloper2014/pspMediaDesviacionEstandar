<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>numeros</title>
        <link href="css/psp.css" rel="stylesheet" type="text/css">
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="javascript/Validar.js"></script>
    </head>
    <body>

        <div class="Contenedor">
            <div class="encabezado">
            </div>
            <div class="Botones">
            </div>
            <div class="FondoPag">
                <div id="CollapsiblePanel1" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0">Numeros</div>
                    <div class="CollapsiblePanelContent">
                        <fieldset><legend>Ingresar Numeros</legend>
                            <form action="RegistroMediaDesv.php" method="post" onsubmit="return verificar_campos()">
                                <label > Ingrese numeros <br>
                                    <?php
                                    $registroCant = $_POST["num"];
                                    for ($i = 0; $i < $registroCant; $i++) {
                                        echo " <span id='sprytextfield2'>";
                                        echo " <input type='text' name='IngNum[]'id='num' onkeyup='return ValidarDecimal(this)'> <br>";
                                        echo " <span class='textfieldRequiredMsg'>Se necesita un valor.</span></span>";
                                    }
                                    ?>
                                </label>
                                <input name="calc" type="submit" value="Calcular" onclick="return verificar_campos()" > <br>
                                 <a href="IngresoCantidad.php" >volver a inicio 
                                </a>    
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            <!--
            var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
            //-->
        </script>

        <script type='text/javascript'>
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
        </script>;

    </body>
</html>
