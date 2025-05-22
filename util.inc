<?php

error_reporting(E_ALL);

function show_link($title, $page, $this) {
    if ($page == $this) {
        echo sprintf('<td align=center style="font-size:18px">%s</td>', $title);
    } else {
        echo sprintf(
            '<td align=center style="font-size:18px"><a href=%s>%s</a></td>',
            $page, $title
        );
    }
}

function heading($text) {
    echo "<font size=+3>$text</font>";
}

function head($this) {
    $link1 = 'Accueil';
    $link2 = 'Les Musiciens';
    $link3 = 'Programmes';
    $link4 = 'Anciens Programmes';
    $link5 = 'Lieux';
    $link6 = 'Infos';

    $width = 755;

    echo '
        <html>
        <body style="background-color: black; color: khaki; font-family: Garamond;" link=khaki vlink=khaki>
        <div style="max-width: 755; margin: auto">
        <img src=images/updated_festival_logo.jpg width=755>
        <p>
        <table width=100%>
        <tr>
    ';
    show_link($link1, 'home.php', $this);
    show_link($link2, 'musicians.php', $this);
    show_link($link3, 'programs.php', $this);
    show_link($link4, 'old_programs.php', $this);
    show_link($link5, 'place.php', $this);
    show_link($link6, 'info.php', $this);
    $ht = ($this == 'home.php')?'height:800px':'';
    echo "
        </tr>
        </table>
        <div style=\"background-image: url('images/newpinkbackground.jpg'); background-repeat: repeat; width:755px; $ht\">
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

?>
