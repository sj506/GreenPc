<?php

include_once 'db.php';

function board_list(&$param)
{
    $start_idx = $param['start_idx'];
    $row_count = $param['row_count'];

    $sql = "SELECT * FROM mainlist 
    ORDER BY num desc
    limit $start_idx, $row_count
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
}

function sel_paging_count(&$param)
{
    $row_count = $param['row_count'];

    $sql = "SELECT ceil(COUNT(num)/$row_count) as cnt
                FROM mainlist
                ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row = mysqli_fetch_assoc($result);
    return $row['cnt'];
}

function inf_board_list()
{
    $sql = "SELECT * FROM mainlist 
    ORDER BY num desc
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
}
