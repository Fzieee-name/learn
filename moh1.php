    <html>
    <head>
        <title>
            coba
        </title>
        <style>
            p {color: red; font-weight: 400; font-size: 60pt;}
            .blok1 {background-color: cyan; height: 20px; width: 20px; display: block;}
            .blok2 {background-color: chocolate; height: 20px; width: 20px; display: block;}
            .yolo {font-size: 15pt;}
            #kuning {color: yellow;}
            #hijau {color: green;}
        </style>
    </head>
<?php 
    $random=mt_rand(1,10);
?>
<p class='yolo'>angka random: <?php echo $random;?><p>
    <body>
        <p>
            <b>merah</b>
            <b id="kuning">kuning</b>
            <b id="hijau">Hijau</b>
            pembalap
        <div class="blok2">&nbsp;</div>
        <hr>
        <div class="blok1">&nbsp;</div>
    </body>
</html>