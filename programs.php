<?php

require_once('util.inc');
require_once('program_2025');

function main() {
    global $program_2025;
    head('programs.php');
    show_year(2025, $program_2025);
    tail();
}

main();

?>
