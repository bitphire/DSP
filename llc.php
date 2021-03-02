<?php include('header.html'); ?>

<script>
    function legends(layout) {
        let idCounter = 1;
        let legendSelect = '<select id="' + idCounter + '-' + layout.id + '"><option value="food">FOOD</option><option value="gas">GAS</option><option value="lodging">LODGING</option><option value="attraction">ATTRACTION</option><option value="camping">CAMPING</option></select>';
        if (layout.id.length === 2) { // 1 Legend
            $("#legend").html(legendSelect);
        } else if (layout.id.length === 3) { // 2 Legends
            $("#legend").html(legendSelect + legendSelect);
        } else if (layout.id.length === 4) { // 3 Legends
            $("#legend").html(legendSelect + legendSelect + legendSelect);
        }
    }
</script>

<!-- LLC Section -->
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="signType">
    <h2 class="w3-text-light-grey">LOGO LAYOUT CALCULATOR:</h2>
    <hr style="width:200px" class="w3-opacity">

    <h4 class="w3-text-light-grey">Sign Type:</h4>
    <select class="w3-select" name="llcSignType">
        <option value="mainline">Mainline</option>
        <option value="ramp">Ramp</option>
    </select>

    <h4 class="w3-text-light-grey">Location Type:</h4>
    <select class="w3-select" name="llcLocationType">
        <option value="rural">Rural</option>
        <option value="urban">Urban</option>
    </select>

    <h4 class="w3-text-light-grey">Sign Dimensions:</h4>
    <select class="w3-select" name="llcDimensions">

    </select>
    <button type="button" name="update" class="w3-button w3-light-grey w3-padding-large w3-section">
        UPDATE
    </button>
</div>
<!-- End LLC Section -->

<!-- Layout Section -->
<div class="w3-padding-64 w3-content" id="layouts_result">
    <h2 class="w3-text-light-grey">CHOOSE YOUR LAYOUT:</h2>
    <hr style="width:200px" class="w3-opacity">
    <div id="layouts" class="w3-container w3-mobile">
    </div>
</div>
<!-- End Layout Section -->

<!-- Legend Section -->
<div class="w3-padding-64 w3-content" id="legends_result">
    <h2 class="w3-text-light-grey">CHOOSE YOUR LEGEND(S):</h2>
    <hr style="width:200px" class="w3-opacity">
    <div id="legends" class="w3-container w3-mobile">
    </div>
</div>
<!-- End Legend Section -->

<script>
    $(document).ready(function() {
        let signType = $("[name='llcSignType']").val(); // mainline or ramp
        let locationType = $("[name='llcLocationType']").val(); // rural or urban
        $("[name='llcDimensions']").html(getDimensions(signType, locationType));
        let dimension = $("[name='llcDimensions']").val();

        $("[name='update']").click(function() {
            signType = $("[name='llcSignType']").val(); // mainline or ramp
            locationType = $("[name='llcLocationType']").val(); // rural or urban
            dimension = $("[name='llcDimensions']").val();

            $.ajax({
                url: 'getLayout.php',
                type: 'POST',
                data: {
                    'dimension' : dimension,
                    'location' : locationType,
                    'type' : signType
                },
                success: function(data){
                    loadLayouts(data);
                },
                error: function(jqXHR, exception) {
                    let msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    $('#layouts').html(msg);
                },
            });
        });

        function loadLayouts(layouts) {
            $('#layouts').html('');
            let imgLayouts = layouts.split(",");
            let htmlCellRowStart = '<div class="w3-cell-row">';
            let htmlEndDiv = "</div>";
            let htmlCellStart = '<div id="layouts" class="w3-container w3-cell w3-cell-middle w3-cell-top w3-mobile">';
            let html = htmlCellRowStart;

            let x;
            let y=1;

            for (x in imgLayouts) {
                if ((y%3) != 0) {
                    html += htmlCellStart + '<img src="media/images/' + imgLayouts[x] + '.png" id="' + imgLayouts[x] + '" onclick="legends(this)" style="width:200px">' + htmlEndDiv;
                    y++;
                } else {
                    html += htmlCellStart + '<img src="media/images/' + imgLayouts[x] + '.png" id="' + imgLayouts[x] + '" onclick="legends(this)" style="width:200px">' + htmlEndDiv + htmlEndDiv + htmlCellRowStart + htmlCellStart;
                }
            }
            $('#layouts').html(html);
        }

        $("select[name='llcSignType']").change(function() {
            signType = $(this).val();
            $("[name='llcDimensions']").html(getDimensions(signType, locationType));
        }).change();

        $("[name='llcLocationType']").change(function() {
            locationType = $(this).val();
            $("select[name='llcDimensions']").html(getDimensions(signType, locationType));
        }).change();

        function getDimensions(st, loc) {
            let ruralMainline = "<option value='156x72'>13 x 6</option><option value='228x72'>19 x 6</option><option value='156x120'>13 x 10</option><option value='228x120'>19 x 10</option>";
            let urbanMainline = '<option value="132x72">11 x 6</option><option value="180x72">15 x 6</option><option value="132x120">11 x 10</option><option value="180x120">15 x 10</option>';

            if (st == 'mainline') {
                if (loc == 'rural') {
                    return ruralMainline;
                } else if (loc == 'urban') {
                    return urbanMainline;
                } else {
                    return "<option>Shit Something Bad Happened to Location!</option>";
                }
            } else if (st == 'ramp') {
                if (loc == 'rural') {
                    return "<option>Rural Ramp</option>";
                } else if (loc == 'urban') {
                    return "<option>Urban Ramp</option>";
                } else {
                    return "<option>Shit Something Bad Happened to Location!</option>";
                }
            } else {
                return "<option>Shit Something Bad Happened to SignType!</option>";
            }
        }
    });
</script>

<?php include('footer.html'); ?>