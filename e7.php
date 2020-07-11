<?php

interface Buch {
    public function lesen();
}

class EinBuch implements Buch {
    public function lesen();
}

class MeinLieblingsBuch extends EinBuch {
    public function lesen();
}


interface Buch {
    public function lesen();
}

class EinBuch implements Buch {
    public function lesen();
}

class MeinLieblingsBuch implements Buch {
    public function lesen();
}

class Whatever {

    // falsch
    public function setBuch(EinBuch $buch) {}

    // falsch
    public function setBuch(MeinLieblingsBuch $buch) {}

    // richtig
    public function setBuch(Buch $buch) {}
}
