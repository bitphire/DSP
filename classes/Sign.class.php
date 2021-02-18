<?php


class Panel
{
    // Legends
    const RURAL_ML_ATTRACTIONS_WIDTH = 60;
    const RURAL_ML_LODGING_WIDTH = 60;
    const URBAN_ML_ATTRACTIONS_WIDTH = 48;
    const URBAN_ML_LODGING_WIDTH = 48;
    const ML_CAMPING_WIDTH = 60;
    const ML_FOOD_WIDTH = 36;
    const ML_GAS_WIDTH = 30;
    const ML_HEIGHT = 12;

    // Logos
    const RURAL_ML_LOGO_HEIGHT = 36;
    const RURAL_ML_LOGO_WIDTH = 48;
    const URBAN_ML_LOGO_HEIGHT = 36;
    const URBAN_ML_LOGO_WIDTH = 36;
    const RURAL_RMP_LOGO_HEIGHT = 18;
    const RURAL_RMP_LOGO_WIDTH = 30;
    const URBAN_RMP_LOGO_HEIGHT = 30;
    const URBAN_RMP_LOGO_WIDTH = 18;

    // Accessory Panel Options
    const PANEL_DIVIDER = 2;
    const ARROW_HEIGHT = 10;
    const ARROW_WIDTH = 12;
    const MIN_GAP = 1;
    const MAX_LOGO_GAP = 12;

    // Verticals
    const RURAL_VERTICAL_ML_HEIGHT = 156;
    const RURAL_VERTICAL_ML_WIDTH = 162;
    const URBAN_VERTICAL_ML_HEIGHT = 132;
    const URBAN_VERTICAL_ML_WIDTH = 162;
    const RURAL_VERTICAL_RMP_HEIGHT = 102;
    const RURAL_VERTICAL_RMP_WIDTH = 120;

    protected $pHeight = 0; // Inches
    protected $pWidth = 0; // Inches
    protected $pLogoCount = 0; // 1-6
    protected $pIsVertical = false; // bool

    public function __construct($w, $h) {
        $this->pHeight = $h;
        $this->pWidth = $w;

        if ($h === 156 && $w === 162) {
            $this->pIsVertical = true;
        } else {
            $this->pIsVertical = false;
        }
    }

    public function getPanelArea() {
        return $this->pHeight * $this->pWidth;
    }

    public function isVertical()
    {
        return $this->pIsVertical;
    }

    private function hSpacing() {

    }

    private function determineLogoCount($h, $w) {
        if ($this->pHeight >= 72) {
            $this->pLogoCount = 6;
        } else {
            $this->pLogoCount = 3;
        }
    }

    /*
     *  w    h     w     h
     *  13 * 10 = 156 * 120
     *
     * width / 2 = center
     * (width - Legend Width)
     *
     *
     */




}
