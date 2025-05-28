<?php

require_once('util.inc');
require_once('program_2024');
require_once('program_2022');
require_once('program_2019');
require_once('program_2017');
require_once('program_2016');
require_once('program_2014');

function main() {
    global $program_2024;
    global $program_2022;
    global $program_2019;
    global $program_2017;
    global $program_2016;
    global $program_2014;
    head('old_programs.php');
    show_year(2022, $program_2024);
    show_year(2022, $program_2022);
    show_year(2019, $program_2019);
    show_year(2017, $program_2017);
    show_year(2016, $program_2016);
    show_year(2014, $program_2014);
    tail();
}

main();

?>
