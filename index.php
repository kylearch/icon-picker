<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Icon Picker Example</title>

  <!-- CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" id="font-awesome" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="./iconpicker.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <!-- Javascript -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./jquery.iconpicker.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $(".icon-picker").iconpicker({
            fa: "#font-awesome",
            //sizeSelector: false,
            buttonSize: "lg",
            //columns: 2,
            filter: false,
            //clickCallback: function(icon) { console.log(icon); }
        });
    });
  </script>

</head>
	<body>
		<div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="jumbotron">
            <h1>Icon Picker</h1>
          </div>

          <div class="col-xs-3">
            <div class="input-group icon-picker">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i></button>
              </span>
              <input type="text" name="icon" class="form-control">
            </div>
          </div>

          <div class="col-xs-3">
            <div class="input-group icon-picker">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i></button>
              </span>
              <input type="text" name="icon" class="form-control">
            </div>
          </div>

        </div>
      </div>
    </div>

	</body>
</html>