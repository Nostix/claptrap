<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Claptrap</title>
        <meta name="description" content="Trapfestival">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

    <!--####### Navbar #######-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Claptrap</a>
          <a class="navbar-brand" href="about.html">About</a>
          <a class="navbar-brand" href="anfahrt.html">Anfahrt</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="orders.php" method="post">
            <div class="form-group">
              <input type="number" name="kdnr" placeholder="Kundennummer" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Passwort" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">

    <div class="panel panel-primary panel-transparent">
      <div class="panel-heading">
        <h3 class="panel-title">Tickets bestellen</h3>
      </div>
      <div class="panel-body">
        <form action="orders.php" method="post">
          <div class="form-group loginform">
          <br>
          <div class="formfirst">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
                <label for="lastname">Nachname</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nachname"><br>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email-Adresse"><br>
                <label for="adress">Strasse</label>
                <input type="text" class="form-control" name="adress" id="adress" placeholder="Strasse"><br>
                <label for="adressnumber">Hausnummer</label>
                <input type="number" class="form-control" name="adressnumber" id="adressnumber" placeholder="Hausnummer"><br>
                <label for="zipcode">Postleitzahl</label>
                <input type="number" class="form-control" name="zipcode" id="zipcode" placeholder="Postleitzahl"><br>
                <label for="city">Stadt</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Stadt"><br>
          </div>
          <div class="formsecond">
                <label for="ticket">Ticketart</label>
                <select name="ticket" class="form-control" id="ticket" oninput="calculate()"><option>Normales Ticket</option><option>VIP Ticket</option><option>Backstage Ticket</option></select><br>
                <label for="amount">Ticketanzahl</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="Ticketanzahl"oninput="calculate()"><br>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
                <label id="price">Ticketpreis: 0€</label><br>
                <button type="submit" class="btn btn-success">Tickets Bestellen</button>
          </div>
          </div>
        </form>
      </div>
    </div>
      
      <a id="back-to-top" href="#" class="btn btn-default btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

      <hr>

      <footer>
        <p>&copy; Nostix Code 2k17</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
