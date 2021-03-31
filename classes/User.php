<?php

class User {

    private $userId;
    private $firstName;
    private $lastName;
    private $emailId;
    private $password;
    private $areaCode;
    private $phoneNumber;
    private $joiningDatetime;
    private $rolesRoleId;

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }

    function getFirstName(){
        return $this->firstName;
    }

    function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    function getLastName(){
        return $this->lastName;
    }

    function setLastName($lastName){
        $this->lastName = $lastName;
    }

    function getEmailId(){
        return $this->emailId;
    }

    function setEmailId($emailId){
        $this->emailId = $emailId;
    }

    function getPassword($password){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function getAreaCode(){
        return $this->areaCode;
    }

    function setAreaCode($areaCode){
        $this->areaCode = $areaCode;
    }

    function getPhoneNumber(){
        return $this->phoneNumber;
    }

    function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }

    function getJoiningDatetime(){
        return $this->joiningDatetime;
    }

    function setJoiningDatetime($joiningDatetime){
        $this->joiningDatetime = $joiningDatetime;
    }

    function getRolesRoleId(){
        return $this->rolesRoleId;
    }

}