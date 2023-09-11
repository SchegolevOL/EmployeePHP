<?php
namespace class;

abstract class Employee
{
    protected $name;

    protected $surname;

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }


    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    protected $workExperience;


    public function getWorkExperience()
    {
        return $this->workExperience;
    }


    public function setWorkExperience($workExperience)
    {
        $this->workExperience = $workExperience;
    }

    protected $salary;


    public function getSalary()
    {
        return $this->salary;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function __construct($name, $surname, $salary, $workExperience)
    {
        $this->name=$name;
        $this->salary=$salary;
        $this->surname=$surname;
        $this->workExperience=$workExperience;

    }
    function Show()
    {
        echo "<p>Имя : {$this->name}</p>
              <p>Фамилия : {$this->surname}</p>
              <p>Стаж работы : {$this->workExperience}</p>
              <p>Заработная плата : {$this->salary}</p>";
    }

    abstract function getCalculatingEmployeeValue();
}