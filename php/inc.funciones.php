<?php
function dia($s)
{
    switch ($s) {
        case 0:
            return ("Domingo");
            break;

        case 1:
            return ("Lunes");
            break;
        case 2:
            return ("Martes");
            break;
        case 3:
            return ("Mi&eacute;rcoles");
            break;
        case 4:
            return ("Jueves");
            break;
        case 5:
            return ("Viernes");
            break;
        case 6:
            return ("S&aacute;bado");
            break;
    }
}
function mes($s)
{
    switch ($s) {
        case 1:
            return ("Enero");
            break;
        case 2:
            return ("Febrero");
            break;
        case 3:
            return ("Marzo");
            break;
        case 4:
            return ("Abril");
            break;
        case 5:
            return ("Mayo");
            break;
        case 6:
            return ("Junio");
            break;
        case 7:
            return ("Julio");
            break;
        case 8:
            return ("Agosto");
            break;
        case 9:
            return ("Septiembre");
            break;
        case 10:
            return ("Octubre");
            break;
        case 11:
            return ("Noviembre");
            break;
        case 12:
            return ("Diciembre");
            break;
    }

}
function obtener_dia()
{
    $nombre_dia = date("w") - 1;
    if ($nombre_dia < 0) {$nombre_dia = 0;}
    return $nombre_dia;exit;
}
function muestra_fecha($s)
{
    $numero_dia = date('j');
    $nombre_dia = date("w");

    if ($nombre_dia < 0) {$nombre_dia = 0;}

    $num_mes = date('n');
    $año = date('Y');
    $dias_mes = date('t');
    $semana = $numero_dia + 7;
    for ($x = 0; $x < 7; $x = $x + 1) {
        if ($numero_dia > $dias_mes) {$numero_dia = $numero_dia - $dias_mes;
            $num_mes = $num_mes + 1;}
        if ($num_mes > 12) {$año = $año + 1;
            $num_mes = $num_mes - 12;}
        $nombre_dia2 = date($nombre_dia);
        if ($nombre_dia2 > 6) {$nombre_dia2 = $nombre_dia2 - 7;}
        if ($nombre_dia2 > 6) {$nombre_dia2 = $nombre_dia2 - 7;}

        $dias_mes = cal_days_in_month(CAL_GREGORIAN, $num_mes, $año);
        $array .= $nombre_dia2 . "|" . $numero_dia . "-" . $num_mes . "-" . $año . ",";
        $numero_dia++;
        $nombre_dia++;

    }
    $narray = substr($array, 0, -1);
    $narray = explode(",", $narray);

    sort($narray);
    $narray2 = implode(",", $narray);

    for ($i = 0; $i < count($narray); $i++) {
        $_dia = explode("|", $narray[$i]);
        $_dia_ = explode("-", $_dia[1]);
        if (strlen($_dia_[0]) == 1) {$dia = "0" . $_dia_[0];} else { $dia = $_dia_[0];}
        if (strlen($_dia_[1]) == 1) {$mes = "0" . $_dia_[1];} else { $mes = $_dia_[1];}
        $fecha_mostrar .= dia($_dia[0]) . "|" . $dia . '-' . $mes . '-' . $_dia_[2] . ",";
    }
    $narray = substr($fecha_mostrar, 0, -1);
    $narray = explode(",", $narray);
    $narray2 = implode(",", $narray);

    for ($i = 0; $i < count($narray); $i++) {
        $iarray = explode("|", $narray[$i]);
        if ($iarray[0] == $s) {$dia_ofertas = $iarray[1];}
    }

    $fecha_final1 = explode("-", $dia_ofertas);
    $d_of = $fecha_final1[0];
    $m_of = $fecha_final1[1];
    $a_of = $fecha_final1[2];
    $fecha_final = $d_of . ' de ' . mes($m_of) . ' de ' . $a_of;
    return $s . " " . $fecha_final;
}
function sql_fecha($s)
{
    $numero_dia = date('d');
    $nombre_dia = date("w");
    if ($nombre_dia < 0) {$nombre_dia = 0;}
    $num_mes = date('n');
    $año = date('Y');
    $dias_mes = date('t');
    $semana = $numero_dia + 7;
    $array = '';
    for ($x = 0; $x < 7; $x = $x + 1) {
        if ($numero_dia > $dias_mes) {$numero_dia = $numero_dia - $dias_mes;
            $num_mes = $num_mes + 1;}
        if ($num_mes > 12) {$año = $año + 1;
            $num_mes = $num_mes - 12;}
        $nombre_dia2 = date($nombre_dia);
        if ($nombre_dia2 > 6) {$nombre_dia2 = $nombre_dia2 - 7;}
        if ($nombre_dia2 > 6) {$nombre_dia2 = $nombre_dia2 - 7;}

        $dias_mes = cal_days_in_month(CAL_GREGORIAN, $num_mes, $año);
        $array .= $nombre_dia2 . "|" . $numero_dia . "-" . $num_mes . "-" . $año . ",";
        $numero_dia++;
        $nombre_dia++;

    }
    $narray = substr($array, 0, -1);
    $narray = explode(",", $narray);

    sort($narray);
    $narray2 = implode(",", $narray);
    $fecha_mostrar = '';
    
    for ($i = 0; $i < count($narray); $i++) {
        $_dia = explode("|", $narray[$i]);
        $_dia_ = explode("-", $_dia[1]);
        if (strlen($_dia_[0]) == 1) {$dia = "0" . $_dia_[0];} else { $dia = $_dia_[0];}
        if (strlen($_dia_[1]) == 1) {$mes = "0" . $_dia_[1];} else { $mes = $_dia_[1];}
        $fecha_mostrar .= dia($_dia[0]) . "|" . $dia . '-' . $mes . '-' . $_dia_[2] . ",";
    }
    $narray = substr($fecha_mostrar, 0, -1);
    $narray = explode(",", $narray);
    $narray2 = implode(",", $narray);

    for ($i = 0; $i < count($narray); $i++) {
        $iarray = explode("|", $narray[$i]);
        if ($iarray[0] == $s) {$dia_ofertas = $iarray[1];}
    }
    return $dia_ofertas;
}
function limpia_html($s)
{
    $s = ereg_replace("á", "&aacute;", $s);
    $s = ereg_replace("é", "&eacute;", $s);
    $s = ereg_replace("í", "&iacute;", $s);
    $s = ereg_replace("ó", "&oacute;", $s);
    $s = ereg_replace("ú", "&uacute;", $s);
    $s = ereg_replace("Á", "&Aacute;", $s);
    $s = ereg_replace("É", "&Eacute;", $s);
    $s = ereg_replace("Í", "&Iacute;", $s);
    $s = ereg_replace("Ó", "&Oacute;", $s);
    $s = ereg_replace("Ú", "&Uacute;", $s);
    $s = str_replace("ñ", "&ntilde;", $s);
    $s = str_replace("Ñ", "&Ntilde;", $s);
//    $s = str_replace(""","&ldquo;",$s);
    //$s = str_replace("\"","&ldquo;",$s);
    $s = str_replace("¿", "&iquest;", $s);
    $s = str_replace("\n", "<br>", $s);
    //$s = str_replace("\"","&quot;",$s);
    $s = str_replace("'", "&prime;", $s);
//    $s = str_replace("<amper>","&amp;",$s);
    return $s;
}
