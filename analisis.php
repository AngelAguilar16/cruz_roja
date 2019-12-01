<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cruz";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $preg1_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 1";
    $qp1_ = mysqli_query($conn, $preg1_);
    $r1_ = mysqli_fetch_array($qp1_);
    $preg1_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 1";
    $qp1_11 = mysqli_query($conn, $preg1_11);
    $r1_11 = mysqli_fetch_array($qp1_11);
    $preg1_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 1";
    $qp1_22 = mysqli_query($conn, $preg1_22);
    $r1_22 = mysqli_fetch_array($qp1_22);
    $preg1_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 1";
    $qp1_33 = mysqli_query($conn, $preg1_33);
    $r1_33 = mysqli_fetch_array($qp1_33);
    $preg1_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 1 and respuesta = 1";
    $qp1_1 = mysqli_query($conn, $preg1_1);
    $r1_1 = mysqli_fetch_array($qp1_1);
    $preg1_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 1 and respuesta = 2";
    $qp1_2 = mysqli_query($conn, $preg1_2);
    $r1_2 = mysqli_fetch_array($qp1_2);
    $preg1_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 1 and respuesta = 3";
    $qp1_3 = mysqli_query($conn, $preg1_3);
    $r1_3 = mysqli_fetch_array($qp1_3);
    $preg1_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 1 and respuesta = 4";
    $qp1_4 = mysqli_query($conn, $preg1_4);
    $r1_4 = mysqli_fetch_array($qp1_4);

    $preg2_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 2";
    $qp2_ = mysqli_query($conn, $preg2_);
    $r2_ = mysqli_fetch_array($qp2_);
    $preg2_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 2";
    $qp2_11 = mysqli_query($conn, $preg2_11);
    $r2_11 = mysqli_fetch_array($qp2_11);
    $preg2_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 2";
    $qp2_22 = mysqli_query($conn, $preg2_22);
    $r2_22 = mysqli_fetch_array($qp2_22);
    $preg2_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 2";
    $qp2_33 = mysqli_query($conn, $preg2_33);
    $r2_33 = mysqli_fetch_array($qp2_33);
    $preg2_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 2 and respuesta = 1";
    $qp2_1 = mysqli_query($conn, $preg2_1);
    $r2_1 = mysqli_fetch_array($qp2_1);
    $preg2_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 2 and respuesta = 2";
    $qp2_2 = mysqli_query($conn, $preg2_2);
    $r2_2 = mysqli_fetch_array($qp2_2);
    $preg2_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 2 and respuesta = 3";
    $qp2_3 = mysqli_query($conn, $preg2_3);
    $r2_3 = mysqli_fetch_array($qp2_3);
    $preg2_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 2 and respuesta = 4";
    $qp2_4 = mysqli_query($conn, $preg2_4);
    $r2_4 = mysqli_fetch_array($qp2_4);

    $preg3_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 3";
    $qp3_ = mysqli_query($conn, $preg3_);
    $r3_ = mysqli_fetch_array($qp3_);
    $preg3_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 3";
    $qp3_11 = mysqli_query($conn, $preg3_11);
    $r3_11 = mysqli_fetch_array($qp3_11);
    $preg3_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 3";
    $qp3_22 = mysqli_query($conn, $preg3_22);
    $r3_22 = mysqli_fetch_array($qp3_22);
    $preg3_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 3";
    $qp3_33 = mysqli_query($conn, $preg3_33);
    $r3_33 = mysqli_fetch_array($qp3_33);
    $preg3_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 3 and respuesta = 1";
    $qp3_1 = mysqli_query($conn, $preg3_1);
    $r3_1 = mysqli_fetch_array($qp3_1);
    $preg3_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 3 and respuesta = 2";
    $qp3_2 = mysqli_query($conn, $preg3_2);
    $r3_2 = mysqli_fetch_array($qp3_2);
    $preg3_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 3 and respuesta = 3";
    $qp3_3 = mysqli_query($conn, $preg3_3);
    $r3_3 = mysqli_fetch_array($qp3_3);
    $preg3_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 3 and respuesta = 4";
    $qp3_4 = mysqli_query($conn, $preg3_4);
    $r3_4 = mysqli_fetch_array($qp3_4);

    $preg4_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 4";
    $qp4_ = mysqli_query($conn, $preg4_);
    $r4_ = mysqli_fetch_array($qp4_);
    $preg4_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 4";
    $qp4_11 = mysqli_query($conn, $preg4_11);
    $r4_11 = mysqli_fetch_array($qp4_11);
    $preg4_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 4";
    $qp4_22 = mysqli_query($conn, $preg4_22);
    $r4_22 = mysqli_fetch_array($qp4_22);
    $preg4_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 4";
    $qp4_33 = mysqli_query($conn, $preg4_33);
    $r4_33 = mysqli_fetch_array($qp4_33);
    $preg4_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 4 and respuesta = 1";
    $qp4_1 = mysqli_query($conn, $preg4_1);
    $r4_1 = mysqli_fetch_array($qp4_1);
    $preg4_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 4 and respuesta = 2";
    $qp4_2 = mysqli_query($conn, $preg4_2);
    $r4_2 = mysqli_fetch_array($qp4_2);
    $preg4_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 4 and respuesta = 3";
    $qp4_3 = mysqli_query($conn, $preg4_3);
    $r4_3 = mysqli_fetch_array($qp4_3);
    $preg4_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 4 and respuesta = 4";
    $qp4_4 = mysqli_query($conn, $preg4_4);
    $r4_4 = mysqli_fetch_array($qp4_4);

    $preg5_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 5";
    $qp5_ = mysqli_query($conn, $preg5_);
    $r5_ = mysqli_fetch_array($qp5_);
    $preg5_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 5";
    $qp5_11 = mysqli_query($conn, $preg5_11);
    $r5_11 = mysqli_fetch_array($qp5_11);
    $preg5_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 5";
    $qp5_22 = mysqli_query($conn, $preg5_22);
    $r5_22 = mysqli_fetch_array($qp5_22);
    $preg5_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 5";
    $qp5_33 = mysqli_query($conn, $preg5_33);
    $r5_33 = mysqli_fetch_array($qp5_33);
    $preg5_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 5 and respuesta = 1";
    $qp5_1 = mysqli_query($conn, $preg5_1);
    $r5_1 = mysqli_fetch_array($qp5_1);
    $preg5_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 5 and respuesta = 2";
    $qp5_2 = mysqli_query($conn, $preg5_2);
    $r5_2 = mysqli_fetch_array($qp5_2);
    $preg5_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 5 and respuesta = 3";
    $qp5_3 = mysqli_query($conn, $preg5_3);
    $r5_3 = mysqli_fetch_array($qp5_3);
    $preg5_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 5 and respuesta = 4";
    $qp5_4 = mysqli_query($conn, $preg5_4);
    $r5_4 = mysqli_fetch_array($qp5_4);

    $preg6_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 6";
    $qp6_ = mysqli_query($conn, $preg6_);
    $r6_ = mysqli_fetch_array($qp6_);
    $preg6_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 6";
    $qp6_11 = mysqli_query($conn, $preg6_11);
    $r6_11 = mysqli_fetch_array($qp6_11);
    $preg6_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 6";
    $qp6_22 = mysqli_query($conn, $preg6_22);
    $r6_22 = mysqli_fetch_array($qp6_22);
    $preg6_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 6";
    $qp6_33 = mysqli_query($conn, $preg6_33);
    $r6_33 = mysqli_fetch_array($qp6_33);
    $preg6_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 6 and respuesta = 1";
    $qp6_1 = mysqli_query($conn, $preg6_1);
    $r6_1 = mysqli_fetch_array($qp6_1);
    $preg6_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 6 and respuesta = 2";
    $qp6_2 = mysqli_query($conn, $preg6_2);
    $r6_2 = mysqli_fetch_array($qp6_2);
    $preg6_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 6 and respuesta = 3";
    $qp6_3 = mysqli_query($conn, $preg6_3);
    $r6_3 = mysqli_fetch_array($qp6_3);
    $preg6_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 6 and respuesta = 4";
    $qp6_4 = mysqli_query($conn, $preg6_4);
    $r6_4 = mysqli_fetch_array($qp6_4);

    $preg7_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 7";
    $qp7_ = mysqli_query($conn, $preg7_);
    $r7_ = mysqli_fetch_array($qp7_);
    $preg7_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 7";
    $qp7_11 = mysqli_query($conn, $preg7_11);
    $r7_11 = mysqli_fetch_array($qp7_11);
    $preg7_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 7";
    $qp7_22 = mysqli_query($conn, $preg7_22);
    $r7_22 = mysqli_fetch_array($qp7_22);
    $preg7_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 7";
    $qp7_33 = mysqli_query($conn, $preg7_33);
    $r7_33 = mysqli_fetch_array($qp7_33);
    $preg7_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 7 and respuesta = 1";
    $qp7_1 = mysqli_query($conn, $preg7_1);
    $r7_1 = mysqli_fetch_array($qp7_1);
    $preg7_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 7 and respuesta = 2";
    $qp7_2 = mysqli_query($conn, $preg7_2);
    $r7_2 = mysqli_fetch_array($qp7_2);
    $preg7_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 7 and respuesta = 3";
    $qp7_3 = mysqli_query($conn, $preg7_3);
    $r7_3 = mysqli_fetch_array($qp7_3);
    $preg7_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 7 and respuesta = 4";
    $qp7_4 = mysqli_query($conn, $preg7_4);
    $r7_4 = mysqli_fetch_array($qp7_4);

    $preg8_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 8";
    $qp8_ = mysqli_query($conn, $preg8_);
    $r8_ = mysqli_fetch_array($qp8_);
    $preg8_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 8";
    $qp8_11 = mysqli_query($conn, $preg8_11);
    $r8_11 = mysqli_fetch_array($qp8_11);
    $preg8_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 8";
    $qp8_22 = mysqli_query($conn, $preg8_22);
    $r8_22 = mysqli_fetch_array($qp8_22);
    $preg8_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 8";
    $qp8_33 = mysqli_query($conn, $preg8_33);
    $r8_33 = mysqli_fetch_array($qp8_33);
    $preg8_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 8 and respuesta = 1";
    $qp8_1 = mysqli_query($conn, $preg8_1);
    $r8_1 = mysqli_fetch_array($qp8_1);
    $preg8_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 8 and respuesta = 2";
    $qp8_2 = mysqli_query($conn, $preg8_2);
    $r8_2 = mysqli_fetch_array($qp8_2);
    $preg8_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 8 and respuesta = 3";
    $qp8_3 = mysqli_query($conn, $preg8_3);
    $r8_3 = mysqli_fetch_array($qp8_3);
    $preg8_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 8 and respuesta = 4";
    $qp8_4 = mysqli_query($conn, $preg8_4);
    $r8_4 = mysqli_fetch_array($qp8_4);

    $preg9_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 9";
    $qp9_ = mysqli_query($conn, $preg9_);
    $r9_ = mysqli_fetch_array($qp9_);
    $preg9_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 9";
    $qp9_11 = mysqli_query($conn, $preg9_11);
    $r9_11 = mysqli_fetch_array($qp9_11);
    $preg9_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 9";
    $qp9_22 = mysqli_query($conn, $preg9_22);
    $r9_22 = mysqli_fetch_array($qp9_22);
    $preg9_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 9";
    $qp9_33 = mysqli_query($conn, $preg9_33);
    $r9_33 = mysqli_fetch_array($qp9_33);
    $preg9_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 9 and respuesta = 1";
    $qp9_1 = mysqli_query($conn, $preg9_1);
    $r9_1 = mysqli_fetch_array($qp9_1);
    $preg9_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 9 and respuesta = 2";
    $qp9_2 = mysqli_query($conn, $preg9_2);
    $r9_2 = mysqli_fetch_array($qp9_2);
    $preg9_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 9 and respuesta = 3";
    $qp9_3 = mysqli_query($conn, $preg9_3);
    $r9_3 = mysqli_fetch_array($qp9_3);
    $preg9_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 9 and respuesta = 4";
    $qp9_4 = mysqli_query($conn, $preg9_4);
    $r9_4 = mysqli_fetch_array($qp9_4);

    $preg10_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 10";
    $qp10_ = mysqli_query($conn, $preg10_);
    $r10_ = mysqli_fetch_array($qp10_);
    $preg10_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 10";
    $qp10_11 = mysqli_query($conn, $preg10_11);
    $r10_11 = mysqli_fetch_array($qp10_11);
    $preg10_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 10";
    $qp10_22 = mysqli_query($conn, $preg10_22);
    $r10_22 = mysqli_fetch_array($qp10_22);
    $preg10_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 10";
    $qp10_33 = mysqli_query($conn, $preg10_33);
    $r10_33 = mysqli_fetch_array($qp10_33);
    $preg10_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 10 and respuesta = 1";
    $qp10_1 = mysqli_query($conn, $preg10_1);
    $r10_1 = mysqli_fetch_array($qp10_1);
    $preg10_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 10 and respuesta = 2";
    $qp10_2 = mysqli_query($conn, $preg10_2);
    $r10_2 = mysqli_fetch_array($qp10_2);
    $preg10_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 10 and respuesta = 3";
    $qp10_3 = mysqli_query($conn, $preg10_3);
    $r10_3 = mysqli_fetch_array($qp10_3);
    $preg10_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 10 and respuesta = 4";
    $qp10_4 = mysqli_query($conn, $preg10_4);
    $r10_4 = mysqli_fetch_array($qp10_4);

    $preg11_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 11";
    $qp11_ = mysqli_query($conn, $preg11_);
    $r11_ = mysqli_fetch_array($qp11_);
    $preg11_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 11";
    $qp11_11 = mysqli_query($conn, $preg11_11);
    $r11_11 = mysqli_fetch_array($qp11_11);
    $preg11_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 11";
    $qp11_22 = mysqli_query($conn, $preg11_22);
    $r11_22 = mysqli_fetch_array($qp11_22);
    $preg11_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 11";
    $qp11_33 = mysqli_query($conn, $preg11_33);
    $r11_33 = mysqli_fetch_array($qp11_33);
    $preg11_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 11 and respuesta = 1";
    $qp11_1 = mysqli_query($conn, $preg11_1);
    $r11_1 = mysqli_fetch_array($qp11_1);
    $preg11_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 11 and respuesta = 2";
    $qp11_2 = mysqli_query($conn, $preg11_2);
    $r11_2 = mysqli_fetch_array($qp11_2);
    $preg11_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 11 and respuesta = 3";
    $qp11_3 = mysqli_query($conn, $preg11_3);
    $r11_3 = mysqli_fetch_array($qp11_3);
    $preg11_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 11 and respuesta = 4";
    $qp11_4 = mysqli_query($conn, $preg11_4);
    $r11_4 = mysqli_fetch_array($qp11_4);

    $preg12_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 12";
    $qp12_ = mysqli_query($conn, $preg12_);
    $r12_ = mysqli_fetch_array($qp12_);
    $preg12_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 12";
    $qp12_11 = mysqli_query($conn, $preg12_11);
    $r12_11 = mysqli_fetch_array($qp12_11);
    $preg12_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 12";
    $qp12_22 = mysqli_query($conn, $preg12_22);
    $r12_22 = mysqli_fetch_array($qp12_22);
    $preg12_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 12";
    $qp12_33 = mysqli_query($conn, $preg12_33);
    $r12_33 = mysqli_fetch_array($qp12_33);
    $preg12_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 12 and respuesta = 1";
    $qp12_1 = mysqli_query($conn, $preg12_1);
    $r12_1 = mysqli_fetch_array($qp12_1);
    $preg12_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 12 and respuesta = 2";
    $qp12_2 = mysqli_query($conn, $preg12_2);
    $r12_2 = mysqli_fetch_array($qp12_2);
    $preg12_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 12 and respuesta = 3";
    $qp12_3 = mysqli_query($conn, $preg12_3);
    $r12_3 = mysqli_fetch_array($qp12_3);
    $preg12_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 12 and respuesta = 4";
    $qp12_4 = mysqli_query($conn, $preg12_4);
    $r12_4 = mysqli_fetch_array($qp12_4);

    $preg13_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 13";
    $qp13_ = mysqli_query($conn, $preg13_);
    $r13_ = mysqli_fetch_array($qp13_);
    $preg13_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 13";
    $qp13_11 = mysqli_query($conn, $preg13_11);
    $r13_11 = mysqli_fetch_array($qp13_11);
    $preg13_22 = "SELECT opcion3 FROM pregunta WHERE pregunta_id = 13";
    $qp13_22 = mysqli_query($conn, $preg13_22);
    $r13_22 = mysqli_fetch_array($qp13_22);
    $preg13_33 = "SELECT opcion4 FROM pregunta WHERE pregunta_id = 13";
    $qp13_33 = mysqli_query($conn, $preg13_33);
    $r13_33 = mysqli_fetch_array($qp13_33);
    $preg13_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 13 and respuesta = 1";
    $qp13_1 = mysqli_query($conn, $preg13_1);
    $r13_1 = mysqli_fetch_array($qp13_1);
    $preg13_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 13 and respuesta = 2";
    $qp13_2 = mysqli_query($conn, $preg13_2);
    $r13_2 = mysqli_fetch_array($qp13_2);
    $preg13_3 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 13 and respuesta = 3";
    $qp13_3 = mysqli_query($conn, $preg13_3);
    $r13_3 = mysqli_fetch_array($qp13_3);
    $preg13_4 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 13 and respuesta = 4";
    $qp13_4 = mysqli_query($conn, $preg13_4);
    $r13_4 = mysqli_fetch_array($qp13_4);

    $preg14_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 14";
    $qp14_ = mysqli_query($conn, $preg14_);
    $r14_ = mysqli_fetch_array($qp14_);
    $preg14_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 14";
    $qp14_11 = mysqli_query($conn, $preg14_11);
    $r14_11 = mysqli_fetch_array($qp14_11);
    $preg14_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 14 and respuesta = 1";
    $qp14_1 = mysqli_query($conn, $preg14_1);
    $r14_1 = mysqli_fetch_array($qp14_1);
    $preg14_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 14 and respuesta = 2";
    $qp14_2 = mysqli_query($conn, $preg14_2);
    $r14_2 = mysqli_fetch_array($qp14_2);

    $preg15_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 15";
    $qp15_ = mysqli_query($conn, $preg15_);
    $r15_ = mysqli_fetch_array($qp15_);
    $preg15_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 15";
    $qp15_11 = mysqli_query($conn, $preg15_11);
    $r15_11 = mysqli_fetch_array($qp15_11);
    $preg15_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 15 and respuesta = 1";
    $qp15_1 = mysqli_query($conn, $preg15_1);
    $r15_1 = mysqli_fetch_array($qp15_1);
    $preg15_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 15 and respuesta = 2";
    $qp15_2 = mysqli_query($conn, $preg15_2);
    $r15_2 = mysqli_fetch_array($qp15_2);

    $preg16_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 16";
    $qp16_ = mysqli_query($conn, $preg16_);
    $r16_ = mysqli_fetch_array($qp16_);
    $preg16_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 16";
    $qp16_11 = mysqli_query($conn, $preg16_11);
    $r16_11 = mysqli_fetch_array($qp16_11);
    $preg16_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 16 and respuesta = 1";
    $qp16_1 = mysqli_query($conn, $preg16_1);
    $r16_1 = mysqli_fetch_array($qp16_1);
    $preg16_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 16 and respuesta = 2";
    $qp16_2 = mysqli_query($conn, $preg16_2);
    $r16_2 = mysqli_fetch_array($qp16_2);

    $preg17_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 17";
    $qp17_ = mysqli_query($conn, $preg17_);
    $r17_ = mysqli_fetch_array($qp17_);
    $preg17_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 17";
    $qp17_11 = mysqli_query($conn, $preg17_11);
    $r17_11 = mysqli_fetch_array($qp17_11);
    $preg17_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 17 and respuesta = 1";
    $qp17_1 = mysqli_query($conn, $preg17_1);
    $r17_1 = mysqli_fetch_array($qp17_1);
    $preg17_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 17 and respuesta = 2";
    $qp17_2 = mysqli_query($conn, $preg17_2);
    $r17_2 = mysqli_fetch_array($qp17_2);

    $preg18_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 18";
    $qp18_ = mysqli_query($conn, $preg18_);
    $r18_ = mysqli_fetch_array($qp18_);
    $preg18_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 18";
    $qp18_11 = mysqli_query($conn, $preg18_11);
    $r18_11 = mysqli_fetch_array($qp18_11);
    $preg18_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 18 and respuesta = 1";
    $qp18_1 = mysqli_query($conn, $preg18_1);
    $r18_1 = mysqli_fetch_array($qp18_1);
    $preg18_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 18 and respuesta = 2";
    $qp18_2 = mysqli_query($conn, $preg18_2);
    $r18_2 = mysqli_fetch_array($qp18_2);

    $preg19_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 19";
    $qp19_ = mysqli_query($conn, $preg19_);
    $r19_ = mysqli_fetch_array($qp19_);
    $preg19_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 19";
    $qp19_11 = mysqli_query($conn, $preg19_11);
    $r19_11 = mysqli_fetch_array($qp19_11);
    $preg19_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 19 and respuesta = 1";
    $qp19_1 = mysqli_query($conn, $preg19_1);
    $r19_1 = mysqli_fetch_array($qp19_1);
    $preg19_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 19 and respuesta = 2";
    $qp19_2 = mysqli_query($conn, $preg19_2);
    $r19_2 = mysqli_fetch_array($qp19_2);

    $preg20_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 20";
    $qp20_ = mysqli_query($conn, $preg20_);
    $r20_ = mysqli_fetch_array($qp20_);
    $preg20_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 20";
    $qp20_11 = mysqli_query($conn, $preg20_11);
    $r20_11 = mysqli_fetch_array($qp20_11);
    $preg20_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 20 and respuesta = 1";
    $qp20_1 = mysqli_query($conn, $preg20_1);
    $r20_1 = mysqli_fetch_array($qp20_1);
    $preg20_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 20 and respuesta = 2";
    $qp20_2 = mysqli_query($conn, $preg20_2);
    $r20_2 = mysqli_fetch_array($qp20_2);

    $preg21_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 21";
    $qp21_ = mysqli_query($conn, $preg21_);
    $r21_ = mysqli_fetch_array($qp21_);
    $preg21_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 21";
    $qp21_11 = mysqli_query($conn, $preg21_11);
    $r21_11 = mysqli_fetch_array($qp21_11);
    $preg21_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 21 and respuesta = 1";
    $qp21_1 = mysqli_query($conn, $preg21_1);
    $r21_1 = mysqli_fetch_array($qp21_1);
    $preg21_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 21 and respuesta = 2";
    $qp21_2 = mysqli_query($conn, $preg21_2);
    $r21_2 = mysqli_fetch_array($qp21_2);

    $preg22_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 22";
    $qp22_ = mysqli_query($conn, $preg22_);
    $r22_ = mysqli_fetch_array($qp22_);
    $preg22_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 22";
    $qp22_11 = mysqli_query($conn, $preg22_11);
    $r22_11 = mysqli_fetch_array($qp22_11);
    $preg22_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 22 and respuesta = 1";
    $qp22_1 = mysqli_query($conn, $preg22_1);
    $r22_1 = mysqli_fetch_array($qp22_1);
    $preg22_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 22 and respuesta = 2";
    $qp22_2 = mysqli_query($conn, $preg22_2);
    $r22_2 = mysqli_fetch_array($qp22_2);

    $preg23_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 23";
    $qp23_ = mysqli_query($conn, $preg23_);
    $r23_ = mysqli_fetch_array($qp23_);
    $preg23_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 23";
    $qp23_11 = mysqli_query($conn, $preg23_11);
    $r23_11 = mysqli_fetch_array($qp23_11);
    $preg23_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 23 and respuesta = 1";
    $qp23_1 = mysqli_query($conn, $preg23_1);
    $r23_1 = mysqli_fetch_array($qp23_1);
    $preg23_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 23 and respuesta = 2";
    $qp23_2 = mysqli_query($conn, $preg23_2);
    $r23_2 = mysqli_fetch_array($qp23_2);

    $preg24_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 24";
    $qp24_ = mysqli_query($conn, $preg24_);
    $r24_ = mysqli_fetch_array($qp24_);
    $preg24_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 24";
    $qp24_11 = mysqli_query($conn, $preg24_11);
    $r24_11 = mysqli_fetch_array($qp24_11);
    $preg24_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 24 and respuesta = 1";
    $qp24_1 = mysqli_query($conn, $preg24_1);
    $r24_1 = mysqli_fetch_array($qp24_1);
    $preg24_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 24 and respuesta = 2";
    $qp24_2 = mysqli_query($conn, $preg24_2);
    $r24_2 = mysqli_fetch_array($qp24_2);

    $preg25_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 25";
    $qp25_ = mysqli_query($conn, $preg25_);
    $r25_ = mysqli_fetch_array($qp25_);
    $preg25_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 25";
    $qp25_11 = mysqli_query($conn, $preg25_11);
    $r25_11 = mysqli_fetch_array($qp25_11);
    $preg25_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 25 and respuesta = 1";
    $qp25_1 = mysqli_query($conn, $preg25_1);
    $r25_1 = mysqli_fetch_array($qp25_1);
    $preg25_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 25 and respuesta = 2";
    $qp25_2 = mysqli_query($conn, $preg25_2);
    $r25_2 = mysqli_fetch_array($qp25_2);

    $preg26_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 26";
    $qp26_ = mysqli_query($conn, $preg26_);
    $r26_ = mysqli_fetch_array($qp26_);
    $preg26_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 26";
    $qp26_11 = mysqli_query($conn, $preg26_11);
    $r26_11 = mysqli_fetch_array($qp26_11);
    $preg26_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 26 and respuesta = 1";
    $qp26_1 = mysqli_query($conn, $preg26_1);
    $r26_1 = mysqli_fetch_array($qp26_1);
    $preg26_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 26 and respuesta = 2";
    $qp26_2 = mysqli_query($conn, $preg26_2);
    $r26_2 = mysqli_fetch_array($qp26_2);

    $preg27_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 27";
    $qp27_ = mysqli_query($conn, $preg27_);
    $r27_ = mysqli_fetch_array($qp27_);
    $preg27_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 27";
    $qp27_11 = mysqli_query($conn, $preg27_11);
    $r27_11 = mysqli_fetch_array($qp27_11);
    $preg27_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 27 and respuesta = 1";
    $qp27_1 = mysqli_query($conn, $preg27_1);
    $r27_1 = mysqli_fetch_array($qp27_1);
    $preg27_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 27 and respuesta = 2";
    $qp27_2 = mysqli_query($conn, $preg27_2);
    $r27_2 = mysqli_fetch_array($qp27_2);

    $preg28_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 28";
    $qp28_ = mysqli_query($conn, $preg28_);
    $r28_ = mysqli_fetch_array($qp28_);
    $preg28_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 28";
    $qp28_11 = mysqli_query($conn, $preg28_11);
    $r28_11 = mysqli_fetch_array($qp28_11);
    $preg28_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 28 and respuesta = 1";
    $qp28_1 = mysqli_query($conn, $preg28_1);
    $r28_1 = mysqli_fetch_array($qp28_1);
    $preg28_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 28 and respuesta = 2";
    $qp28_2 = mysqli_query($conn, $preg28_2);
    $r28_2 = mysqli_fetch_array($qp28_2);

    $preg29_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 29";
    $qp29_ = mysqli_query($conn, $preg29_);
    $r29_ = mysqli_fetch_array($qp29_);
    $preg29_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 29";
    $qp29_11 = mysqli_query($conn, $preg29_11);
    $r29_11 = mysqli_fetch_array($qp29_11);
    $preg29_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 29 and respuesta = 1";
    $qp29_1 = mysqli_query($conn, $preg29_1);
    $r29_1 = mysqli_fetch_array($qp29_1);
    $preg29_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 29 and respuesta = 2";
    $qp29_2 = mysqli_query($conn, $preg29_2);
    $r29_2 = mysqli_fetch_array($qp29_2);

    $preg30_ = "SELECT opcion1 FROM pregunta WHERE pregunta_id = 30";
    $qp30_ = mysqli_query($conn, $preg30_);
    $r30_ = mysqli_fetch_array($qp30_);
    $preg30_11 = "SELECT opcion2 FROM pregunta WHERE pregunta_id = 30";
    $qp30_11 = mysqli_query($conn, $preg30_11);
    $r30_11 = mysqli_fetch_array($qp30_11);
    $preg30_1 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 30 and respuesta = 1";
    $qp30_1 = mysqli_query($conn, $preg30_1);
    $r30_1 = mysqli_fetch_array($qp30_1);
    $preg30_2 = "SELECT COUNT(respuesta) FROM respuesta WHERE preguntaID = 30 and respuesta = 2";
    $qp30_2 = mysqli_query($conn, $preg30_2);
    $r30_2 = mysqli_fetch_array($qp30_2);
?>
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r1_[0]',$r1_1[0]" ?>],
            [<?php echo "'$r1_11[0]',$r1_2[0]" ?>],
            [<?php echo "'$r1_22[0]',$r1_3[0]" ?>],
            [<?php echo "'$r1_33[0]',$r1_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 1'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta1'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r2_[0]',$r2_1[0]" ?>],
            [<?php echo "'$r2_11[0]',$r2_2[0]" ?>],
            [<?php echo "'$r2_22[0]',$r2_3[0]" ?>],
            [<?php echo "'$r2_33[0]',$r2_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 2'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta2'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r3_[0]',$r3_1[0]" ?>],
            [<?php echo "'$r3_11[0]',$r3_2[0]" ?>],
            [<?php echo "'$r3_22[0]',$r3_3[0]" ?>],
            [<?php echo "'$r3_33[0]',$r3_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 3'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta3'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r4_[0]',$r4_1[0]" ?>],
            [<?php echo "'$r4_11[0]',$r4_2[0]" ?>],
            [<?php echo "'$r4_22[0]',$r4_3[0]" ?>],
            [<?php echo "'$r4_33[0]',$r4_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 4'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta4'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r5_[0]',$r5_1[0]" ?>],
            [<?php echo "'$r5_11[0]',$r5_2[0]" ?>],
            [<?php echo "'$r5_22[0]',$r5_3[0]" ?>],
            [<?php echo "'$r5_33[0]',$r5_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 5'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta5'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r5_[0]',$r5_1[0]" ?>],
            [<?php echo "'$r5_11[0]',$r5_2[0]" ?>],
            [<?php echo "'$r5_22[0]',$r5_3[0]" ?>],
            [<?php echo "'$r5_33[0]',$r5_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 5'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta5'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r6_[0]',$r6_1[0]" ?>],
            [<?php echo "'$r6_11[0]',$r6_2[0]" ?>],
            [<?php echo "'$r6_22[0]',$r6_3[0]" ?>],
            [<?php echo "'$r6_33[0]',$r6_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 6'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta6'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r7_[0]',$r7_1[0]" ?>],
            [<?php echo "'$r7_11[0]',$r7_2[0]" ?>],
            [<?php echo "'$r7_22[0]',$r7_3[0]" ?>],
            [<?php echo "'$r7_33[0]',$r7_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 7'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta7'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r8_[0]',$r8_1[0]" ?>],
            [<?php echo "'$r8_11[0]',$r8_2[0]" ?>],
            [<?php echo "'$r8_22[0]',$r8_3[0]" ?>],
            [<?php echo "'$r8_33[0]',$r8_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 8'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta8'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r9_[0]',$r9_1[0]" ?>],
            [<?php echo "'$r9_11[0]',$r9_2[0]" ?>],
            [<?php echo "'$r9_22[0]',$r9_3[0]" ?>],
            [<?php echo "'$r9_33[0]',$r9_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 9'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta9'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r10_[0]',$r10_1[0]" ?>],
            [<?php echo "'$r10_11[0]',$r10_2[0]" ?>],
            [<?php echo "'$r10_22[0]',$r10_3[0]" ?>],
            [<?php echo "'$r10_33[0]',$r10_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 10'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta10'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r11_[0]',$r11_1[0]" ?>],
            [<?php echo "'$r11_11[0]',$r11_2[0]" ?>],
            [<?php echo "'$r11_22[0]',$r11_3[0]" ?>],
            [<?php echo "'$r11_33[0]',$r11_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 11'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta11'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r12_[0]',$r12_1[0]" ?>],
            [<?php echo "'$r12_11[0]',$r12_2[0]" ?>],
            [<?php echo "'$r12_22[0]',$r12_3[0]" ?>],
            [<?php echo "'$r12_33[0]',$r12_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 12'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta12'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r13_[0]',$r13_1[0]" ?>],
            [<?php echo "'$r13_11[0]',$r13_2[0]" ?>],
            [<?php echo "'$r13_22[0]',$r13_3[0]" ?>],
            [<?php echo "'$r13_33[0]',$r13_4[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 13'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta13'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r14_[0]',$r14_1[0]" ?>],
            [<?php echo "'$r14_11[0]',$r14_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 14'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta14'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r15_[0]',$r15_1[0]" ?>],
            [<?php echo "'$r15_11[0]',$r15_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 15'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta15'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r16_[0]',$r16_1[0]" ?>],
            [<?php echo "'$r16_11[0]',$r16_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 16'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta16'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r17_[0]',$r17_1[0]" ?>],
            [<?php echo "'$r17_11[0]',$r17_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 17'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta17'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r18_[0]',$r18_1[0]" ?>],
            [<?php echo "'$r18_11[0]',$r18_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 18'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta18'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r19_[0]',$r19_1[0]" ?>],
            [<?php echo "'$r19_11[0]',$r19_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 19'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta19'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r20_[0]',$r20_1[0]" ?>],
            [<?php echo "'$r20_11[0]',$r20_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 20'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta20'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r21_[0]',$r21_1[0]" ?>],
            [<?php echo "'$r21_11[0]',$r21_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 21'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta21'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r22_[0]',$r22_1[0]" ?>],
            [<?php echo "'$r22_11[0]',$r22_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 22'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta22'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r23_[0]',$r23_1[0]" ?>],
            [<?php echo "'$r23_11[0]',$r23_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 23'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta23'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r24_[0]',$r24_1[0]" ?>],
            [<?php echo "'$r24_11[0]',$r24_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 24'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta24'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r25_[0]',$r25_1[0]" ?>],
            [<?php echo "'$r25_11[0]',$r25_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 25'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta25'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r26_[0]',$r26_1[0]" ?>],
            [<?php echo "'$r26_11[0]',$r26_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 26'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta26'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r27_[0]',$r27_1[0]" ?>],
            [<?php echo "'$r27_11[0]',$r27_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 27'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta27'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r28_[0]',$r28_1[0]" ?>],
            [<?php echo "'$r28_11[0]',$r28_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 28'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta28'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r29_[0]',$r29_1[0]" ?>],
            [<?php echo "'$r29_11[0]',$r29_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 29'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta29'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pregunta','Respuesta'],
            [<?php echo "'$r30_[0]',$r30_1[0]" ?>],
            [<?php echo "'$r30_11[0]',$r30_2[0]" ?>]
        ]);

        var options = {
          title: 'Pregunta 30'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pregunta30'));

        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="pregunta1" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta2" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta3" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta4" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta5" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta6" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta7" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta8" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta9" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta10" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta11" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta12" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta13" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta14" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta15" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta16" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta17" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta18" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta19" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta20" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta21" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta22" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta23" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta24" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta25" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta26" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta27" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta28" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta29" class="graficaP" style="width: 900px; height: 500px;"></div>
    <div id="pregunta30" class="graficaP" style="width: 900px; height: 500px;"></div>
  </body>
</html>