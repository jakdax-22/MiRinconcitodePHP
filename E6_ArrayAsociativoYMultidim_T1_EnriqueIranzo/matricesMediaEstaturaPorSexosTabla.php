<?php

$personas=array(
    
    array("Alçada (cm)", 172,165,179,163,170,174),
    array("Sexe", "H","M","H","M","M","H")
);
?>
<html>
    <style>
        table,td,th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            width: 10%;
            text-align: center;
        }
    </style>
    <body>
        <table>
            <tr>
                <?php
                echo "<th><b>" .$personas[0][0]. "</b></th>";
                
                for ($i=0;$i<1;$i++){
                    for ($alt=1;$alt<7;$alt++){
                        echo "<td>" .$personas [$i][$alt] ."</td>";
                    }
                }                   
                ?> 
            </tr>
            <tr>
                <?php
                echo "<th><b>" .$personas[1][0]. "</b></th>";
                for ($i=1;$i<2;$i++){
                    for ($alt=1;$alt<7;$alt++){
                        echo "<td>" .$personas [$i][$alt] ."</td>";
                    }
                }
                ?> 
            </tr>
            <tr><th><b>Número de hombres</b></th> 
                <?php
                $contHom=0;
                for ($i=1;$i<2;$i++){
                    for ($alt=1;$alt<7;$alt++){
                        if ($personas  [$i][$alt] == "H"){
                            $contHom++;
            
                        }
                    }
                }
                echo "<td colspan='6' align='center'>" .$contHom ."</td>";
                ?>
            </tr>
            <tr><th><b>Número de mujeres</b></th>
                <?php
                $contMuj=0;
                for ($i=1;$i<2;$i++){
                    for ($alt=1;$alt<7;$alt++){
                        if ($personas  [$i][$alt] == "M"){
                            $contMuj++;
            
                        }
                    }
                }
                echo "<td colspan='6' align='center'>" .$contMuj ."</td>";
                ?>
            </tr>
            <tr><th><b>Media altura hombres</b></th>
                <?php
                $mediaH=0;
                $contH=0;
                for ($i=0;$i<2;$i++){
                    for ($alt=1;$alt<7;$alt++){
                        if ($personas [$i][$alt] == "H") {
                            $mediaH=$mediaH+$personas [0][$alt];
                            $contH++;
        
                        }
                    }
                }
                echo "<td colspan='6' align='center'>" .$mediaH/$contH ."</td>";
                ?>
            </tr>
            <tr><th><b>Media altura mujeres</b></th>
                <?php
                
            $mediaM=0;
            $contM=0;
            for ($i=0;$i<2;$i++){
                for ($alt=1;$alt<7;$alt++){
                    if ($personas [$i][$alt] == "M") {
                        $mediaM=$mediaM+$personas [0][$alt];
                        $contM++;
        
                    }
                }
            }
            echo "<td colspan='6' align='center'>" .$mediaM/$contM ."</td>";
            ?>
            </tr>
            <tr>
               
            </tr>
        </table>
    </body>
</html>





