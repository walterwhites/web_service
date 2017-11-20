<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>Hello, world!</h1>


<main class="container">

    <div class="form-group" >
        <form action="./" method="GET">
            <button class="form-control btn-success" type="submit">GET (Read)</button>
        </form>
    </div>


    <div class="form-group" >
        <form action="./" method="POST">
            <input class="form-control" name="value">
            <button class="form-control btn-primary" type="submit">CREATE</button>
        </form>
    </div>

    <div class="form-group">
        <form action="./" method="PUT">
            <input class="form-control" name="id">
            <input class="form-control" name="value">
            <button class="form-control btn-info" type="submit">Put</button>
        </form>
    </div>


    <div class="form-group">
        <form action="./" method="DELETE">
            <input class="form-control" name="id">
            <button class="form-control btn-danger" type="submit">DELETE</button>
        </form>
    </div>

    <pre id="return"></pre>
</main>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/webservice.js"></script>
</body>
</html>