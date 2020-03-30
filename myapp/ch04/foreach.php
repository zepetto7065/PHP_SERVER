<?php

$fruits=[
    "apple"=>"사과",
    "banana"=>"바나나",
    "strawbarry"=>"딸기"
];

echo "값만 사용 <br/>" ;

foreach($fruits as $fruit)
{
    echo $fruit;
}

echo "키와 값 모두 사용";
foreach($fruits as $eng => $kor)
{
    echo "{$eng} => {$kor} <br/>";
}


?>