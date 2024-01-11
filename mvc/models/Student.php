<?php
    require "pdo.php";

    function getStudents() {
        $sql = "SELECT * FROM students WHERE 1";
        $students = pdo_query($sql);

        return $students;
    }
?>