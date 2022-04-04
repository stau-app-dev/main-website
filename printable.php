<?php
    include "./inc/announcements.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "inc/analytics.php" ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Printable Announcements | St Augustine CHS App</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center text-center">
        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
            <img src="assets/img/stalogo.png" alt="logo" width="64" height="64" />
            <h6 class="display-6 ms-4">St. Augustine CHS</h6>
        </div>
        <div>
            <p id="date" class="lead"></p>
        </div>
        <div class="text-center mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Team/Club</th>
                        <th scope="col">Announcement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $announcements_array = getAnnounceArray();
                        foreach ($announcements_array as $announcement) {
                            $announcement_parts = explode(" - ", $announcement, 2); ?>
                    <tr>
                        <td><?php echo $announcement_parts[0] ?>
                        </td>
                        <td><?php echo $announcement_parts[1] ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        async defer></script>
    <script>
        var today = new Date();
        var dateString = today.toDateString();
        var dateElement = document.getElementById('date');
        dateElement.innerText = dateString;
    </script>
</body>

</html>