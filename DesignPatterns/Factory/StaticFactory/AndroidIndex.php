<?php

//$factory = new MobileFactory();
$run = new Runable(Factory::createPlatform(MobileFactory::class));
$run->run();