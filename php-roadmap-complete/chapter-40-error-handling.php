<?php
// Chapter 40: Error handling & exceptions
function might_fail($x){
    if($x<=0) throw new Exception('x must be positive');
    return sqrt($x);
}
try{
    echo might_fail(9) . "\n";
    echo might_fail(0) . "\n";
} catch(Exception $e){
    echo 'Caught: ' . $e->getMessage() . "\n";
}
?>