<?php

namespace class;


class HREmploee extends Employee
{
    private $numberOfClientsServed;
    private $numberOfEmployees;

    function __construct($name, $surname, $salary, $workExperience, $numberOfClientsServed, $numberOfEmployees)
    {
        parent::__construct($name, $surname, $salary, $workExperience);
        $this->numberOfClientsServed=$numberOfClientsServed;
        $this->numberOfEmployees=$numberOfEmployees;
    }
    function getCalculatingEmployeeValue(): float|int
    {
        return ($this->numberOfClientsServed+$this->numberOfEmployees)*($this->workExperience/100);
    }


    public function getNumberOfClientsServed()
    {
        return $this->numberOfClientsServed;
    }


    public function setNumberOfClientsServed($numberOfClientsServed): void
    {
        $this->numberOfClientsServed = $numberOfClientsServed;
    }


    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }


    public function setNumberOfEmployees($numberOfEmployees): void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }
    function Show(): void
    {
        parent::Show();
        echo "<p>Ценность сотрудника : </p>{$this->getCalculatingEmployeeValue()}<br>";
    }

}