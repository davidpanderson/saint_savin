<?php

require_once('util.inc');
require_once('text_home');

function main() {
    global $home1, $home2, $home3;
    head('index.php');
    echo "
        <center>
    ";
    heading($home1);
    echo "
        <p>
        </center>
        <table cellpadding=10>
            <tr>
                <td valign=top>
                    <img src=images/frontpage.jpg width=400>
                </td>
                <td valign=top>
                    <font size=+1>
                        $home2
                        <p>
                        <a href=info.php>$home3</a>
                        <p>
                        <a href=https://www.facebook.com/MusiqueAncienneSaintSavin><img src=images/facebook.jpg width=80></a>
                    </font>
                </td>
            </tr>
        </table>
    ";
    tail();
}

main();

?>
