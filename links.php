<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="assets/css/common.css" rel="stylesheet" />

        <title>Links | St Augustine CHS App</title>
    </head>

    <body>
        <div id="loading">
            <div id="loading-circle"></div>
        </div>
        <div class="row m-0 vh-100">
            <?php include "inc/sidebar.php" ?>
            <div class="col-12 col-lg-10 order-last min-vh-100 d-flex flex-column">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row mt-3">
                            <div class="col-6 link-container">
                                <a href="https://stau.ycdsb.ca/our-school/staff-directory/" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Staff Directory</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 link-contianer">
                                <a href="https://www.ycdsb.ca/" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">YCDSB Website</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 link-container">
                                <a
                                    href="https://stau.ycdsb.ca/our-school/calendar/"
                                    class="link-danger link"
                                >
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Events/Calendar</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 link-container">
                                <a href="https://sites.google.com/ycdsbk12.ca/staulibrary" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Library Website</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 link-container">
                                <a href="https://titantimes.live/" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Titan Times</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 link-container">
                                <a href="" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Guidance Website</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 link-container">
                                <a href="" class="link-danger link">
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">Daily Screening</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 link-container">
                                <a
                                    href="https://app.staugustinechs.ca./index.html"
                                    class="link-danger link"
                                >
                                    <div class="col-12 infobox p-4 my-2">
                                        <h2 class="link-text text-center">STA App Website</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column my-3 infobox">
                        <div class="col-12 link-danger link p-4 my-2">
                            <h2 class="link-text text-center">Socials</h2>
                        </div>
                        <a href="https://twitter.com/STAUpdates" class="coloured-text link">
                            <div class="d-flex flex-row justify-content-evenly align-items-center">
                                <i class="fa fa-twitter link-container" style="font-size: 36px;cursor:pointer;"></i>
                                <h3>Twitter</h3>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/sachsapp/" class="coloured-text link">
                            <div class="d-flex flex-row justify-content-evenly align-items-center">
                                <i class="fa fa-instagram" style="font-size: 36px;cursor:pointer;"></i>
                                <h3>Instagram</h3>
                            </div>
                        </a>
                </div>
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-column fs-3">
                        <div
                            class="
                                col-12
                                infobox
                                p-4
                                d-flex
                                flex-grow-1
                                justify-content-center
                                align-items-center
                                text-center
                                mb-4
                            "
                        >
                            <script src="https://www.biblegateway.com/votd/votd.write.callback.js"></script>
                            <script src="https://www.biblegateway.com/votd/get/?format=json&version=NIV&callback=BG.votdWriteCallback"></script>
                            <!-- alternative for no javascript -->
                            <noscript>
                                <iframe
                                    id="Verse"
                                    framespacing="0"
                                    frameborder="no"
                                    src="https://www.biblegateway.com/votd/get/?format=html&version=NIV"
                                    >View Verse of the Day</iframe
                                >
                            </noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <script src="assets/js/script.js" async defer></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
            async defer
        ></script>
    </body>
</html>
