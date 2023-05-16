<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios</h1>
    <h2>1. Ejercicio</h2>
    <p>Notas estudiantes</p>
    <form action="ejercicios.php" method="post">
        <label>Nota 1</label>
        <input type="text" name="nota1">
        <label>Nota 2</label>
        <input type="text" name="nota2">
        <label>Nota 3</label>
        <input type="text" name="nota3">
        <button type=submit>Calcular</button>
    </form>

    <h2>2. Ejercicio</h2>

    <form action="ejercicios.php" method="post">
        <label >Inserte el numero</label>
        <input type="text" name="numero">
        <button type="submit">Calcular</button>
    </form>

    <h2>3. Ejercicio</h2>

    <form action="ejercicios.php" method="post">
        <label >Resistencia</label>
        <input type="text" name="resistencia">
        <label >Intensidad</label>
        <input type="text" name="intensidad">
        <button type="submit">Calcular</button>
    </form>


    <h2>4. Ejercicio</h2>

    <form action="ejercicios.php" method="post">
        <label>Primera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Edad</label>
        <input type="text" name="edad1"><br>
        <label>Segunda Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Edad</label>
        <input type="text" name="edad2"><br>
        <label>Tercera Persona</label><br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Edad</label>
        <input type="text" name="edad3">
        <button type="submit">Calcular</button>
    </form>    

    <h2>5. Ejercicio</h2>

    <form action="ejercicios.php" method="post">
        <label >Numero 1</label>
        <input type="text" name="numero1">
        <label >Numero 2</label>
        <input type="text" name="numero2">
        <button type="submit">Calcular</button>
    </form>    
</body>
</html>

<?php 

    //1. Ejercicio//
/*     if($_POST){
        $suma= $_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"];
        intval($suma);
        $definitiva= $suma/3;
        echo "Su definitiva es: {$definitiva}<br>";
        if($definitiva<3.9){
            echo "Estudie";
        }
        else{
            echo "Becado";
        }
    } */

    //2. Ejercicio//
/*     if($_POST){
        $par= $_POST["numero"]%2;
        if($par==0){
            echo"El numero es par";
        }
        else{
            echo "El numero es impar";
        }
        if($_POST["numero"]>9){
            echo "<br>El numero es mayor a 10";
        }
        else{
            echo "<br>El numero es menor a 10";
        }
    } */

    //3. Ejercicio//

/*     if($_POST){
        $voltaje= $_POST["resistencia"]*$_POST["intensidad"];

        echo "El voltaje es: {$voltaje}";
    } */


    //4. Ejercicio//


    
/*     if($_POST){
        if($_POST["edad1"]>$_POST["edad2"]&&$_POST["edad1"]>$_POST["edad3"]){
            echo "La persona mayor es {$_POST["nombre1"]} con una edad de {$_POST["edad1"]}";
        }
        else if($_POST["edad2"]>$_POST["edad1"]&&$_POST["edad2"]>$_POST["edad3"]){
            echo "La persona mayor es {$_POST["nombre2"]} con una edad de {$_POST["edad2"]}";
        }
        else if($_POST["edad3"]>$_POST["edad2"]&&$_POST["edad3"]>$_POST["edad1"]){
            echo "La persona mayor es {$_POST["nombre3"]} con una edad de {$_POST["edad3"]}";
        }
    } */


    //5. Ejercicio//

    if($_POST){
        $numero1=$_POST["numero1"];
        $numero2=$_POST["numero2"];

        if($numero1>$numero2){
            $suma=$numero1+$numero2;
            $diferencia=$numero1-$numero2;
            echo "La suma es : {$suma}<br>";
            echo "La diferencia es: {$diferencia}";
        }
        else{
            $producto=$numero1%$numero2;
            $divicion=$numero2/$numero1;
            echo "El producto es : {$producto}<br>";
            echo "La divicion es: {$divicion}";
        }
    }
?>