<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cantidad Numeros</title>
        <link href="css/psp.css" rel="stylesheet" type="text/css">
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="javascript/Validar.js"></script>
    </head>
    <body>
        <div class="Contenedor">
            <div class="encabezado">

            </div>
            <div class="Botones">  </div>
            <div class="FondoPag">
                <form action="IngresoNum.php" method="post">
                    <label> Ingrese Cantidad <br>
                        <span id="sprytextfield1">
                            <input type="text" name="num" id="num" onkeyup='return VerificarNum(this)'>
                            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span> </label> <br>
                    <input name="ingresar" type="submit" value="ingresar"> <br>
                </form>
            </div>
        </div>



        <script type="text/javascript">
            <!--
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
            //-->
        </script>
    </body>
</html>
