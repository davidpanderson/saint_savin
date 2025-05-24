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
    global $aurelie;
    global $claire;
    global $clea;
    global $daphne;
    global $diane;
    global $diego;
    global $elfa;
    global $flore;
    global $hanna;
    global $jesus;
    global $lina;
    global $lise;
    global $loriane;
    global $margaret;
    global $maryse;
    global $peter;
    global $severine;
    global $susan;
    global $vladimir;

    head('musicians.php');
    $i = 0;
    show('maryse.jpg', $maryse, $i++);
    show('daphne.jpeg', $daphne, $i++);
    show('susan.jpeg', $susan, $i++);
    show('peter.jpeg', $peter, $i++);
    show('margaret.jpeg', $margaret, $i++);
    show('clea photo bedous.jpg', $clea, $i++);
    show('elfa.jpg', $elfa, $i++);
    show('hanna.jpg', $hanna, $i++);
    show('jesus.jpeg', $jesus, $i++);
    show('image1.jpg', $diego, $i++);
    show('aurelie-crop-u3799.jpg', $aurelie, $i++);
    show('vlad.jpg', $vladimir, $i++);
    show('lise.jpeg', $lise, $i++);
    show('claire2.jpg', $claire, $i++);

    //show('margaret.jpg', $Margaret, $i++);
    //show('lina.jpg', $lina, $i++);
    //show('loriane.jpg', $loriane, $i++);
    //show('diane mond.jpg', $diane, $i++);
    //show('flore seube.jpg', $flore, $i++);
    //show('severine.jpg', $severine, $i++);
    tail();
}

main();

?>
