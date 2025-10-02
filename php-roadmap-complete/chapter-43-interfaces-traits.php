<?php
// Chapter 43: Interfaces & Traits
interface Logger { public function log($msg); }
trait FileLogger { public function log($msg){ file_put_contents('trace.log', $msg."\n", FILE_APPEND); } }
class App implements Logger { use FileLogger; }
$app = new App(); $app->log('Started');
echo 'Logged to trace.log\n';
?>