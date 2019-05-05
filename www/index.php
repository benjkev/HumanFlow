<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://d3js.org/d3.v5.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Flow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
    include ("nav.html"); // navigation bar
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <!-- <input class="btn btn-outline-info search_button" type="submit" value="Custom Search">
                <input class="btn btn-outline-primary get_all_button" type="submit" value="Get First 100 Entries"> -->
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div id="page-container" class="col-md-auto">
                <?php
                    include ("maps.html"); // navigation bar
                ?>
            </div>
        </div>
    </div>
    <?php
    ?>
</body>
</html>