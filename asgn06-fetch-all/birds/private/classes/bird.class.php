<?php

class Bird {

  static protected $database;

  /**
   * [set_database description]
   *
   * @param   [type]  $database  [$database description]
   *
   * @return  [type]             [return description]
   */
  static public function set_database($database) {
    self::$database = $database;
  }

  /**
   * [find_by_sql description]
   *
   * @param   [type]  $sql  [$sql description]
   *
   * 
   */
  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed. That's unfortunate!");
    }
    $object_array = [];
    while($record = $result->fetch_assoc()) {
      $object_array[] = self::instantiate($record);
    }
    $result->free();
    return $object_array;
  }

  /**
   * fetches everything from the birds database!
   *
   * @return  string  [return description]
   */
  static public function find_all() {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }

  /**
   * finds a record by its id
   *
   * @param   [type]  $id  [$id description]
   *
   * @return  [type]       [return description]
   */
  static public function find_by_id($id) {
    $sql = "SELECT * FROM birds ";
    $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
    $obj_array = self::find_by_sql($sql);
    if(!empty($obj_array)) {
    return array_shift($obj_array);
    } else {
      return false;
    }
  }

  /**
   * [instantiate description]
   *
   * @param   [type]  $record  [$record description]
   *
   * @return  [type]           [return description]
   */
  static protected function instantiate($record) {
    $object = new self;
    foreach($record as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $conservation_id;
  public $backyard_tips;

  protected const CONSERVATION_ID = [
    1 => 'low',
    2 => 'moderate',
    3 => 'high',
    4 => 'extreme'
  ];

  /**
   * [__construct description]
   *
   * @param   array  $args  [$args description]
   *
   * @return  []             [return description]
   */
  public function __construct($args=[]) {
    $this->id = $args['id'] ?? '';
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }

  /**
   * retrieves conservation id from database
   *
   * @return string returns conservation id number
   */
  public function conservation_level() {
    if($this->condition_id > 0) {
      return self::CONSERVATION_ID[$this->condition_id];
    } else {
      return "Unknown";
    }
  }

  public function name() {
    return "{$this->common_name}";
  }
}
