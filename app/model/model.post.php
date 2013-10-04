<?php

class postModel extends basicModel {
    private $topicId = '';
    private $body = '';
    private $authorKey = '';
    
    private function setTopicId($topicId) {
        $this->topicId = $topicId;
    }
    
    private function setTopicBody($body) {
        $this->body = $body;
    }
    
    private function setAuthorKey($key) {
        $this->authorKey = $key;
    }
    
    private function post() {
        
    }
}