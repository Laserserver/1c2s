<?php
    echo "</br>";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {  
        $H = $_POST['H']; 
        $A = $_POST['A']; 
			if (preg_match('/^\d+(\.\d+)?$/', $H) && preg_match('/^\d+(\.\d+)?$/', $A)){
				$H = $H * 1.0;
                $A = $A * 1.0;
				if ($H != 0 && $A != 0){
				    echo "Объем пирамиды высотой ", $H, " равен ", $A * $A * $H / 3;}
				else {
					echo "Объем такой пирамиды равен 0.";
				}
			}
			else {
                echo "Неверный формат числа.";
			}
    }
    ?>