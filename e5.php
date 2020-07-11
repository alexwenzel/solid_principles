<?php

class ClassA {

    /**
     * @return ABC
     */
    public function getABC() {
        return new ABC();
    }
}

class ClassB extends ClassA {

    /**
     * @return DEF
     */
    public function getABC() {
        echo "MEOW";
        return new DEF();
    }
}