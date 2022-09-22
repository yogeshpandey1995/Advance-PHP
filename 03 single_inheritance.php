<?php

// Single Inheritance --------------------- (1)


class Employee                   // Parent Class
{
    public $emp_id;
    public $emp_name;

    public function setId($id)
    {
        $this->emp_id = $id;
    }
    public function setName($name)
    {
        $this->emp_name = $name;
    }
}

class Department extends Employee   // Child Class
{
    public $department_name;

    public function setDepartment($department)
    {
        $this->department_name = $department;
        echo "Emyloyee ID is : $this->emp_id <br>";
        echo "Emyloyee Name is : $this->emp_name <br>";
        echo "Emyloyee Department is : $this->department_name <br>";
    }
}

$id_01 = new Department;
$id_01->setId(01);
$id_01->setName("Yogesh Pandey");
$id_01->setDepartment("PHP");
