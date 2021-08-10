<?php
namespace StaffManager;

class Employee
{
    private $firstname;
    private $lastname;
    private $birthday;
    private $address;
    private $role;
    public function __construct($data)
    {
       $this->firstname = $data['first_name'];
       $this->lastname = $data['last_name'];
       $this->birthday = $data['birthday'];
       $this->address = $data['address'];
       $this->role = $data['role'];
    }
    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    } public function getFirstName($firstname) {
        return  $this->firstname;
    }public function setLastName($lastname) {
        $this->lastname =$lastname;
    } public function getLastName($lastname) {
        return  $this->lastname;
    }
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }
    public function getBirthday($birthday) {
        return $this->birthday;
    } public function setAddress($address) {
        $this->address = $address;
    }
    public function getAddress($address) {
        return $this->address;
    }
    public function setRole ($role) {
        $this->role = $role;
    }public function getRole ($role) {
         return   $this->role;
    }
}


