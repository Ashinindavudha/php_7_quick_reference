<?php
/*
Constants


Constants are identifiers for simple values that will not change during script execution like a variable could. When we create a constant we should use all capital letters and underscores separating words to let yourself and others know they are constants. We use the define() function to create constants. Variable scope rules do not apply to constants so they are available anywhere in a script that they are defined in. They may not be unset or redefined.


*/
// Create a constant
define("AUTHOR_NAME", "Ashin", true);
// define(constant_name, value, case_sensitive=true);
echo "The author of this document is named " . AUTHOR_NAME . ".";
