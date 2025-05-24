<?php

error_reporting(E_ALL);

define('FONT_MED', 'style="font-size:20"');
define('FONT_SMALL', 'style="font-size:18"');

function show_link($title, $page, $this_page) {
    if ($page == $this_page) {
        echo sprintf(
            '<td align=center %s>%s</td>', FONT_MED, $title
        );
    } else {
        echo sprintf(
            '<td align=center %s><a href=%s>%s</a></td>',
            FONT_MED, $page, $title
        );
    }
}

function heading($text, $center) {
    if ($center) echo "<center>";
    echo "<font size=+3>$text</font>";
    if ($center) echo "</center>";
}

function head($this_page) {
    $link1 = 'Accueil';
    $link2 = 'Les Musiciens';
    $link3 = 'Programmes';
    $link4 = 'Anciens Programmes';
    $link5 = 'Lieux';
    $link6 = 'Infos';

    $width = 755;

    echo '
        <html>
        <body style="background-color: black; color: white; font-family: Garamond;" link=white vlink=white>
        <div style="max-width: 755; margin: auto">
        <img src=images/updated_festival_logo.jpg width=755>
        <p>
        <table width=100%>
        <tr>
    ';
    show_link($link1, 'index.php', $this_page);
    show_link($link2, 'musicians.php', $this_page);
    show_link($link3, 'programs.php', $this_page);
    show_link($link4, 'old_programs.php', $this_page);
    show_link($link5, 'place.php', $this_page);
    show_link($link6, 'info.php', $this_page);
    $ht = ($this_page == 'index.php')?'height:800px':'';
    echo "
        </tr>
        </table>
        <div style=\"background-image: url('images/pinkbackground.jpg'); background-repeat: repeat; width:755px; $ht\">
        <p> <p>&nbsp; <p>
    ";
}

function tail() {
    echo '
        </div>
        </div>
        </body>
        </html>
    ';
}

function show_concert($c) {
    echo sprintf('
        <tr>
            <td style="width:220px; font-size:20" valign=top>%s</td>
            <td %s valign=top>
                <b>%s</b>
                <br>
                %s
            </td>
        </tr>
        ',
        $c[0], FONT_MED, $c[1], $c[2]
    );
}

function show_year($year, $concerts) {
    $title = "Programme du Festival $year";
    heading($title, true);
    echo "<table cellpadding=15 width=100%>";
    foreach ($concerts as $concert) {
        show_concert($concert);
    }
    echo "</table>";
}

?>
