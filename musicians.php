<?php

require_once('util.inc');
require_once('text_musicians');

function show($pic, $text, $pic_left) {
    $p = "<img width=280 src=\"images/$pic\">";
    if ($pic_left&1) {
        $x1 = $p;
        $x2 = $text;
    } else {
        $x1 = $text;
        $x2 = $p;
    }
    echo sprintf('
        <table cellpadding=20>
            <tr>
                <td valign=top %s>%s</td>
                <td valign=top %s>%s</td>
            </tr>
        </table>
        ', FONT_SMALL, $x1, FONT_SMALL, $x2
    );
}

function main() {
    global $amelie;
    global $anne_fahy;
    global $aurelie;
    global $claire;
    global $clea;
    global $daphne;
    global $diane;
    global $diego;
    global $elfa;
    global $flore;
    global $frederic;
    global $hanna;
    global $jesus;
    global $josefien;
    global $lina;
    global $lise;
    global $loriane;
    global $margaret;
    global $maryse;
    global $peter;
    global $rene;
    global $severine;
    global $stephen_alltop;
    global $susan;
    global $teddy;
    global $vladimir;

    head('musicians.php');
    $i = 0;
    show('maryse.jpg', $maryse, $i++);
    show('anne_fahy.jpeg', $anne_fahy, $i++);
    show('clea.jpg', $clea, $i++);
    show('margaret.jpeg', $margaret, $i++);
    show('elfa.jpg', $elfa, $i++);
    show('frederic_munoz.jpg', $frederic, $i++);
    show('aurelie-crop-u3799.jpg', $aurelie, $i++);
    show('vlad.jpg', $vladimir, $i++);
    show('claire2.jpg', $claire, $i++);
    show('josefien.jpg', $josefien, $i++);
    show('flore_seube2.jpg', $flore, $i++);
    show('stephen_alltop.jpeg', $stephen_alltop, $i++);
    show('teddy_sm.jpg', $teddy, $i++);

    //show('hanna.jpg', $hanna, $i++);
    //show('jesus.jpeg', $jesus, $i++);
    //show('margaret.jpg', $Margaret, $i++);
    //show('lina.jpg', $lina, $i++);
    //show('loriane.jpg', $loriane, $i++);
    //show('diane_mond.jpg', $diane, $i++);
    //show('severine.jpg', $severine, $i++);
    //show('daphne.jpeg', $daphne, $i++);
    //show('susan.jpeg', $susan, $i++);
    //show('peter.jpeg', $peter, $i++);
    //show('diego.jpg', $diego, $i++);
    //show('lise.jpeg', $lise, $i++);
    //show('rene2.jpg', $rene, $i++);
    tail();
}

main();

?>
