<?php

declare (strict_types = 1);

readline_callback_handler_install('', function() { });

$block = html_entity_decode('&#x2588;', ENT_NOQUOTES, 'UTF-8');

for($i=0; $i<5; $i++) {
    fwrite(STDOUT, $block);
}


/*
while (true) {
    $char = fread(STDIN, 1);
    echo $char;
    usleep(5000);
}
*/
