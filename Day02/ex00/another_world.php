#!/usr/bin/php
<?php
if (isset($argv[1])) {
    $argv[1] = trim(preg_replace('/[ \t]+/',' ', $argv[1]));
    print ($argv[1]);
}
print ("\n");