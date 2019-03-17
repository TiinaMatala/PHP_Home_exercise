<?php
class Staff extends Person
{
  private $vacancy;

  function __construct($fn=null, $ln=null, $by=null, $vac=null)
  {
    $this->setFname=$fn;
    $this->setLname=$ln;
    $this->setBirth=$by;
    $this->vacancy=$vac;
  }

  public function getVacancy() {
		return $this->vacancy;
	}

  public function setVacancy ($vacancy) {
			$this->vacancy=$vacancy;
		}

}


?>
