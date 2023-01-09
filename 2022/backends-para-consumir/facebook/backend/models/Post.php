<?php
    require_once('../database/Connection.php');
    class Post {
        private $postId;
        private $userId;
        private $createdAt;
        private $updatedAt;

        public function getPostId() {
            return $this->postId;
        }

        public function setPostId($postId)
        {
            $this->postId = $postId;
            return $this;
        }

        public function getUserId()
        {
                return $this->userId;
        }

        public function setUserId($userId) {
            $this->userId = $userId;
            return $this;
        }

        public function getCreatedAt() {
            return $this->createdAt;
        }

        public function setCreatedAt($createdAt) {
            $this->createdAt = $createdAt;
            return $this;
        }

        public function getUpdatedAt() {
            return $this->updatedAt;
        }

        public function setUpdatedAt($updatedAt) {
            $this->updatedAt = $updatedAt;
            return $this;
        }
    }