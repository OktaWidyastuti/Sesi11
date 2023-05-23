<?php
    $dta["NAMA"] = "Widya";
    $dta["TGL_LAHIR"] = "2004-10-30";
    $dta["JKEL"] = "P";
    $dta["JURUSAN"] = "TI-KAB";
    $dta["NIM"] = "2201010053";

    header("Content-tyep: application/json; charset=utf-8");
    echo json_encode($dta);