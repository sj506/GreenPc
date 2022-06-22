<?php
namespace application\models;
use PDO;

class BoardModel extends Model
{
    public function selBoardList()
    {
        $sql = "SELECT i_board, title, created_at 
                  FROM t_board
                 ORDER BY i_board DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selBoard(&$param)
    {
        $sql = 'SELECT a.i_board, a.title, a.ctnt, a.created_at, 
                       b.nm, b.i_user
            FROM t_board AS a 
            INNER JOIN t_user AS b 
            ON a.i_user = b.i_user
            WHERE i_board=:i_board';
        $stmt = $this->pdo->prepare($sql);
        //$stmt : 문장완성, 쿼리문 실행
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delBoard(&$param)
    {
        $sql = 'DELETE FROM t_board WHERE i_board = :i_board';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->execute();
    }

    public function updBoard(&$param)
    {
        $sql = "UPDATE t_board
                set title = :title,
                ctnt = :ctnt
                where i_board = :i_board";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param['i_board']);
        $stmt->bindValue(':title', $param['title']);
        $stmt->bindValue(':ctnt', $param['ctnt']);

        $stmt->execute();
    }

    public function insBoard(&$param)
    {
        $loginUser = $_SESSION[_LOGINUSER];
        // print_r($loginUser->i_user);

        $sql = "INSERT INTO t_board
                (title, ctnt, i_user)
                value
                (:title, :ctnt ,:i_user)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_user', $loginUser->i_user);
        $stmt->bindValue(':title', $param['title']);
        $stmt->bindValue(':ctnt', $param['ctnt']);

        $stmt->execute();
    }
}
