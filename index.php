<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WebService</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">WebService</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <!-- webservice:get:start -->
        <form action="./" method="GET">
          <button class="form-control" type="submit"> GET (Read)</button>
        </form>
      <!-- webservice:get:stop -->

      <!-- webservice:post:start -->
        <form action="./" method="POST">
          <input class="form-control" name="value"> 
          <button class="form-control" type="submit"> POST (Create)</button>
        </form>
      <!-- webservice:post:stop -->

      <!-- webservice:put:start -->
        <form action="./" method="PUT">
          <input class="form-control" name="id"> 
          <input class="form-control" name="value"> 
          <button class="form-control" type="submit"> PUT (Update)</button>
        </form>
      <!-- webservice:put:stop -->

      <!-- webservice:delete:start -->
        <form action="./" method="DELETE">
          <input class="form-control" name="id" > 
          <button class="form-control" type="submit"> DELETE (Delete)</button>
        </form>
      <!-- webservice:delete:stop -->

      <!-- response:start -->
      <pre id="return"></pre>
      <!-- response:stop -->

    </main>

    <footer class="footer">
      <div class="container text-center">
        <span class="text-muted"></span>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/webservice.js"></script>
  </body>
</html>