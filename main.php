<?php
class shape {
	const pi = '3.14';

	public function __call($FuncName, $Arguments) {
		if($FuncName=='Area') {
			switch(count($Arguments)) {
				case 0 : return 0 ;
				case 1 : return self::pi*$Arguments[0];
				case 2 : return $Arguments[0]*$Arguments[1];
			}
		}
	}
}
$sh = new shape();
echo $sh->Area(8,9);
echo '<br>'.$sh->Area(3);
echo '<br>'.$sh->Area(0);
?>

//Output
  72
  9.42
  0
