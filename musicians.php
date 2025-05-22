<?php

require_once('util.inc');
require_once('text_musicians');

function show($pic, $text, $pic_left) {
    $p = "<img src=\"images/$pic\">";
    if ($pic_left) {
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
    show('maryse.jpg', $maryse, true);
    show('severine.jpg', $severine, false);
    show('clea photo bedous.jpg', $clea, true);
    show('elfa.jpg', $elfa, false);
    show('hanna.jpg', $hanna, true);
    show('lina.jpg', $lina, false);
    show('loriane.jpg', $loriane, true);
    show('diane mond.jpg', $diane, false);
    show('image1.jpg', $diego, true);
    show('flore seube.jpg', $flore, false);
    show('aurelie-crop-u3799.jpg', $aurelie, true);
    show('vlad.jpg', $vladimir, false);
    show('claire2.jpg', $claire, true);
    tail();
}

main();

?>
