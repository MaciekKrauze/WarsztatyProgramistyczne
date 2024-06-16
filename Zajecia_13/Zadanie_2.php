
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
    <link rel="stylesheet" href="">
</head>
<body>
<header>

</header>
<main>

</main>
<footer>

</footer>
</body>
<?php
interface Employee {
    public function getSalary();
    public function setSalary($salary);
    public function getRole();
}
class Manager implements Employee {

    public $salary;
    public $employees;

    public function AddEmployees(Employee $employee)
    {
        $this->employees[] = $employee;
    }
    public function getEmployees()
    {
        $output = "";
        for ($i = 0; $i < count($this->employees); $i++) {
            $output .= $this->employees[$i] . " ";
        }
        return $output;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getRole()
    {
        return 'Manager';
    }
}
class Developer implements Employee {

    public $salary;
    public $programmingLanguage;

    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
    }
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getRole()
    {
        return "Developer";
    }
}
class Designer implements Employee {

    public $salary;
    public $DesigningTool;

    public function setDesigningTool($designingTool)
    {
        $this->DesigningTool = $designingTool;
    }
    public function getDesigningTool()
    {
        return $this->DesigningTool;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getRole()
    {
        return "Designer";
    }
}
?>