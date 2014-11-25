<?php

require __DIR__.'/vendor/autoload.php';


//$class= new StringValidator();



//$validation = IntegerValidator::equal($integer, 8); // True or False
//echo \Panda\Validator\Intvalidator::equal(1,20);

//echo \Panda\Validator\Intvalidator::sup(1,20);

//echo \Panda\Validator\StringValidator::generate(1,5);

echo \Panda\Validator\StringValidator::noSpace("adv");