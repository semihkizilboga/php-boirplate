<?php

class dynamic extends Model
{ 

  public function getAll($table,$where = [])
  {
    return $this->database->select($table,'*',$where);
  }

  public function insert($table, $data = [])
  {
    return $this->database->insert($table, $data);
  }

  public function update($table,$data = [],$where = [])
  {
    return $this->database->update($table, $where);
  }

  public function delete($table, $where = [])
  {
    return $this->database->delete($table, $where);
  }

}
