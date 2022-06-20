<?php
namespace application\controllers;

abstract class Controller
{
    public function __construct($action)
    {
        $view = $this->$action();
        require_once $this->getView($view); // _VIEW / board/list 를 리턴함
    }

    protected function addAttribute($key, $val)
    {
        $this->$key = $val;
    }

    protected function getView($view)
    {
        if (strpos($view, 'redirect:') === 0) {
            header('Location: http://' . _HOST . substr($view, 9));
        }
        return _VIEW . '/' . $view;
        // _VIEW 상수 $도 없고 ""로 안 감싸져있고 모두 대문자네? 상수
    }
}
