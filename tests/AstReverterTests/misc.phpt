Misc Test
<=======>
<?php

a:
if (1) {
    try {
     $a;
    } catch (Exception $e) {
        $b;
    } finally {
        $c;
    }
}
if (1) {
    $a;
} else if (2) {
    $b;
} elseif (3) {
    $c;
} else {
    $d;
}
[1 => 2, 3=>4, 5, 6, a(), b() => c];
(string) $a;
(bool) $a;
(float) $a;
(int) $a;
(array) $a;
(object) $a;
(unset) $a;
$a = &$b;
function &a(&$a){}
__LINE__;
__FILE__;
__DIR__;
__TRAIT__;
__METHOD__;
__FUNCTION__;
__NAMESPACE__;
__CLASS__;
<=======>
<?php

a:
if (1) {
    try {
        $a;
    } catch (Exception $e) {
        $b;
    } finally {
        $c;
    }
}
if (1) {
    $a;
} elseif (2) {
    $b;
} elseif (3) {
    $c;
} else {
    $d;
}
[1 => 2, 3 => 4, 5, 6, a(), b() => c];
(string) $a;
(bool) $a;
(float) $a;
(int) $a;
(array) $a;
(object) $a;
(unset) $a;
$a = &$b;
function &a(&$a)
{
}
__LINE__;
__FILE__;
__DIR__;
__TRAIT__;
__METHOD__;
__FUNCTION__;
__NAMESPACE__;
__CLASS__;