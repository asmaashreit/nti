<?php
    $students = array(
                    array('Asmaa',20,3.4),
                    array('Mohamed',22,2.4),
                    array('Ahmed',21,5.2),
                    array('Ali',23,4.4),
                );
    
    foreach($students as $data_student){
        foreach($data_student as $data){
            echo $data . ' ';
        }; 
        echo '<br>';
    };
?>