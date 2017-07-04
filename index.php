<?php
    $var = array(
        "1" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/aOFuAuXnh0ADe/giphy.gif"
            ),  
        "2" => array(
            "titulo" => "mLabs",
            "image" => "https://media4.giphy.com/media/l46C8niNgpzovmhpK/giphy.gif"
            ),
        "3" => array(
            "titulo" => "mLabs",
            "image" => "https://media1.giphy.com/media/xT4uQulxzV39haRFjG/giphy.gif"
            ),
        "4" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/v61IRvPfyIyhW/giphy.gif"
            ),
        "5" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/8KnfG3knLExpu/giphy.gif"
            ),
        "6" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/JQSoqxnTAMWgo/giphy.gif"
            ),
        "7" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/3o6MbqsFEXCQiMnhYI/giphy.gif"
            ),
        "8" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/l0HlyLQsbvhciAuKA/giphy.gif"
            ),
        "9" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/nilmBu205MrCg/giphy.gif"
            ),
        "10" => array(
            "titulo" => "mLabs",
            "image" => "https://media.giphy.com/media/11nRJpT23a2n1S/giphy.gif"
            ),
    );

    $section = array_rand($var);

    header('Content-type:image/png');
    readfile($var[$section]['image']);
?>
