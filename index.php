<?php
  include_once(__DIR__ . '/Room.php');

  $stanze = [
    [
      'id' => '3',
      'room_number' => '102',
      'floor' => '1',
      'beds' => '2',
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2020-07-28 17:14:21',
    ],
    [
      'id' => '4',
      'room_number' => '103',
      'floor' => '1',
      'beds' => '1',
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2018-05-28 13:33:11'
    ],
  ];
  foreach ($stanze as $stanza) {
    $room = new Room($stanza['room_number'],$stanza['floor'],$stanza['beds']);
    $rooms[] = $room;
    var_dump($room->getRoomData());
  }
  var_dump($rooms);


?>
