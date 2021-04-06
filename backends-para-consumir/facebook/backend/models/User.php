<?php
    require_once('../database/Connection.php');
    class User {
        private $userId;
        private $genderId;
        private $firstName;
        private $lastName;
        private $profileAvatar;

        public function getUserId() {
            return $this->userId;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
            return $this;
        }

        public function getGenderId() {
            return $this->genderId;
        }

        public function setGenderId($genderId) {
            $this->genderId = $genderId;
            return $this;
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
            return $this;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName($lastName) {
            $this->lastName = $lastName;
            return $this;
        }

        public function getProfileAvatar() {
            return $this->profileAvatar;
        }

        public function setProfileAvatar($profileAvatar) {
            $this->profileAvatar = $profileAvatar;
            return $this;
        }

        public function saveUser () {

        }

        public function getUsers () {

        }
    }