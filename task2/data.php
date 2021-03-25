<?php
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title_en = $_POST['title_en']; 
        $title_ar = $_POST['title_ar']; 
        $subject_en = $_POST['subject_en']; 
        $subject_ar = $_POST['subject_ar'];
        if(((strlen($title_en) >= 10 && strlen($title_en) <= 20) && (strlen($title_ar) >= 10 && strlen($title_ar) <= 20)) && ((strlen($subject_en) >= 20 && strlen($subject_en) <= 100) && (strlen($subject_ar) >= 20 && strlen($subject_ar) <= 100))) {
            echo $title_en . '<br>';
            echo $subject_en . '<br>';
            echo $title_ar . '<br>';
            echo $subject_ar . '<br>';
        }else{
            echo 'error';
        }
    }
?>