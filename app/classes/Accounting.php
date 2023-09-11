<?php

namespace class;


use trait\TCalculatingEmployeeValue;

class Accounting extends Employee
{
    use TCalculatingEmployeeValue;
    function __construct($name, $surname, $salary, $workExperience, $numberOfCompletedPprojects, $projectExecutionTime)
    {
        parent::__construct($name, $surname, $salary, $workExperience);
        $this->numberOfCompletedPprojects=$numberOfCompletedPprojects;
        $this->projectExecutionTime=$projectExecutionTime;
    }
}