<?php

    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        echo $_FILES;
        move_uploaded_file($_FILES['file']['tmp_name'], '../image/' . $_FILES['file']['name']);
    }

?>