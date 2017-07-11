<?php

    $var = array(
        "1" => array(
            "image" => "/images/3o6MbqsFEXCQiMnhYI.gif"
            ),
        "2" => array(
            "image" => "/images/8KnfG3knLExpu.gif"
            ),
        "3" => array(
            "image" => "/images/aOFuAuXnh0ADe.gif"
            ),
        "4" => array(
            "image" => "/images/dogsurf.gif"
            ),
        "5" => array(
            "image" => "/images/JQSoqxnTAMWgo.gif"
            ),
        "6" => array(
            "image" => "/images/l0HlyLQsbvhciAuKA.gif"
            ),
        "7" => array(
            "image" => "/images/l46C8niNgpzovmhpK.gif"
            ),
        "8" => array(
            "image" => "/images/pizza.gif"
            ),
        "9" => array(
            "image" => "/images/surfist.gif"
            ),
        "10" => array(
            "image" => "/images/v61IRvPfyIyhW.gif"
            ),
        "11" => array(
            "image" => "/images/xT4uQulxzV39haRFjG.gif"
            ),
        );

    $section = array_rand($var);

    /*header('Content-type:image/png');
    readfile($var[$section]['image']);*/
?>

<script type="text/javascript" src="jquery.min.js"></script>

<script>
    $(function () {
        $.post('https://graph.facebook.com',{
                id: 'http://redes.agenciamanga.uni5.net/',
                scrape: true,
                access_token: '307883176323786|u-jMXK1hSpvrINxWu9J64jpfdMs'
            },
            function (response) {
                console.log(response);
            }
        );
    });
</script>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="fb:app_id" content="307883176323786">
<meta property="og:title" content="Manga">
<meta property="og:url" content="http://redes.agenciamanga.uni5.net/<?= $var[$section]['image'] ?>">
<meta property="og:site_name" content="">
<meta property="og:description" content="">
<meta property="og:image" content="<?php echo "http://redes.agenciamanga.uni5.net".$var[$section]['image'] ?>">
<meta property="og:type" content="video.other">

<img src="<?= $var[$section]['image'] ?>" alt="">
