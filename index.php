<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Cvičenie 2</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="icon" href="icons/upload-icon.png">
</head>
<body>
    <header>
        <span class="welcome-header">Štatistické centrum pre šport</span>
    </header>

    <div class="container border">
        <main>
            <div class="row">
                <div class="input-button top">
                    <button onclick="top10()" type="button" id="top10" class="btn btn-primary">Top 10</button>
                    <button onclick="slovaks()" type="button" id="slovaks" class="btn btn-success">Slovenskí olympijskí víťazi</button>
                </div>

                <div id="table-div" class="col table" >
                    <?php
                        include "table_default.php";
                    ?>
                </div>
            </div>
        </main>
    </div>

    <footer class="footer">
        ©PeterRigoDevelopment
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/javascript.js"></script>
</body>
</html>