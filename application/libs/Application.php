<?php
namespace application\libs;

// 두번째 열리는 파일

class Application
{
    public $controller;
    public $action;

    public function __construct()
    {
        $getUrl = '';
        if (isset($_GET['url'])) {
            $getUrl = rtrim($_GET['url'], '/'); //
            $getUrl = filter_var($getUrl, FILTER_SANITIZE_URL);
        }
        $getParams = explode('/', $getUrl);
        // print_r($getParams);
        $controller =
            isset($getParams[0]) && $getParams[0] != '' // getParams[0] 값이 있거나 빈칸이 아니면
                ? $getParams[0]
                : 'board';
        $action =
            isset($getParams[1]) && $getParams[1] != '' // getParams[1] 값이 있거나 빈칸이 아니면
                ? $getParams[1]
                : 'index';

        if (
            !file_exists(
                'application/controllers/' . $controller . 'Controller.php'
            )
        ) {
            echo '해당 컨트롤러가 존재하지 않습니다.';
            exit();
        }
        $controllerName =
            'application\controllers\\' . $controller . 'controller';
        new $controllerName($action);
        // 생성자함수 호출한 것 boardController 가 객체화 되는데
        // boardController에 생성자함수가 없으면 부모가 호출됨
    }
}

// http://localhost/board/dddd/aaaa

// -> http://localhost/index.php?url=board/dddd/aaaa

// 바꿔줌 .htaccess 을 통해서 , 무조건 한 파일로 거칠 수 있도록 만드는 것
