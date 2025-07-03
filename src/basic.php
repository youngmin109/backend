
<?php

    // 함수 정의
    function bar($arg) 
    {
        foreach ($arg as $key => $value) {
            echo "{$key} => {$value}<br>";
        }
    }

    $foo = [1, 2, 3];
    bar($foo);

    // 생명주기
    // 자바 -> 블럭 기반, python, php -> 함수 기반

    $bar = "hello world"; // 변수 선언

    function foo() {
        // global $bar; // 전역 변수 사용
        // print $bar; // 전역 변수 출력
        print $GLOBALS['bar'];
        print "<br>";
        print $_GET['foo'];
        print "<br>";
        print $_GET['sign'];
    }
    foo(); // 함수 호출
?>