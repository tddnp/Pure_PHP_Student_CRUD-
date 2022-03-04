<?php


class Student
{
    private $name;
    private $dob;
    private $age;
    private $math;
    private $physic;
    private $chemistry;

    public function __construct($name, $dob, $age, $math, $physic, $chemistry)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->age = $age;
        $this->math = $math;
        $this->physic = $physic;
        $this->chemistry = $chemistry;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getMath()
    {
        return $this->math;
    }

    public function setMath($math)
    {
        $this->math = $math;
    }

    public function getPhysic()
    {
        return $this->physic;
    }

    public function setPhysic($physic)
    {
        $this->physic = $physic;
    }

    public function getChemistry()
    {
        return $this->chemistry;
    }

    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    public function avg()
    {
        return ($this->math + $this->physic + $this->chemistry) / 3;
    }
}