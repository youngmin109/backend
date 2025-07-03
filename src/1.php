<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?
    # 별 모양 찍기 
    $n = 5; // 별의 줄 수
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>"; // 줄바꿈
    }

    echo "<hr>"; // 구분선
    # 피라미드 
    $space = 0;

    for ($i = 1; $i <= $n; $i++) {
        # space
        for ($j = 0; $j; $j++) {
            echo " ";
        };

        # star
    }
    ?>

</body>
</html>