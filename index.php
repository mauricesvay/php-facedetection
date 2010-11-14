<?php

include "FaceDetector.php";

$detector = new Face_Detector('detection.dat');
$detector->face_detect('lena512color.jpg');
$detector->toJpeg();
