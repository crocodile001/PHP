<?php
header('Content-Type:text/html; charset=utf-8');

$conn=mysqli_connect('localhost','root');
mysqli_query($conn,'use book');
mysqli_query($conn,'set names utf8');

