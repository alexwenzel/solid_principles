<?php

interface Buchladen {
    public function lesen();
    public function bezahlen();
}

class MyBuchladen implements Buchladen {
    // MyBuchladen muss jetzt das
    // komplette Interface implementieren
}



interface Buch {
    public function lesen();
}

interface Laden {
    public function bezahlen();
}

class MyBuchladen implements Buch, Laden {
    
}

class MyBuchladen implements Laden {
    
}


