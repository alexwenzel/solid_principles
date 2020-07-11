<?php

class CheckoutFormService {

    public function render() {
        // formular konfigurieren
        // ggf. mit daten befuellen
    }
}

class CheckoutValidatorService {

    public function validate() {
        // alles prüfen und checken
        // REGEX hier und da ...
    }
}

class Checkout {
    
    public function run() {
        // formular anzeigen
        $form = (new CheckoutFormService($data))->render();

        // daten prüfen
        $validator = (new CheckoutValidatorService($data))->validate();

        // bezahlen
            // anfrage paypal schicken
            // antwort auswerten
            // ...
        // email schicken
            // email typ auswaehlen
            // email template rendern
            // usw. und so fort
    }
}

// step 2

class CheckoutValidatorService {

    // wenn ich hier ABC reingebe
    public function __construct($data) {
        $this->data = $data;
    }

    // kommt TRUE raus
    public function validate() {
        if ($this->data === "abc") {
            return true;
        }

        return false;
    }
}


class CheckoutValidatorServiceTEST {

    public function test_validate_returns_true() {

        $v = new CheckoutValidatorService("abc");
        $this->asserEquals("abc", $v->validate());
    }
}