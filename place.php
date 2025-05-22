<?php

require_once('util.inc');
require_once('text_place');

function main() {
    global $p1, $p2, $p3, $p4, $p5;
    head('place.php');
    echo sprintf('
        <table width=100%% cellpadding=12>
            <tr>
                <td %s valign=top><font size=+3>Saint-Savin</font><p> %s</td>
                <td valign=top><img height=240 src=images/saintsavinmisty.jpg></td>
            </tr>
            <tr>
                <td valign=top %s>%s<p><img height=200 src=images/closeup.jpg></td>
                <td valign=top %s>%s<p><img height=200 src="images/concert a l-eglise de pierrefitte- nestalas.jpg"></td>
            </tr>
            <tr>
                <td valign=top %s><img height=200 src=images/arras.jpg><p>%s</td>
                <td valign=top %s><img height=200 src="images/arcizans avant.jpg"><p>%s</td>
            </tr>
        </table>
        ', FONT_MED, $p1, FONT_SMALL, $p2, FONT_SMALL, $p3, FONT_SMALL, $p4, FONT_SMALL, $p5
    );
    tail();
}

main();

?>
