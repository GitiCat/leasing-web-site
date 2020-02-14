<?php 

class Controller_Index extends ControllerBase {
    public $layouts = "layout";
    public $template = "index";

    function index() {
        $model = new Model_Index();
        $content = $model->getContent();
        $this->template->vars('content', $content);
        $this->template->view('index');
    }
}