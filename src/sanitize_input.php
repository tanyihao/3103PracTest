<?php
function checkIfXSS($input) {
    preg_match('<script>', $input, $match);
    if (count($match) >= 1) {
        return True;
    } else {
        return False;
    }
}
?>