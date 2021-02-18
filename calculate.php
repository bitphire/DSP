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
      if (!isset($_GET['signType']) && !isset($_GET['loc']) && !isset($_GET['layout']) && !isset($_GET['dimensions'])) {
        echo "Redirect to index!";
        return;
      } else {
        $typeOfSign = $_GET['signType'];
        $signLocation = $_GET['loc'];
        $logoLayout = $_GET['layout'];
        $dimensions = $_GET['dimensions'];
      }
    ?>

    <p>
      <?php echo $typeOfSign; ?>
    </p>
    <p>
      <?php echo $signLocation; ?>
    </p>
    <p>
      <?php echo $logoLayout; ?>
    </p>
    <p>
      <?php echo $dimensions; ?>
    </p>
  </body>
</html>
