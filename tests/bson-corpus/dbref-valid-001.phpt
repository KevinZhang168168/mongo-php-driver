--TEST--
DBRef: DBRef
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('37000000036462726566002b0000000224726566000b000000636f6c6c656374696f6e00072469640058921b3e6e32ab156a22b59e0000');
$canonicalExtJson = '{"dbref": {"$ref": "collection", "$id": {"$oid": "58921b3e6e32ab156a22b59e"}}}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toExtendedJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
37000000036462726566002b0000000224726566000b000000636f6c6c656374696f6e00072469640058921b3e6e32ab156a22b59e0000
{"dbref":{"$ref":"collection","$id":{"$oid":"58921b3e6e32ab156a22b59e"}}}
37000000036462726566002b0000000224726566000b000000636f6c6c656374696f6e00072469640058921b3e6e32ab156a22b59e0000
===DONE===