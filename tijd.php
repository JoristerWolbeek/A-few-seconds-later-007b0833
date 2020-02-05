<?php

$pos = strpos($argv[1], "s");
echo("de tijd is: ".substr((string)$argv[1], 0, $pos));