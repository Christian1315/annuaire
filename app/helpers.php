<?php
 
if(!function_exists("cutLongText")){

    function cutLongText($text, $maxchar=50, $end='...') {

        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);      
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output)+strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } 
                else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } 
        else {
            $output = $text;
        }
        return $output;
    }
}

if (!function_exists("allDepartements")) {
    function allDepartements()
    {
        $departements = collect([
            "ATACORA",
            "DONGA",
            "BORGOU",
            "ALIBORI",
            "ATLANTIQUE",
            "LITTORAL",
            "MONO",
            "COUFFO",
            "OUEME",
            "PLATEAU",
            "ZOU",
            "COLLINES"
        ]);

        return $departements;
    }
}

if (!function_exists("allDgas")) {
    function allDgas()
    {
        $allDgas = collect([
            "DGA 1",
            "DGA 2",
            "DGA 3",
            "DGA 4",
            "DGA 5",
        ]);

        return $allDgas;
    }
}

if (!function_exists("allServices")) {
    function allServices()
    {
        $allServices = collect([
            "SERVICE 1",
            "SERVICE 2",
            "SERVICE 3",
            "SERVICE 4",
            "SERVICE 5",
        ]);

        return $allServices;
    }
}

if (!function_exists("allSousServices")) {
    function allSousServices()
    {
        $allSousServices = collect([
            "SOUS-SERVICE 1",
            "SOUS-SERVICE 2",
            "SOUS-SERVICE 3",
            "SOUS-SERVICE 4",
            "SOUS-SERVICE 5",
        ]);

        return $allSousServices;
    }
}

if (!function_exists("allDirections")) {
    function allDirections()
    {
        $allDirections = collect([
            "DIRECTION 1",
            "DIRECTION 2",
            "DIRECTION 3",
            "DIRECTION 4",
            "DIRECTION 5",
        ]);

        return $allDirections;
    }
}

