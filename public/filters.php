<?php
$fp = fopen('php://output', 'w');
//stream_filter_append($fp, 'string.rot13');

stream_filter_append($fp, function(string $item) {
    $item = 'FIltered: ' . $item;
});


fwrite($fp, "This is a test.\n");
/* Outputs:  Guvf vf n grfg.   */