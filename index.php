<?php

    $kategori1= "Macera";
    $kategori2= "Dram";
    $kategori3= "Komedi";
    $kategori4= "Korku";

    $filmBaslik1 = "Paper Lives";
    $filmOzet1 = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir";
    $filmResim1 = "1.jpeg";
    $filmYorumSayisi1 = "Yorum: 55";
    $filmBegeniSayisi1 = "Beğeni: 85";
    $filmVizyon1 = "Vizyonda: Evet";

    $filmBaslik2 = "The Walking Dead";
    $filmOzet2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $filmResim2 = "2.jpeg";
    $filmYorumSayisi2 = "Yorum: 45";
    $filmBegeniSayisi2 = "Beğeni: 95";
    $filmVizyon2 = "Vizyonda: Evet";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1?></li>
                    <li class="list-group-item"><?php echo $kategori2?></li>
                    <li class="list-group-item"><?php echo $kategori3?></li>
                    <li class="list-group-item"><?php echo $kategori4?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmResim1}\">"
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmBaslik1 ?> </h5>
                                <p class="card-text"><?php echo $filmOzet1 ?></p>
                            </div>
                            <span>
                                <div class="badge bg-success">Yapım Tarihi: 03.12.2021</div>
                                <div class="badge bg-success"><?php echo $filmYorumSayisi1 ?></div>
                                <div class="badge bg-success"><?php echo $filmBegeniSayisi1 ?></div>
                                <div class="badge bg-success"><?php echo $filmVizyon1 ?></div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmResim2}\">"
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmBaslik2 ?> </h5>
                                <p class="card-text"><?php echo $filmOzet2 ?></p>
                            </div>
                            <span>
                                <div class="badge bg-success">Yapım Tarihi: 31.10.2010</div>
                                <div class="badge bg-success"><?php echo $filmYorumSayisi2 ?></div>
                                <div class="badge bg-success"><?php echo $filmBegeniSayisi2 ?></div>
                                <div class="badge bg-success"><?php echo $filmVizyon2 ?>t</div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>