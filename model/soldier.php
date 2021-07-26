<?php
class soldierClass{

    var $id;
    var $rarity;
    var $quality;
    var $unlockArena;
    var $combatPoints;
    var $cvc;

    /**
     * soldierClass constructor.
     * @param $id
     * @param $rarity
     * @param $quality
     * @param $unlockArena
     * @param $combatPoints
     * @param $cvc
     */
    public function __construct($id, $rarity, $quality, $unlockArena, $combatPoints, $cvc)
    {
        $this->id = $id;
        $this->rarity = $rarity;
        $this->quality = $quality;
        $this->unlockArena = $unlockArena;
        $this->combatPoints = $combatPoints;
        $this->cvc = $cvc;
    }


}