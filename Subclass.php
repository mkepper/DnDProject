<?php


class SubClass{
    public $class;
    public $subClass = array();
    public $features = array();

    function setSubclass(){
        $this->class = $_POST['class'];
        $fighterSub = array("Battle Master", "Champion", "Eldritch Knight");
        $barbarianSub = array("Berserker", "Totem Warrior");
        $wizardSub = array("Conjuration", "Divination", "Enchantment", "Evocation", "Illusion", "Necromancy", "Transmutation");
        $sorcSub = array("Draconic Bloodline", "Wild Magic");
            if($this->class == "Fighter"){
                $this->subClass = $fighterSub;
                echo print_r($this->subClass);
            }
            elseif($this->class == "Barbarian"){
                $this->subClass = $barbarianSub;
                echo print_r($this->subClass);
            }
            elseif($this->class == "Wizard"){
                $this->subClass = $wizardSub;
                echo print_r($this->subClass);
            }
    }
    
}


?>