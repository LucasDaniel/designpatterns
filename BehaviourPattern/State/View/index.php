<?php

namespace Lucas\State;

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();
