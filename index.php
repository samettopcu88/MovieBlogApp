<?php

    $kategori = array("Macera", "Dram", "Komedi", "Korku");

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => true,
            "url" => "paper-lives"
        ),

        "2" => array(
            "baslik" => "The Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur",
            "resim" => "2.jpeg",
            "yorumSayisi" => "45",
            "begeniSayisi" => "Beğeni: 0",
            "vizyon" => false,
            "url" => "the-walking-dead"
        )

        );

        const limit = 100;

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
                    <li class="list-group-item"><?php echo $kategori[0]?></li>
                    <li class="list-group-item"><?php echo $kategori[1]?></li>
                    <li class="list-group-item"><?php echo $kategori[2]?></li>
                    <li class="list-group-item"><?php echo $kategori[3]?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">"
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href= \"{$filmler["1"]["url"]}\"> {$filmler["1"]["baslik"]} </a>" ?> </h5>
                                <p class="card-text">
                                <?php
                                if (strlen($filmler["1"]["aciklama"]) > limit){
                                    echo substr($filmler["1"]["aciklama"], 0, limit)."...";
                                }else{
                                    echo $filmler["1"]["aciklama"];
                                }
                                ?>
                                </p>
                            </div>
                            <div>
                                <div class="badge bg-success">Yapım Tarihi: 03.12.2021</div>
                                <?php
                                    if ($filmler["1"]["yorumSayisi"] > 0) {
                                        echo "<span class=\"badge bg-success\"> {$filmler["1"]["yorumSayisi"]} Yorum </span>";
                                    }
                                    else{
                                        echo "<span class=\"badge bg-success\"> Yorum Yok </span>";
                                    }

                                ?>
                                <span class="badge bg-success"><?php echo $filmler["1"]["begeniSayisi"] ?></span>
                                <span class="badge bg-success">
                                    <?php  
                                    if ($filmler["1"]["vizyon"]){
                                        echo "Vizyonda";
                                    }
                                    else{
                                        echo "Vizyonda Değil";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">"
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href= \"{$filmler["2"]["url"]}\"> {$filmler["2"]["baslik"]} </a>" ?> </h5>
                                <p class="card-text">
                                <?php
                                if (strlen($filmler["2"]["aciklama"]) > limit){
                                    echo substr($filmler["2"]["aciklama"], 0, limit)."...";
                                }else{
                                    echo $filmler["2"]["aciklama"];
                                }
                                ?>
                                </p>
                            </div>
                            <div>
                                <span class="badge bg-success">Yapım Tarihi: 31.10.2010</span>
                                <?php
                                    if ($filmler["2"]["yorumSayisi"] > 0) {
                                        echo "<span class=\"badge bg-success\"> {$filmler["2"]["yorumSayisi"]} Yorum </span>";
                                    }
                                    else{
                                        echo "<span class=\"badge bg-success\"> Yorum Yok </span>";
                                    }

                                ?>
                                <span class="badge bg-success"><?php echo $filmler["2"]["begeniSayisi"] ?></span>
                                <span class="badge bg-success">
                                    <?php  
                                    if ($filmler["2"]["vizyon"]){
                                        echo "Vizyonda";
                                    }
                                    else{
                                        echo "Vizyonda Değil";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>