<?php

require_once('util.inc');
require_once('text_info');

function main() {
    global $info1, $info2;
    head('info.php');
    echo "
        <table cellpadding=10>
        <tr>
        <td valign=top>
        <h2>$info1</h2>
    ";
    // see https://www.embed-map.com/; I removed an ad
    echo '
    <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:400px;">
    <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Saint-Savin+65400&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
    </iframe>
    </div>
    <style>#embedded-map-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
    </div>
    ';
    echo "
        </td>
        <td valign=top>
        $info2
        </td>
        </tr>
        </table>
    ";

    echo '
        <table cellpadding=10>
        <tr>
        <td valign=top align=center>
            <img src="images/au clavier bien tempere-crop-u4241.jpg">
            <p>
            <img src="images/logo.jpg">
        <td>
        <td valign=top align=center>
            <img src="images/clipboard.png">
            <br>
            <img src="images/screen shot 2014-07-01 at 75434 am.jpg">
            <p style="background-color: white">
            &nbsp;
            <img style="images/background-color: white" src="viscos logo.png">
            &nbsp;
            <br>&nbsp;
            </p>
        <td>
        <td valign=top align=center>
            <img src="images/pierrefitte.jpg">
            <p>
            <img src="images/conseil general.gif">
            <p>
            <img src="images/freqluz.jpg">
        <td>
        </table>
    ';
    tail();
}

main();

?>
