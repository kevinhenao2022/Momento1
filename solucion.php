<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULAR DE CALIFICACIONES</title>
</head>
<body>

    <fieldset>
        <legend>CALCULAR PROMEDIO DE CALIFICACIONES</legend>
        <form action="solucion.php" method="post">
            <label>NOTA 1: </label><input type="text" name="txtn1">
            <br><br>
            <label>NOTA 2: </label><input type="text" name="txtn2">
            <br><br>
            <label>NOTA 3: </label><input type="text" name="txtn3">
            <br><br>
            <input type="submit" value="Calcular">
        </form>


      
        <?php
       #AL FINAL DEL PROGRAMA ESTA LA EXPLICACION 
        if($_POST){
        $n1 = $_POST ["txtn1"];
        $n2 = $_POST ["txtn2"];
        $n3 = $_POST ["txtn3"];

        if($n1<0 || $n1>5){
            print "El valor de la nota 1 es incorrecto";
        }else if ($n2<0 || $n2>5){
            print "El valor de la nota 2  es incorrecto";
        }else if ($n3<0 || $n3>5){
            print "el valor de la nota 3 es incorrecto";
        }else{
            $prom = ($n1+$n2+$n3)/3;
            print "el promedio es: ".$prom."<br>";


            if($prom>=3){
                print"GANA LA MATERIA ";


                if($prom==5){
                    print" ¡¡FELICITACIONES!! ";
                }
        
            }else{
                print "PIERDE LA MATERIA";
            }
        }
    }
?>

    </fieldset>

<!-- php cerramos enseguida nuestro código php y vamos a comprobar el método post
si ha sido ejecutado por si fue enviado las cajas de texto donde están las notas
eso lo hacemos mediante el método post y colocamos el nombre de ese componente en
este caso se llama txt n 1 el primer campo asimismo definimos una variable
como nota 2 o n 2 para el siguiente campo Debe validar los
rangos válidos son de 0 a 5 por lo tanto no se puede ingresar una nota negativa o
no se puede ingresar una nota mayor que 5 para esto vamos a validar todo esto
con condicionales vamos a empezar validando la primera nota que sería n 1
y vamos a decir si n 1 es menor que cero para evitar que sea una nota negativa o
n uno es mayor que singh aquí tendríamos ya la primera validación el primer
condicional que nos va a permitir a nosotros en la nota n uno no cumpla con
ninguna de estas dos condiciones para esto entonces vamos a colocar un mensaje
aquí print Y HACI CON LOS DEMAS aquí un salto de línea para que nosotros la línea que era
anterior de esta forma podemos calcular entonces el promedio algo más que
podemos hacer aquí dentro de este else es verificar si gana o pierde la materia
por lo tanto debemos hacer otro condicional o igual que 3 sabemos que el estudiante
gana la materia por eso colocamos aquí print ganar la materia
5 procedemos entonces a mostrar un mensaje felicitaciones solamente
mostraban las felicitaciones cuando el estudiante obtiene un promedio igual a 5
mostraría también gana la materia no se mostraría también felicitaciones -->


</body>
</html>