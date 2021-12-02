<?php
session_start();
require_once('sanitize_input.php');
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'checkXSS') {
        $checkTheValue = checkIfXSS($_POST["formValue"]);

        // If XSS, send signal back to JS
        if ($checkTheValue) {
            $success = true;

        } else {
            $success = false;
            $_SESSION['hello'] = $_POST["formValue"];
        }

        
        // grab the contents send back to js
        $json_array = array(
            'success' => $success
        );

        echo json_encode($json_array);
    }
}

?>