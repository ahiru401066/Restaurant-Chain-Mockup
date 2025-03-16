<?php

namespace Models;

use Interfaces\FileConvertible;

class Employee extends User implements FileConvertible {
    public string $jobTitle;
    public float $salary;
    public string $startDate;
    public array $awards = [];
    
    public function __construct($id, $firstName, $lastName, $email, $hashedPassword, $phoneNumber, $address, $birthDate, $membershipExpirationDate, $role, $jobTitle, $salary, $startDate, $awards = []) {
        parent::__construct($id, $firstName, $lastName, $email, $hashedPassword, $phoneNumber, $address, $birthDate, $membershipExpirationDate, $role);
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->awards = $awards;
    }
    public function toHTML():string {
        return sprintf("
            <div class='employee'>
                <h2>%s %s</h2>
                <p>%s</p>
                <p>%s</p>
                <p>%s</p>
                <p>Birth Date: %s</p>
                <p>Membership Expiration Date: %s</p>
                <p>Role: %s</p>
                <p>jobTitle： %s</p>
                <p>salary： %s</p>
                <p>startDate： %s</p>
            </div>",
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phoneNumber,
            $this->address,
            $this->birthDate->format('Y-m-d'),
            $this->membershipExpirationDate->format('Y-m-d'),
            $this->role,
            $this->jobTitle,
            $this->salary,
            $this->startDate,
        );
    }
    public function toMarkdown():string {
        return "## User: {$this->firstName} {$this->lastName}";
    }
    public function toArray():array {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        ];
    }
}
?>
