<?php

require_once 'SuperKarel.php';

class DoYourThing extends SuperKarel {
    public function run() {
        $this->move();
        while ($this->beepersPresent()) {
            $this->pickBeeper();
            $this->move();
            $this->putBeeper();
            $this->putBeeper();
            $this->turnArraound();
            $this->move();
            $this->turnArraound();
        }
        $this->move();
        while ($this->beepersPresent()) {
            $this->pickBeeper();
            $this->turnArraound();
            $this->move();
            $this->putBeeper();
            $this->turnArraound();
            $this->move();
        }
    }
}