<?php

class RubberDachshundWithSqueaker extends Dog {

    public function sound(): string {
        return 'Pi pi pi';
    }

    public function hunt(): string {
        return 'Nothing happens...';
    }

}