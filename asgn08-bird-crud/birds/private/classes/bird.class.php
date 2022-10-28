<?php

class Bird extends DatabaseObject {

  static protected $table_name = 'birds';
  static protected $db_columns = ['id', 'common_name', 'habitat', 'food', 'conservation_id', 'backyard_tips'];

  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $conservation_id;
  public $backyard_tips;

  public const CONSERVATION_OPTIONS = [
    1 => 'Low',
    2 => 'Moderate',
    3 => 'High',
    4 => 'Extreme'
  ];

   /**
   * sets the database!
   *
   * @param   mixed  $database
   *
   */
  static public function set_database($database) {
    self::$database = $database;
  }

  /**
   * [find_by_sql description]
   *
   * @param   mixed  $sql
   *
   * @return  array  returns object array
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
   * @return  string  returns an sql string
   */
  static public function find_all() {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }

  /**
   * finds a record by its id
   *
   * @param   mixed  $id 
   *
   * @return  array
   * @return  bool
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
   * creates a new record in the database
   *
   * @param   mixed  $record  [$record description]
   *
   * @return  [type] returns new object
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

  /**
   * populates row in the database
   *
   * @param   array  $args 
   *
   * @return  []
   */
  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }

  /**
   * retrieves conservation id from database
   *
   * @return string returns conservation id number
   */
  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_ID[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

  public function name() {
    return "{$this->common_name}";
  }
}
