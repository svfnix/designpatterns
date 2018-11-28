<?php

//$platform = new DesktopPlatformInterface();
$run = new Runable(Factory::createPlatform(DesktopFactory::class));
$run->run();