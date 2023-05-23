<?php
    $dta[0]["NAMA"] = "Widya";
    $dta[0]["TGL_LAHIR"] = "2004-10-30";
    $dta[0]["JKEL"] = "P";
    $dta[0]["JURUSAN"] = "TI-KAB";
    $dta[0]["NIM"] = "2201010053";

    $dta[1]["NAMA"] = "Okta";
    $dta[1]["TGL_LAHIR"] = "2004-10-31";
    $dta[1]["JKEL"] = "L";
    $dta[1]["JURUSAN"] = "TI-MTI";
    $dta[1]["NIM"] = "2201010053";

    $dta[2]["NAMA"] = "Hana";
    $dta[2]["TGL_LAHIR"] = "2005-03-30";
    $dta[2]["JKEL"] = "P";
    $dta[2]["JURUSAN"] = "TI-BD";
    $dta[2]["NIM"] = "2201010053";

    $dta[3]["NAMA"] = "Irwan";
    $dta[3]["TGL_LAHIR"] = "2002-01-30";
    $dta[3]["JKEL"] = "L";
    $dta[3]["JURUSAN"] = "TI-SK";
    $dta[3]["NIM"] = "2201010053";

    $dta[4]["NAMA"] = "Vani";
    $dta[4]["TGL_LAHIR"] = "2003-11-30";
    $dta[4]["JKEL"] = "P";
    $dta[4]["JURUSAN"] = "TI-DKV";
    $dta[4]["NIM"] = "2201010053";


    header("Content-tyep: application/json; charset=utf-8");
    echo json_encode($dta);