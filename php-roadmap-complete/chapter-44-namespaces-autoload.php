<?php
// Chapter 44: Namespaces & basic autoload
namespace MyApp\Utils;
class Helper { public static function hi(){ return 'hello from namespaced class'; } }

// Simple autoload example (PSR-4 requires composer in real projects)
// In this single-file demo, call directly:
echo Helper::hi() . "\n";
?>