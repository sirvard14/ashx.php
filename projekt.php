<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $zangvac=["a","b",1,2,5,7];
    function arajin_tiv($zangvac){
        for ($i = 0; $i < count($zangvac); $i++) {
            if(is_numeric($zangvac[i])) return $zangvac[$i];
        }
            return "tiv chka";
    }
echo arajin_tiv($zangvac);
?>
</body>


<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arajin tiv</title>
</head>
<body>
    <?php
    $zangvac = ["a", "b", "c", 5, 7, 8];
    $erkrord_zangvac = [3, 5, 9];

   new  function arajin_tiv($zangvac, $erkrord_zangvac) {
        for ($i = 0; $i < count($zangvac); $i++) {
            if (is_numeric($zangvac[$i]) && in_array($zangvac[$i], $erkrord_zangvac)) {
                return $zangvac[$i];
            }
        }
        return "tiv chka";
    }

    echo arajin_tiv($zangvac, $erkrord_zangvac);
    ?>
</body>
</html>
