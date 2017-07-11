<?php
    // directorio das imagens
    $dir = "images/";
    $num_ficheiros = 0;
    $dh  = opendir($dir); //abrir o directorio

    while (false !== ($filename = readdir($dh))) {
        $files[] = $filename;
        $num_ficheiros++;
    }

    //ordenar os ficheiros de forma crescente
    sort($files);

    //indice do array
    $inicio = "2";
    $num_ficheiros -- ;

    //aleatoriedade das imagens
    $random = mt_rand($inicio,$num_ficheiros);

    //nome do ficheiro
    $image_name = $files[$random];
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
<meta property="og:url" content="http://redes.agenciamanga.uni5.net/<?= $dir.$image_name ?>">
<meta property="og:site_name" content="">
<meta property="og:description" content="">
<meta property="og:image" content="<?php echo "http://redes.agenciamanga.uni5.net".$dir.$image_name ?>">
<meta property="og:type" content="video.other">

<!-- Exibir imagem -->
<img src="<?= $dir.$image_name ?>" alt="$image_name">

<?php sleep(5); ?>
<script>
    location.href = "https://www.agenciamanga.com/";
</script>