<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="css/psp.css" rel="stylesheet" type="text/css">
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
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
                            <form action="" method="post">
                                <table bgcolor="blue" border="5">
                                    <tr>
                                       
                                        <th>cantidad de numeros</th>
                                        <th>suma</th>
                                        <th>promedio</th>
                                        <th>varianza</th>
                                        <th>desviacion estandar</th>


                                    </tr>
                                    <?php
                                    include 'clases/media.php';
                                    $numRes = $_POST['IngNum'];
                                    $Instancia = new media($numRes);

                                    $ResuDesv = $Instancia->CalcularDesviacionEstandar();
                                    for ($i = 0; $i < count($ResuDesv); $i++) {
                                      
                                        switch ($i) {

                                            case 0:
                                                echo "<td>" . round($ResuDesv[$i], 2) . "</td>";
                                                break;
                                            case 1:
                                                echo "<td>" . round($ResuDesv[$i], 2) . "</td>";
                                                break;
                                            case 2:
                                                echo "<td>" . round($ResuDesv[$i], 2) . "</td>";
                                                break;
                                            case 3:
                                                echo "<td>" . round($ResuDesv[$i], 2) . "</td>";
                                                break;
                                            case 4:
                                                echo "<td> " . round($ResuDesv[$i], 2) . "</td>";
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                    ?>
                                </table>
                            </form>
                            <a href="javascript:history.go(-1)">Volver a la otra pagina</a> <br>
                            <a href="IngresoCantidad.php">inicio</a> <br>
                            
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
    </body>
</html>
