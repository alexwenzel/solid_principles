<?php

class Checkout {

    public function render() {
        // zeige alle bezahlmethoden
        var_dump([
            'methode 1',
            'methode 2',
            'methode 3',
            '...',
        ]);
    }
}

class CheckoutA extends Checkout {

    public function render() {
        // zeige alle bezahlmethoden
        var_dump([
            'methode 1',
            'methode 2',
            'methode 3',
            'NEUE METHODE',
            '...',
        ]);
    }
}

class Checkout {

    // ueberschreibbar
    protected function getBezahlmethoden() {
        // gibt ein array mit methoden zurück
    }

    // nicht ueberschreibbar
    private function doVeryImportantStuff() {

    }

    public function render() {
        // zeige alle bezahlmethoden
        var_dump($this->getBezahlmethoden());
    }
}

class CheckoutA extends Checkout {
    
    protected function getBezahlmethoden() {
        // gibt ein array mit methoden zurück
    }
}

class CheckoutB extends Checkout {
    
    protected function getBezahlmethoden() {
        // gibt ein array mit methoden zurück
    }
}


