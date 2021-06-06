<?php
  class DB {
      public $query;
      public $ok=0;
      public function __construct($host = 'localhost', $username = 'root', $password = '', $dbname = 'ds', $charset = 'utf8') {
    		$this->connection = new mysqli($host, $username, $password, $dbname);
    		if ($this->connection->connect_error) {
    			$this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
    		}
    		$this->connection->set_charset($charset);
    	}


      public function query()
      {
        $result=$this->connection->query($this->query);
        if (($result === TRUE) || ($result->num_rows > 0))
          {
            $this->ok=1;
            return $result;
          }
          else
          {
            return "Error: " . $this->query . "<br>" . $this->connection->error;
          }
      }


      public function fetchAll($table)
      {
        $this->query="SELECT * FROM ".$table;
        $result = $this->query();
        return $result;
      }
  }
 ?>
