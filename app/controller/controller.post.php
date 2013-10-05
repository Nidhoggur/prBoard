<?php

class PostController extends BasicController {

    public function __construct() {
        $this->model = postModel;
    }

    public function index() {
        $this->post();
    }

    private function safeVar($var) {
        $data = trim($var);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function post() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tid = $this->intval($_POST['tid']);
            $body = $this->safeVar($_POST['body']);
            // $authorKey будем брать из куков
            $this->model->setTopicId($tid);
            $this->model->setTopicBody($body);
            $this->model->setAuthorKey($authorKey);
            if ($this->model->post()) {
                $this->view->show('postForm', 'Success');
            } else {
                $this->view->show('postForm', 'Fail');
            }
        }
    }

}