--TEST--
V8\ScriptCompiler\Source
--SKIPIF--
<?php if (!extension_loaded("v8")) print "skip"; ?>
--FILE--
<?php

/** @var \Phpv8Testsuite $helper */
$helper = require '.testsuite.php';

require '.v8-helpers.php';
$v8_helper = new PhpV8Helpers($helper);

// Tests:


$isolate = new V8\Isolate();
$source_string = new V8\StringValue($isolate, 'TEST VALUE 111');
$origin = new \V8\ScriptOrigin('test.js');
$cache_data = new \V8\ScriptCompiler\CachedData('some data');


$value = new \V8\ScriptCompiler\Source($source_string);

$helper->header('Object representation');
$helper->dump($value);
$helper->space();

$helper->header('Accessors');
$helper->method_matches($value, 'GetSourceString', $source_string);
$helper->method_matches($value, 'GetCachedData', null);
$helper->method_matches($value, 'GetScriptOrigin', null);
$helper->space();


$value = new \V8\ScriptCompiler\Source($source_string, $origin);

$helper->header('Object representation');
$helper->dump($value);
$helper->space();

$helper->header('Accessors');
$helper->method_matches($value, 'GetSourceString', $source_string);
$helper->method_matches($value, 'GetScriptOrigin', $origin);
$helper->method_matches($value, 'GetCachedData', null);
$helper->space();


$value = new \V8\ScriptCompiler\Source($source_string, null, $cache_data);

$helper->header('Object representation');
$helper->dump($value);
$helper->space();

$helper->header('Accessors');
$helper->method_matches($value, 'GetSourceString', $source_string);
$helper->method_matches($value, 'GetScriptOrigin', null);
$helper->method_matches($value, 'GetCachedData', $cache_data);
$helper->space();

$value = new \V8\ScriptCompiler\Source($source_string, $origin, $cache_data);

$helper->header('Object representation');
$helper->dump($value);
$helper->space();

$helper->header('Accessors');
$helper->method_matches($value, 'GetSourceString', $source_string);
$helper->method_matches($value, 'GetScriptOrigin', $origin);
$helper->method_matches($value, 'GetCachedData', $cache_data);
$helper->space();

?>
--EXPECT--
Object representation:
----------------------
object(V8\ScriptCompiler\Source)#8 (3) {
  ["source_string":"V8\ScriptCompiler\Source":private]=>
  object(V8\StringValue)#4 (1) {
    ["isolate":"V8\Value":private]=>
    object(V8\Isolate)#3 (5) {
      ["snapshot":"V8\Isolate":private]=>
      NULL
      ["time_limit":"V8\Isolate":private]=>
      float(0)
      ["time_limit_hit":"V8\Isolate":private]=>
      bool(false)
      ["memory_limit":"V8\Isolate":private]=>
      int(0)
      ["memory_limit_hit":"V8\Isolate":private]=>
      bool(false)
    }
  }
  ["origin":"V8\ScriptCompiler\Source":private]=>
  NULL
  ["cached_data":"V8\ScriptCompiler\Source":private]=>
  NULL
}


Accessors:
----------
V8\ScriptCompiler\Source::GetSourceString() matches expected value
V8\ScriptCompiler\Source::GetCachedData() matches expected value
V8\ScriptCompiler\Source::GetScriptOrigin() matches expected value


Object representation:
----------------------
object(V8\ScriptCompiler\Source)#9 (3) {
  ["source_string":"V8\ScriptCompiler\Source":private]=>
  object(V8\StringValue)#4 (1) {
    ["isolate":"V8\Value":private]=>
    object(V8\Isolate)#3 (5) {
      ["snapshot":"V8\Isolate":private]=>
      NULL
      ["time_limit":"V8\Isolate":private]=>
      float(0)
      ["time_limit_hit":"V8\Isolate":private]=>
      bool(false)
      ["memory_limit":"V8\Isolate":private]=>
      int(0)
      ["memory_limit_hit":"V8\Isolate":private]=>
      bool(false)
    }
  }
  ["origin":"V8\ScriptCompiler\Source":private]=>
  object(V8\ScriptOrigin)#5 (6) {
    ["resource_name":"V8\ScriptOrigin":private]=>
    string(7) "test.js"
    ["resource_line_offset":"V8\ScriptOrigin":private]=>
    int(0)
    ["resource_column_offset":"V8\ScriptOrigin":private]=>
    int(0)
    ["options":"V8\ScriptOrigin":private]=>
    object(V8\ScriptOriginOptions)#6 (4) {
      ["is_shared_cross_origin":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_opaque":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_wasm":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_module":"V8\ScriptOriginOptions":private]=>
      bool(false)
    }
    ["script_id":"V8\ScriptOrigin":private]=>
    int(0)
    ["source_map_url":"V8\ScriptOrigin":private]=>
    string(0) ""
  }
  ["cached_data":"V8\ScriptCompiler\Source":private]=>
  NULL
}


Accessors:
----------
V8\ScriptCompiler\Source::GetSourceString() matches expected value
V8\ScriptCompiler\Source::GetScriptOrigin() matches expected value
V8\ScriptCompiler\Source::GetCachedData() matches expected value


Object representation:
----------------------
object(V8\ScriptCompiler\Source)#8 (3) {
  ["source_string":"V8\ScriptCompiler\Source":private]=>
  object(V8\StringValue)#4 (1) {
    ["isolate":"V8\Value":private]=>
    object(V8\Isolate)#3 (5) {
      ["snapshot":"V8\Isolate":private]=>
      NULL
      ["time_limit":"V8\Isolate":private]=>
      float(0)
      ["time_limit_hit":"V8\Isolate":private]=>
      bool(false)
      ["memory_limit":"V8\Isolate":private]=>
      int(0)
      ["memory_limit_hit":"V8\Isolate":private]=>
      bool(false)
    }
  }
  ["origin":"V8\ScriptCompiler\Source":private]=>
  NULL
  ["cached_data":"V8\ScriptCompiler\Source":private]=>
  object(V8\ScriptCompiler\CachedData)#7 (0) {
  }
}


Accessors:
----------
V8\ScriptCompiler\Source::GetSourceString() matches expected value
V8\ScriptCompiler\Source::GetScriptOrigin() matches expected value
V8\ScriptCompiler\Source::GetCachedData() matches expected value


Object representation:
----------------------
object(V8\ScriptCompiler\Source)#9 (3) {
  ["source_string":"V8\ScriptCompiler\Source":private]=>
  object(V8\StringValue)#4 (1) {
    ["isolate":"V8\Value":private]=>
    object(V8\Isolate)#3 (5) {
      ["snapshot":"V8\Isolate":private]=>
      NULL
      ["time_limit":"V8\Isolate":private]=>
      float(0)
      ["time_limit_hit":"V8\Isolate":private]=>
      bool(false)
      ["memory_limit":"V8\Isolate":private]=>
      int(0)
      ["memory_limit_hit":"V8\Isolate":private]=>
      bool(false)
    }
  }
  ["origin":"V8\ScriptCompiler\Source":private]=>
  object(V8\ScriptOrigin)#5 (6) {
    ["resource_name":"V8\ScriptOrigin":private]=>
    string(7) "test.js"
    ["resource_line_offset":"V8\ScriptOrigin":private]=>
    int(0)
    ["resource_column_offset":"V8\ScriptOrigin":private]=>
    int(0)
    ["options":"V8\ScriptOrigin":private]=>
    object(V8\ScriptOriginOptions)#6 (4) {
      ["is_shared_cross_origin":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_opaque":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_wasm":"V8\ScriptOriginOptions":private]=>
      bool(false)
      ["is_module":"V8\ScriptOriginOptions":private]=>
      bool(false)
    }
    ["script_id":"V8\ScriptOrigin":private]=>
    int(0)
    ["source_map_url":"V8\ScriptOrigin":private]=>
    string(0) ""
  }
  ["cached_data":"V8\ScriptCompiler\Source":private]=>
  object(V8\ScriptCompiler\CachedData)#7 (0) {
  }
}


Accessors:
----------
V8\ScriptCompiler\Source::GetSourceString() matches expected value
V8\ScriptCompiler\Source::GetScriptOrigin() matches expected value
V8\ScriptCompiler\Source::GetCachedData() matches expected value
