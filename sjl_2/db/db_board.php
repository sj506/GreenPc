<?php

include_once "db.php";

function sel_board_list(&$param)
{
    $start_idx = $param["start_idx"];
    $row_count = $param["row_count"];
    $sql = "SELECT A.i_board, A.title, A.ctnt, 
                    B.nm 
            from sj_board AS A 
            INNER join sj_user as B 
            ON A.i_user = B.i_user 
            order BY A.i_board DESC
            LIMIT $start_idx, $row_count";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}

function insert_board(&$param)
{
    $title = $param['title'];
    $ctnt = $param['ctnt'];
    $i_user = $param['i_user'];

    $sql = "INSERT INTO sj_board
    (i_user, title, ctnt)
    value
    ('$i_user','$title','$ctnt')
    ";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}

function sel_board(&$param)
{
    $i_board = $param['i_board'];

    $sql = "SELECT A.i_board, A.title, A.ctnt, A.i_user, 
                    B.i_user, B.nm 
                    FROM sj_board AS A 
                    INNER JOIN sj_user AS B 
                    ON A.i_user = B.i_user 
                    WHERE i_board = $i_board
    ";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}

function del_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $sql = "DELETE FROM sj_board WHERE i_board = $i_board and i_user = $i_user";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}

function upd_board(&$param)
{
    $title = $param['title'];
    $ctnt = $param['ctnt'];
    $i_user = $param['i_user'];

    $sql = "UPDATE FROM sj_board 
            SET title = '$title',
                ctnt = '$ctnt'
            WHERE i_user = $i_user
    ";
        $conn = get_conn();
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
}

function sel_paging_count(&$param) {
    $row_count = $param["row_count"];

    $sql = "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
              FROM sj_board";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn); 
    $row = mysqli_fetch_assoc($result);
    return $row["cnt"];
}


    //다음글 (최신글)
    function sel_next_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board > $i_board
                 ORDER BY i_board
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }

    //이전글 (지난글)
    function sel_prev_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board < $i_board
                 ORDER BY i_board DESC
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }
