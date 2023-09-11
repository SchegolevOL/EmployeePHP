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
        echo "<p>Имя : </p>{$this->name}<br>
              <p>Фамилия : </p>{$this->surname}<br> 
              <p>Стаж работы : </p>{$this->workExperience}<br>
              <p>Заработная плата : </p>{$this->salary}<br>";
    }

    abstract function getCalculatingEmployeeValue();
}