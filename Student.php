<?php
class Student extends Person
{
  private $courses=array();
  private $credits;

  function __construct($fn=null, $ln=null, $by=null, $cou=array(), $cre=null)
  {


    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$by;
    $this->courses=$cou;
    $this->credits=$cre;
  }

  public function getCourses() {
      return $this->courses;
    }

  public function setCourses ($param) {
      array_push($this->courses,$param);
    }

  public function getCredits() {
      return $this->credits;
    }

  public function setCredits ($credits) {
      $this->credits=$credits;
    }

}

?>
