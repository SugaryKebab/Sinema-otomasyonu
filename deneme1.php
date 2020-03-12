<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/panel.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Accordion Using List Group -->
    <div class="col-md-6 col-md-offset-3">
        <div id="accordion">
            <div class="panel list-group">
                <!-- panel class must be in -->
                <a href="#web_dev" data-parent="#accordion" data-toggle="collapse" class="list-group-item">
                    <h4>Web Development</h4>
                </a>
                <div class="collapse" id="web_dev">
                    <ul class="list-group-item-text">
                        <li>Javascript</li>
                        <li>PHP</li>
                        <li>Wordpress</li>
                        <li>MYSQL</li>
                    </ul>
                </div>

                <a href="#desktop" data-parent="#accordion" data-toggle="collapse" class="list-group-item" `>
                    <h4>Desktop App.</h4>
                </a>
                <div class="collapse" id="desktop">
                    <ul class="list-group-item-text">
                        <li>C#</li>
                        <li>Java</li>
                        <li>Python</li>
                    </ul>
                </div>


                <a href="#mobile" data-parent="#accordion" data-toggle="collapse" class="list-group-item">
                    <h4>Mobile App.</h4>
                </a>
                <div class="collapse" id="mobile">
                    <ul class="list-group-item-text">
                        <li>Android</li>
                        <li>IOS</li>
                        <li>Windows</li>
                        <li>Linux</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            padding-top: 30px
        }


        .list-group-item {
            padding: 5px 10px
        }
    </style>

</html>