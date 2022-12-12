

<?php

function getIdx($url)
{
    parse_str(parse_url($url)['query'], $results);
    return $results;
}

print_r(getIdx('https://art-map.co.kr/exhibition/view.php?idx=1784&p=1&a=2&idx=7777'));

echo '--------------------------';

function getQuery($url, $qurey)
{
    parse_str(parse_url($url)['query'], $results);
    return $results[$qurey];
}

print getQuery('https://art-map.co.kr/exhibition/view.php?idx=1784&p=1&a=2', 'idx');

// parse_str($url, $output);
// print_r($output); // Something