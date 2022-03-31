<?php
    include "./inc/announcements.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="assets/css/common.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />

    <title>Home | St Augustine CHS App</title>
</head>

<body>
    <div id="loading">
        <div id="loading-circle"></div>
    </div>
    <div class="row m-0 vh-100">
        <?php include "inc/sidebar.php" ?>
        <div class="col-12 col-lg-4 order-last order-lg-2 d-flex flex-column">
            <!-- Weather/Tweets -->
            <div class="col-12 order-last order-lg-first infobox p-4 mt-2 mb-lg-2">
                <!-- Weather -->
                <a class="weatherwidget-io" href="https://forecast7.com/en/43d86n79d34/markham/" data-label_1="MARKHAM"
                    data-label_2="WEATHER" data-theme="pure">MARKHAM WEATHER</a>
            </div>
            <div class="col-12 order-first order-lg-last infobox p-4 my-2">
                <!-- Tweets -->
                <a class="twitter-timeline" data-height="500"
                    href="https://twitter.com/STAUpdates?ref_src=twsrc%5Etfw">Tweets by STAUpdates</a>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-2 order-lg-last d-flex flex-column">
            <!-- Video/Announcements -->
            <div class="
                        col-12
                        order-last order-lg-first
                        text-center
                        align-items-center
                        infobox
                        p-4
                        my-2
                    ">
                <!-- Video -->
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/videoseries?list=PLG1HPxuAsDSkrBRkUSkOZqZzNv98hgCFV"
                        frameborder="0"></iframe>
                </div>
            </div>
            <div class="col-12 order-first order-lg-last infobox p-4 mb-2 mt-lg-2">
                <!-- Announcements -->
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <img src="./assets/img/icon.png" class="d-block" width="100" alt="Announcements" />
                    <div class="carousel-indicators">
                        <?php
                                $announcements_array = getAnnounceArray();
                            ?>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active w-100"
                            aria-current="true" aria-label="Slide 1"></button>
                        <?php
                                for ($i = 1; $i < count($announcements_array); ++$i) {
                                    ?>
                        <button type="button" data-bs-target="#carousel"
                            data-bs-slide-to="<?php echo $i ?>"
                            class="w-100" aria-current="true"
                            aria-label="Slide <?php echo $i+1 ?>"></button>
                        <?php
                                }
                            ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                                $first = array_shift($announcements_array);
                            ?>
                        <div class="carousel-item active px-5 d-block">
                            <h3 class="text-red fs-3 announcement-text">
                                <?php echo $first ?>
                            </h3>
                        </div>
                        <?php
                                foreach ($announcements_array as $announcement) {
                                    ?>
                        <div class="carousel-item px-5 d-block">
                            <h3 class="text-red fs-3 announcement-text">
                                <?php echo $announcement ?>
                            </h3>
                        </div>
                        <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        async defer></script>
    <script src="https://platform.twitter.com/widgets.js" charset="utf-8" async defer></script>
    <script>
        !(function(d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        })(document, 'script', 'weatherwidget-io-js');
    </script>
</body>

</html>