<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="180";>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KrankenNet Insert</title>

    <!-- Bootstrap core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-bare/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 54px;
        }
        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>

</head>

<body>

  <script type="text/javascript">
    
    function trigger_theft() {
      
      cB = document.getElementById("theft_url");

      if (cB.style.display == "none") {
        cB.style.display = "";
      }else{
        cB.style.display = "none";
      }

    }

  </script>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/krake.ico" height="20%" width ="20%"> KrakenNet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Search  <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <span class="glyphicon glyphicon-plus-sign"></span> Add Net</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>

  <form class="form-horizontal" action="handler/insertH.php" method="GET">
    <fieldset>

    <!-- Form Name -->
    <legend>Form Name</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="network_name">Netzwerk</label>  
      <div class="col-md-4">
        <input id="textinput" name="network_name" placeholder="Name des Netzwerks" class="form-control input-md" required="" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="network_url">Link</label>  
      <div class="col-md-4">
        <input id="Link" name="network_url" placeholder="Link" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">Daten</label>
      <div class="col-md-4">

        <input name="data_photos" id="data_photos" type="checkbox">
        <label class="checkbox-inline" for="data_photos">Fotos</label>

        <input name="data_names" id="data_names" type="checkbox">
        <label class="checkbox-inline" for="data_names">Namen</label>

        <input name="data_contacts" id="data_contacts" type="checkbox">
        <label class="checkbox-inline" for="data_contacts">Kontakte</label>

      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">Android</label>
      <div class="col-md-4">
        
        <input name="android_gps" id="android_gps" type="checkbox"> 
        <label class="checkbox-inline" for="android_gps">GPS</label>

        <input name="android_photos" id="android_photos" type="checkbox">
        <label class="checkbox-inline" for="android_photos">Fotos</label>
        
        <input name="android_camera" id="android_camera" type="checkbox">
        <label class="checkbox-inline" for="android_camera">Kamara</label>
        
        <label class="checkbox-inline" for="android_contacts">
        <input name="android_contacts" id="android_contacts" type="checkbox">Kontakte</label>

      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">IOS</label>
      <div class="col-md-4">

        <input name="ios_gps" id="ios_gps" type="checkbox"> 
        <label class="checkbox-inline" for="ios_gps">GPS</label>

        <input name="ios_photos" id="ios_photos" type="checkbox">
        <label class="checkbox-inline" for="ios_photos">Fotos</label>
        
        <input name="ios_camera" id="ios_camera" type="checkbox">
        <label class="checkbox-inline" for="ios_camera">Kamara</label>
        
        <label class="checkbox-inline" for="ios_contacts">
        <input name="ios_contacts" id="ios_contacts" type="checkbox">Kontakte</label>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Beziehungen</label>  
      <div class="col-md-4">
        <input id="textinput" name="relations" placeholder="Bsp.: Facebook, Instagram" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="imprint_url">Impressum link:</label>  
      <div class="col-md-4">
        <input id="textinput" name="imprint_url" placeholder="https://" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="tos_url">AGB link:</label>  
      <div class="col-md-4">
        <input id="textinput" name="tos_url" placeholder="https://" class="form-control input-md" type="text">
        <span class="help-block">help</span>  
      </div>
    </div>

     <div class="form-group">
      <div class="col-md-4">
        
        <label class="checkbox-inline" for="data_theft">
        <input name="data_theft" id="data_theft" type="checkbox" onchange="trigger_theft();"> Datendiebstahl?</label>
        
        <input style="display: none;" id="theft_url" name="theft_url" placeholder="https://" class="form-control input-md" type="text">
        <span class="help-block">help</span> 

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">SAVE</button>
      </div>
    </div>

    </fieldset>
  </form>

  <script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/jquery/jquery.min.js"></script>
  <script src="https://blackrockdigital.github.io/startbootstrap-bare/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>