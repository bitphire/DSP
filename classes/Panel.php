<?php


class Panel
{
    protected $height = 0;
    protected $width = 0;
    protected $location = "rural";
    protected $type = "mainline";

    public function setHeight($h) {$this->height=$h;}
    public function setWidth($w) {$this->width=$w;}
    public function setLocation($l) {$this->location=$l;}
    public function setType($t) {$this->type=$t;}

    public function getArea() {return $this->height*$this->width;}

    public function getLayoutOptions() {
        $options = array();
        $dimension = $this->width . "x" . $this->height;
        $return = '';

        if ($this->type == 'mainline' && $this->location == 'rural') {
            $options = $this->getRuralMainlineLayouts($dimension);
        } else if ($this->type == 'mainline' && $this->location == 'urban') {
            $options = $this->getUrbanMainlineLayouts($dimension);
        }

        $return = implode(',', $options);

        echo $return;
    }

    public function getRuralMainlineLayouts($find = "all") : array {
        $options = array();
        $options['156x72'] = array("21", "112");                    // 2 Logo Layouts
        $options['228x72'] = array("31", "321", "312", "311");      // 3 Logo Layouts
        $options['156x120'] = array("41", "422");                   // 4 Logo Layouts
        $options['228x120'] = array("61", "624", "642", "622");     // 6 Logo Layouts
        $options['156x162'] = array("61v", "624v", "642v", "622v"); // 6 Logo Vertical Layouts
        $options['228x192'] = array("91", "924", "942", "922");     // 9 Logo Layouts

        if ($find == "all") {
            $all = array();
            foreach($option as $key => $value) {
                foreach($option[$key] as $v) {
                    $all[] = $v;
                }
            }
            return $all;
        }

        if (isset($options[$find])) {
            return $options[$find];
        } else {
            return array('Error' => "No Layout Option Found For Supplied Dimension!");
        }
    }

    public function getUrbanMainlineLayouts($find = "all") : array {
        $options = array();
        $options['132x72'] = array("21", "112");                    // 2 Logo Layouts
        $options['180x72'] = array("31", "321", "312", "311");      // 3 Logo Layouts
        $options['132x120'] = array("41", "422");                   // 4 Logo Layouts
        $options['180x120'] = array("61", "624", "642", "622");     // 6 Logo Layouts
        $options['132x162'] = array("61v", "624v", "642v", "622v"); // 6 Logo Vertical Layouts
        $options['180x192'] = array("91", "924", "942", "922");     // 9 Logo Layouts

        if ($find == "all") {
            $all = array();
            foreach($option as $key => $value) {
                foreach($option[$key] as $v) {
                    $all[] = $v;
                }
            }
            return $all;
        }

        if (isset($options[$find])) {
            return $options[$find];
        } else {
            return array('Error' => "No Layout Option Found For Supplied Dimension!");
        }
    }
}