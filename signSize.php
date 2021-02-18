<div class="w3-indigo">
  <div class="w3-container w3-indigo w3-center">
    <h1 id="title_text" class="w3-text-yellow">DSP Logo Layout Calculator</h1>
  </div>

  <form method="get" action="calculate.php">
    <input type="hidden" name="signType" value="<?php echo $typeOfSign; ?>">
    <input type="hidden" name="loc" value="<?php echo $signLocation; ?>">
    <input type="hidden" name="layout" value="<?php echo $logoLayout; ?>">

    <?php
      if ($signLocation == 'urban') {
        if ($typeOfSign == 'mainline') {
    ?>
          <div class="w3-container w3-blue w3-center" name="urban_ml_sizes">
            <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>Urban Mainline Dimensions</b></h2>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="132x72">11 x 6</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="180x72">15 x 6</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="132x120">11 x 10</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="180x120">15 x 10</button>
          </div>
    <?php
        } elseif ($typeOfSign == 'ramp') {
    ?>

          <div class="w3-container w3-blue w3-center" name="urban_rmp_sizes">
            <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>Urban Ramp Dimensions</b></h2>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="512x512">512 x 512</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="256x256">256 x 256</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="128x128">128 x 128</button>
            <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="64x64">64 x 64</button>
          </div>
    <?php
        } else { echo "Damn it"; }
      } elseif ($signLocation == 'rural') {
        if ($typeOfSign == 'mainline') {
    ?>
          <div class="w3-container w3-blue w3-center" name="rural_ml_sizes">
            <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>Rural Mainline Dimensions</b></h2>

          </div>
    <?php
        } elseif ($typeOfSign == 'ramp') {
    ?>
    <div class="w3-container w3-blue w3-center" name="rural_rmp_sizes">
      <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>Rural Ramp Dimensions</b></h2>
      <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="512x512">512 x 512</button>
      <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="256x256">256 x 256</button>
      <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="128x128">128 x 128</button>
      <button class="w3-button w3-yellow w3-round-large" name="dimensions" value="64x64">64 x 64</button>
    </div>
    <?php
      } else { echo "Damn 2."; }
    } else { echo "Damn 3."; }
    ?>
  </form>
</div>
