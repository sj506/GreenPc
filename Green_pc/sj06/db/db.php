<?php

define('URL', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '506greendg@');
define('DB_NAME', 'sj06');

function get_conn()
{
    return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
}

// php 와 maria db를 연결시켜줌
