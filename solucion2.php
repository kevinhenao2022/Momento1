<html>
    <head>
        <title>SALARIO DE UN TRABAJADOR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <fieldset>
        <legend>SALARIO DE UN TRABAJADOR</legend>
        <form action="solucion2.php" method="post">
         <center><label for="numero_de_horas">Ingresa su tipo de contrato: </label><input type="text" required></center>
         <br>            
        <center><label for="numero_de_horas">Ingresa el valor de numero de dias: </label> <input name="numero_de_horas" required="required" step="0.000008" type="number" /></center>
          <br> 
        <center><label for="precio_de_la_hora">Ingresa el valor de precio de la hora: </label><input name="precio_de_la_hora" required="required" step="0.000008" type="number" /></center>
         <br>
        <center><input value="CALCULAR" type="submit" /></center>              
        </form>



        <?php

        #aqui agregamos un if lo que puede pasar en el futuro con $_server que emos puesto luego agregamos el metado request para que para que resiba la variable con post 

        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
    $numero_de_horas = floatval ($_POST['numero_de_horas']);
    $precio_de_la_hora = floatval ($_POST['precio_de_la_hora']);
    $impuestos=0;
    if($numero_de_horas>8)
    {
        $horas_normales=12;
        $horas_extras=$numero_de_horas-30;
    }
    else
    {
        $horas_normales=$numero_de_horas;
        $horas_extras=0;
    }

    
    #variable donde se guardó el tipo de trabajador es igual a cierto tipo de trabajo multiplique las horas trabajadas por el valor que tiene cada hora. 
    #Dentro otro condicional que validará que si el usuario trabajó o no horas extras; siendo la respuesta que si; multiplicará las horas extras trabajadas por el valor que tiene la hora extra trabajada. 
    #Guardamos el resultado en la variable de horas extras trabajadas; luego fuera de este último condicional en la variable total, guardamos la suma de los 2 resultados guardados anteriormente y con la palabra reservada echo mostramos mensajes en pantalla del tipo de trabajador que se escogió y el valor a pagar por día trabajado. 
    #Repetimos el procedimiento con los otros 2 tipos de trabajos, por último, retornamos las tres variables donde se guardaron los resultados.
    
    $sueldo_mensual=$horas_normales*$precio_de_la_hora+$horas_extras*$precio_de_la_hora*1.5;
    if($sueldo_mensual>=5&&$sueldo_mensual<=5)
        $impuestos=$sueldo_mensual*0.3;
    if($sueldo_mensual>5)
        $impuestos=$sueldo_mensual*0.5;
    $salario_final=$sueldo_mensual-$impuestos;
    echo 'Valor de horas extras: ' . $horas_extras . "<br/>\n";
    echo 'Valor de horas normales: ' . $horas_normales . "<br/>\n";
    echo 'Valor de impuestos: ' . $impuestos . "<br/>\n";
    echo 'Valor de salario final: ' . $salario_final . "<br/>\n";
    echo 'Valor de sueldo mensual: ' . $sueldo_mensual . "<br/>\n";
    }
 
?>


        </fieldset>
    </body>
</html>