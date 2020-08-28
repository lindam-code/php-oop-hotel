<?php
class Room {
  public $room_number;

  public $floor;

  public $beds;

  public function __construct($_room_number, $_floor, $_beds) {
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  }

  public function getRoomData() {
    $room_array = [
      'room_number' => $this->room_number,
      'floor' => $this->floor,
      'beds' => $this->beds,
    ];
    return $room_array;
  }
}
 ?>
