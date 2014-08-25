<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('lena512color.jpg');
$detector->toJpeg();
