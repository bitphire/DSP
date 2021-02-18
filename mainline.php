<div class="w3-indigo">
  <div class="w3-container w3-indigo w3-center">
    <h1 id="title_text" class="w3-text-yellow">DSP Logo Layout Calculator</h1>
  </div>

  <div class="w3-container w3-blue w3-center">
    <form method="get" action="size.php">
      <input type="hidden" name="signType" value="<?php echo $typeOfSign; ?>">
      <input type="hidden" name="loc" value="<?php echo $signLocation; ?>">
      <div class="w3-bar w3-indigo">
        <button type="button" class="w3-bar-item w3-button w3-hover-yellow" onclick="openLayout('2logos')">2 Logos</button>
        <button type="button" class="w3-bar-item w3-button w3-hover-yellow" onclick="openLayout('3logos')">3 Logos</button>
        <button type="button" class="w3-bar-item w3-button w3-hover-yellow" onclick="openLayout('4logos')">4 Logos</button>
        <button type="button" class="w3-bar-item w3-button w3-hover-yellow" onclick="openLayout('6logos')">6 Logos</button>
      </div>

      <div id="2logos" class="layouts">
        <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>2 Logos</b></h2>
        <div class="w3-container">
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="202">
              <label>All One Category</label>
            </div>
            <img src="media/images/All2Logos.png" alt="All One Category" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="112">
              <label>2 Categories w/ 1/1 Layout</label>
            </div>
            <img src="media/images/112Logos.png" alt="2 Categories With 2/1 Layout" style="width:25%">
          </div>
        </div>
      </div>

      <div id="3logos" class="layouts" style="display:none">
        <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>3 Logos</b></h2>
        <div class="w3-container">
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="303">
              <label>All One Category</label>
            </div>
            <img src="media/images/All3Logos.png" alt="All One Category" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="213">
              <label>2 Categories w/ 2/1 Layout</label>
            </div>
            <img src="media/images/213Logos.png" alt="2 Categories With 2/1 Layout" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="123">
              <label>2 Categories w/ 1/2 Layout</label>
            </div>
            <img src="media/images/123Logos.png" alt="2 Categories With 1/2 Layout" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="1113">
              <label>3 Categories w/ 1/1/1 Layout</label>
            </div>
            <img src="media/images/213Logos.png" alt="3 Categories With 1/1/1 Layout" style="width:25%">
          </div>
        </div>
      </div>

      <div id="4logos" class="layouts" style="display:none">
        <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>4 Logos</b></h2>
        <div class="w3-container">
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="404">
              <label>All One Category</label>
            </div>
            <img src="media/images/All4Logos.png" alt="All One Category" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="224">
              <label>2 Categories w/ 2/2 Layout</label>
            </div>
            <img src="media/images/224Logos.png" alt="2 Categories With 2/2 Layout" style="width:25%">
          </div>
        </div>
      </div>

      <div id="6logos" class="layouts" style="display:none">
        <h2 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>6 Logos</b></h2>
        <div class="w3-container">
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="606">
              <label>All One Category</label>
            </div>
            <img src="media/images/All6Logos.png" alt="All One Category" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="426">
              <label>2 Categories w/ 4/2 Layout</label>
            </div>
            <img src="media/images/426Logos.png" alt="2 Categories With 4/2 Layout" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="246">
              <label>2 Categories w/ 2/4 Layout</label>
            </div>
            <img src="media/images/246Logos.png" alt="2 Categories With 2/4 Layout" style="width:25%">
          </div>
          <div class="w3-card-4 w3-indigo w3-section">
            <div>
              <input class="w3-radio" type="radio" name="layout" value="2226">
              <label>3 Categories w/ 2/2/2 Layout</label>
            </div>
            <img src="media/images/2226Logos.png" alt="3 Categories With 2/2/2 Layout" style="width:25%">
          </div>
        </div>
      </div>
      <button class="w3-button w3-yellow w3-round-large" name="na" value="na">Next</button>
    </form>
  </div>
</div>

<script>
  function openLayout(layout) {
    var i;
    var x = document.getElementsByClassName("layouts");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(layout).style.display = "block";
  }
</script>
