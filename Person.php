<?php
abstract class Person
{
  private $fname;
  private $lname;
  private $birth;

  public function getFname() {
      return $this->fname;
    }

  public function setFname ($value) {
			$this->fname=$value;
		}

  public function getLname() {
      return $this->lname;
    }

  public function setLname ($value) {
			$this->lname=$value;
		}

  public function getBirth() {
      return $this->birth;
    }

  public function setBirth ($value) {
			$this->birth=$value;
		}

    public function getAge() {
      return 2019 - $this->birth;
    }

}

?>
