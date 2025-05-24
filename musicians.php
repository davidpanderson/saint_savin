<?php

require_once('util.inc');
require_once('text_musicians');

function show($pic, $text, $pic_left) {
    $p = "<img src=\"images/$pic\">";
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
    global $maryse, $severine, $clea, $elfa, $hanna, $lina, $loriane, $diane, $diego, $flore, $aurelie, $vladimir, $claire;

    head('musicians.php');
    $i = 0;
    show('maryse.jpg', $maryse, $i++);
    show('daphne.jpg', $daphne, $i++);
    show('susan.jpg', $susan, $i++);
    show('peter.jpg', $peter, $i++);
    show('margaret.jpg', $margaret, $i++);
    show('clea photo bedous.jpg', $clea, $i++);
    show('elfa.jpg', $elfa, $i++);
    show('hanna.jpg', $hanna, $i++);
    show('jesus.jpg', $jesus, $i++);
    show('image1.jpg', $diego, $i++);
    show('aurelie-crop-u3799.jpg', $aurelie, $i++);
    show('vlad.jpg', $vladimir, $i++);
    show('lise.jpg', $lise, $i++);
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
