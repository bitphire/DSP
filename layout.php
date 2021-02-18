<html !DOCTYPE>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    DSP Logo Layout Calculator
  </title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="media/js/jquery-3.5.1.min.js"></script>

  <script>
    $(document).ready(function() {
      //alert('Welcome to DSP Logo Layout Calculator! Alpha, expect shit not to work');
    });
  </script>
</head>
  <body>

    <?php
      if (!isset($_GET['signType'])) {
        echo "Redirect to index!";
        return;
      } else {
        $tmp = $_GET['signType'];
        $tmp = explode('_', $tmp);
        $typeOfSign = $tmp[1];
        $signLocation = $tmp[0];
      }

      switch ($typeOfSign) {
        case 'mainline':
          include('mainline.php');
          break;
        case 'ramp':
          echo "Not ready yet. Pay me to develop this and I might get it done faster!";
          break;
        default:
          echo "Well Shit....<br />" . $typeOfSign;
          break;
      }
    ?>
  </body>
</html>
