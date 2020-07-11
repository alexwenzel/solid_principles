<?php

class Checkout {

    protected function getBezahlmethoden() {
        // gibt ein array mit methoden zurück
    }

    public function render() {
        // zeige alle bezahlmethoden
        var_dump($this->getBezahlmethoden());
    }
}

class CheckoutA extends Checkout {
    
    public function render() {
        // zeige alle bezahlmethoden
        var_dump($this->getBezahlmethoden());

        // schicke eine email
        $mail->send();
    }
}