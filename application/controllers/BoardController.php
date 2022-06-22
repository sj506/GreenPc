<?php

namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller
{
    public function list()
    {
        $model = new BoardModel();
        $this->addAttribute(_TITLE, '리스트');
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/list.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));

        $this->addAttribute('js', ['board/list']);
        $this->addAttribute('list', $model->selBoardList());
        // $this->list = $model->selBoardList();

        return 'template/t1.php';

        // return 'board/list.php'; // view 파일명
    }
    public function detail()
    {
        $i_board = $_GET['i_board'];
        // print 'i_board : ' . $i_board;

        $model = new BoardModel();

        $param = ['i_board' => $i_board];
        $this->addAttribute('data', $model->selBoard($param));

        $this->addAttribute('js', ['board/detail']);
        return 'board/detail.php';

        //글번호 제목 내용 글쓴이 이름 작성일
    }

    public function del()
    {
        $i_board = $_GET['i_board'];

        $model = new BoardModel();

        $param = ['i_board' => $i_board];
        $model->delBoard($param);
        return 'redirect:/board/list';
    }

    public function mod()
    {
        $i_board = $_GET['i_board'];

        $model = new BoardModel();

        $param = ['i_board' => $i_board];
        $this->addAttribute('data', $model->selBoard($param));

        $this->addAttribute(_TITLE, '수정');
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/mod.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));

        return 'template/t1.php';
    }

    public function modProc()
    {
        $i_board = $_POST['i_board'];
        $title = $_POST['title'];
        $ctnt = $_POST['ctnt'];

        $param = [
            'i_board' => $i_board,
            'title' => $title,
            'ctnt' => $ctnt,
        ];

        $model = new BoardModel();

        $model->updBoard($param);
        return "redirect:/board/detail?i_board=${i_board}";
    }

    public function write()
    {
        $this->addAttribute(_TITLE, '글입력');
        $this->addAttribute(_HEADER, $this->getView('template/header.php'));
        $this->addAttribute(_MAIN, $this->getView('board/write.php'));
        $this->addAttribute(_FOOTER, $this->getView('template/footer.php'));

        return 'template/t1.php';

        $model = new BoardModel();

        $model->insBoard($param);
        return 'board/list.php';
    }

    public function writeProc()
    {
        $title = $_POST['title'];
        $ctnt = $_POST['ctnt'];

        $model = new BoardModel();

        $param = [
            'title' => $title,
            'ctnt' => $ctnt,
        ];
        $model->insBoard($param);

        return 'redirect:/board/list';
    }
}
