<?php
  /**
   *
   */
  class Api{
    private $db;
    function Api(){
      $this->db =mysqli_connect('localhost','root','958060623','comic_fansite') or die(mysqli_error($this->db));
      if($this->db){
        echo 'success';
      }
      else {
          echo 'failure';
      }
    }
  }


  $test=new API();
?>
