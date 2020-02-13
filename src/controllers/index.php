<?php

class Controller_Index extends ControllerBase {
    public $layouts = "layout";

    function index() {
        $model = new Model_User();
        $userInfo = $model->getUser();
        $this->template->vars('userInfo', $userInfo);
        $this->template->view('index');
    }
}