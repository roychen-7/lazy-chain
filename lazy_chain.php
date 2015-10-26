<?php

class A {
    private $_events = array();

    public function action1() {
        array_push($this->_events, function () {
            echo "Action One\n";
        });
        return $this;
    }

    public function action2() {
        array_push($this->_events, function () {
            echo "Action Two\n";
        });
        return $this;
    }

    public function exec() {
        foreach ($this->_events as $e) {
            $e();
        } 
    }
}

$a = new A();
$a->action1()->action2()->exec();

?>
