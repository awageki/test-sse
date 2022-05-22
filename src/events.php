<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-store');

// $i = 0;
// while($i < 10){
//     $i++;
//     printf("data: %s\n\n", json_encode([
//         'time' => (new DateTime('now', new DateTimeZone('Asia/Tokyo')))->format('H:i:s'),
//         'word' => 'abcあいう' . $i,
//     ]));
//     ob_end_flush();
//     flush();
//     sleep(1);
// }

if (isset($_GET['on'])) {
    // echo "event: phalcon-message\n";

    printf("data: %s\n\n", json_encode([
        'time' => (new DateTime('now', new DateTimeZone('Asia/Tokyo')))->format('H:i:s'),
        'word' => 'abcあいう',
    ]));
    ob_end_flush();
    flush();
    sleep(1);
}


