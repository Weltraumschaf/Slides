<?php

/**
 * @see Karel_SuperKarel
 */
require_once 'SuperKarel.php';

class OurDoubleBeepers extends SuperKarel {
    public function run() {
        $this->move();
        $this->doubleBeepersInPile();
        $this->moveBackward();
    }

    private function doubleBeepersInPile() {
        while ($this->beepersPresent()) {
            $this->pickBeeper();
            $this->putTwoBeepersNextDoor();
        }

        $this->movePileNextDoor();
    }

    private function moveBackward() {
        $this->turnAround();
        $this->move();
        $this->turnAround();
    }

    private function putTwoBeepersNextDoor() {
        $this->move();

        while ($this->beepersPresent()) {
            $this->moveOneBeeperBack();
        }

        $this->moveBackward();
    }

    private function movePileNextDoor() {
        $this->move();
        $this->putBeeper();
        $this->putBeeper();
        $this->moveBackward();
    }

    private function moveOneBeeperBack() {
        $this->pickBeeper();
        $this->moveBackward();
        $this->putBeeper();
        $this->move()
    }
}