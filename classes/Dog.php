<?php

abstract class Dog {

    public function sound(): string {
        return 'woof! woof!';
    }

    public function hunt(): string {
        return 'growl!';
    }

    public function __call($method, $arguments) {
        return 'There is no such action';
    }

}