<?php

require_once('util.inc');
require_once('program_2024');

function main() {
    global $program_2024;
    head('programs.php');
    show_year(2024, $program_2024);
    tail();
}

main();

?>
