<?php
spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});

echo '<h2>Student</h2>';

$aStudent = new Student();
$aStudent->setFname('Lisa');
$aStudent->setLname('Simpson');
$aStudent->setBirth('2009');
$aStudent->setCourses('Literature');
$aStudent->setCourses('Music');
$aStudent->setCredits(150);

echo 'I am '.$aStudent->getFname().' '.$aStudent->getLname();
echo '<br>I was born '.$aStudent->getBirth().' and my age is '.$aStudent->getAge();
$coursesOfLisa=$aStudent->getCourses();
echo '<br>I like to study ';
print_r($coursesOfLisa);
echo '<br>I have following credit points '.$aStudent->getCredits();


echo '<h2>Teacher</h2>';

$aTeacher = new Teacher();
$aTeacher->setFname('Edna');
$aTeacher->setLname('Krabappel');
$aTeacher->setBirth('1979');
$aTeacher->setSubjects('Math');
$aTeacher->setSubjects('History');
$aTeacher->setDepartment('elementary school');

$subjectsOfTeacher=$aTeacher->getSubjects();

echo 'The name of the teacher is '.$aTeacher->getFname().' '.$aTeacher->getLname();
echo '<br>She was born in '.$aTeacher->getBirth().' and her age is '.$aTeacher->getAge();
echo '<br>She teaches ';
print_r($subjectsOfTeacher);
echo '<br>Her department is '.$aTeacher->getDepartment();

echo '<h2>Staff</h2>';

$staff = new Staff();
$staff->setFname('Seymour');
$staff->setLname('Skinner');
$staff->setBirth('1969');
$staff->setVacancy('principal');

$staff2 = new Staff();
$staff2->setFname('Willie');
$staff2->setLname('MacDougal');
$staff2->setBirth('1974');
$staff2->setVacancy('groundskeeper');

echo 'Name: '.$staff->getFname().' '.$staff->getLname();
echo '<br>He was born in '.$staff->getBirth().' and his age is '.$staff->getAge();
echo '<br>Vacancy: '.$staff->getVacancy();
echo '<br>';
echo '<br>Name: '.$staff2->getFname().' '.$staff2->getLname();
echo '<br>He was born in '.$staff2->getBirth().' and his age is '.$staff2->getAge();
echo '<br>Vacancy: '.$staff2->getVacancy();

?>
