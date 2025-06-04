<?php

require_once('util.inc');
require_once('text_info');
require_once('google_key');

function main() {
    global $info1, $info2, $google_key;
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
    ';
    echo sprintf(
        '<iframe style="height:100%%;width:100%%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Saint-Savin+65400&key=%s">',
        $google_key
    );
    echo '
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

    heading('Nos partenaires', true);

    echo sprintf('
        <table cellpadding=10>
        <tr>
        <td valign=top align=center %s>
            <img src="images/luz.jpeg" width=200>
            <p>
            Arras en Lavedan
            <br>
            <img src="images/logo.jpg" width=200>
            <p>
            <img src="images/occitanie.jpeg" width=200>
        <td>
        <td valign=top align=center>
            <p style="background-color: white">
            &nbsp;
            <br>
            <img src="images/st_savin.jpg" width=200>
            <br>
            &nbsp;
            </p>
            <img src="images/clipboard.png" width=200>
            <br>
            <img src="images/screen shot 2014-07-01 at 75434 am.jpg" width=200>
            <p style="background-color: white">
            &nbsp;
            <img style="background-color: white" src="images/viscos logo.png" width=180>
            &nbsp;
            <br>&nbsp;
            </p>
        <td>
        <td valign=top align=center>
            <img src="images/pierrefitte.png" width=200>
            <p>
            <img src="images/conseil general.gif" width=200>
            <p>
            <img src="images/hautes_pyrenees.jpeg" width=200>
        <td>
        </table>
        ', FONT_SMALL
    );
    tail();
}

main();

?>
