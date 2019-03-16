<?php

	$summa = false;
	$ab = false;
    $x = false;
    $y = false;
    if (isset($_POST['sum'])) {
        $ab = $_POST['ab']?? false;
    	$arr = str_split($ab);
    	$a = $arr[0]?? false;
        $b = $_POST[1]?? false;
        if ($a !== false && $b !== false && is_numeric($a) && is_numeric($b)) $summa = $a + $b;
    }

?>

<form name="sum" action="index.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="ab" />
    </p>
	<p>
        <input type="text" name="вывод" value="<=$summa>"/>
    </p>
    <p>
        <input type="submit" name="sum" value="Сложить" />
    </p>
</form>