<?php

namespace trait;

trait TCalculatingEmployeeValue
{
   private $numberOfCompletedPprojects;


    public function getNumberOfCompletedPprojects()
    {
        return $this->numberOfCompletedPprojects;
    }


    public function setNumberOfCompletedPprojects($numberOfCompletedPprojects): void
    {
        $this->numberOfCompletedPprojects = $numberOfCompletedPprojects;
    }
    private $projectExecutionTime;


    public function getProjectExecutionTime()
    {
        return $this->projectExecutionTime;
    }


    public function setProjectExecutionTime($projectExecutionTime): void
    {
        $this->projectExecutionTime = $projectExecutionTime;
    }
    function getCalculatingEmployeeValue(): float|int
    {
        return $this->numberOfCompletedPprojects/$this->workExperience*($this->projectExecutionTime/100);
    }
    function Show(): void
    {
        parent::Show();
        echo "<p>Ценность сотрудника: {$this->getCalculatingEmployeeValue()}</p>";
    }
}