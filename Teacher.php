<?php
class Teacher extends Person
{
  private $subjects=array();
  private $department;

  function __construct($fn=null, $ln=null, $by=null, $sub=array(), $dep=null)
  {
    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$by;
    $this->subjects=$sub;
    $this->department=$dep;
  }

  public function getSubjects() {
		return $this->subjects;
	}

  public function setSubjects ($param) {
			array_push($this->subjects,$param);
		}

  public function getDepartment() {
    return $this->department;
  }

  public function setDepartment ($department) {
			$this->department=$department;
		}

}

?>
