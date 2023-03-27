<?php
// DATOS DEL DUEÑO
$nms = $_POST["txtn"];
$cel = $_POST["txtcel"];
$email = $_POST["txtemail"];

// DATOS DE LA MASCOTA
$masc = $_POST["txtmascota"];
$espc = $_POST["lstespecie"];
$raza = $_POST["txtraza"];
$gen = $_POST["opcgen"];
$edad = $_POST["txtedad"];
$peso = $_POST["numpeso"];
$talla = $_POST["numtalla"];

// DATOS DEL FORMULARIO DE SINTOMAS


// CONCATECAR VALORES
if ($espc == "G") {
    $opc1 = $_POST["opc1"];
    $opc2 = $_POST["opc2"];
    $opc3 = $_POST["opc3"];
    $opc4 = $_POST["opc4"];
    $opc5 = $_POST["opc5"];
    $opc6 = $_POST["opc6"];
    $opc7 = $_POST["opc7"];
    $opc8 = $_POST["opc8"];
    $opc9 = $_POST["opc9"];
    $opc10 = $_POST["opc10"];
    $opc11 = $_POST["opc11"];
    $opc12 = $_POST["opc12"];
    $opc13 = $_POST["opc13"];
    $opc14 = $_POST["opc14"];
    $opc15 = $_POST["opc15"];
    $opc16 = $_POST["opc16"];
    $opc17 = $_POST["opc17"];
    $opc18 = $_POST["opc18"];
    $opc19 = $_POST["opc19"];
    $opc20 = $_POST["opc20"];
    $opc21 = $_POST["opc21"];
    $opc22 = $_POST["opc22"];
    $sintomasG = array();
    for ($i = 1; $i < 23; $i++) {
        $sintomasG[0] = "0";
        $key = "opc" . $i;
        $sintomasG[$i] = $_POST[$key];
        echo $sintomasG[$i] . ",";
    }
} elseif ($espc == "P") {
    $opc1 = $_POST["opc1"];
    $opc2 = $_POST["opc2"];
    $opc3 = $_POST["opc3"];
    $opc4 = $_POST["opc4"];
    $opc5 = $_POST["opc5"];
    $opc6 = $_POST["opc6"];
    $opc7 = $_POST["opc7"];
    $opc8 = $_POST["opc8"];
    $opc9 = $_POST["opc9"];
    $opc10 = $_POST["opc10"];
    $opc11 = $_POST["opc11"];
    $opc12 = $_POST["opc12"];
    $opc13 = $_POST["opc13"];
    $opc14 = $_POST["opc14"];
    $opc15 = $_POST["opc15"];
    $opc16 = $_POST["opc16"];
    $sintomasP = array();
    for ($i = 1; $i < 17; $i++) {
        $sintomasP[0] = "0";
        $key = "opc" . $i;
        $sintomasP[$i] = $_POST[$key];
        echo $sintomasP[$i] . ",";
    }
    $ver_enferm1 = array("VOMI", "DIAR", "FIEB", "DESH", "DOAB", "PEAP");
    $resultado = array_diff($ver_enferm1, $sintomasP);
    if (empty($resultado)) {
        echo "existe rencor";
    } else {
        echo "no existe rencor";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>