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
    <div class="w3-indigo">
      <div class="w3-container w3-indigo w3-center">
        <h1 id="title_text" class="w3-text-yellow">DSP Logo Layout Calculator</h1>
      </div>

      <div class="w3-container w3-blue w3-center">
        <form method="get" action="layout.php" class="w3-section">
          <button class="w3-button w3-yellow w3-round-large" name="signType" value="urban_mainline">Urban Mainline</button>
          <button class="w3-button w3-yellow w3-round-large" name="signType" value="urban_ramp">Urban Ramp</button>
          <button class="w3-button w3-yellow w3-round-large" name="signType" value="rural_mainline">Rural Mainline</button>
          <button class="w3-button w3-yellow w3-round-large" name="signType" value="rural_ramp">Rural Ramp</button>
        </form>
      </div>
    </div>
  </body>
</html>
