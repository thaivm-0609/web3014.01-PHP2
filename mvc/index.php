<?php
    require "models/Student.php";

    $url = isset($_GET['url']) 
        ? $_GET['url']
        : '/';
    switch ($url) {
        case '/': 
            $students = getStudents();
            // var_dump($students);
            // die;
            include 'views/students.php';
    }
?>