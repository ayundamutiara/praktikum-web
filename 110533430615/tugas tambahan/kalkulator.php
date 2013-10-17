<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Kalkulator</title>
	</head>
	

	<body>
	<form name="hasil" action="" method="post" >
		<input type="text" nama="angka1" />
		
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select> <DOCTYPE html>
<html>
	<head>
		<title>KALKULATOR</title>
	</head>
	<body>
		
			<?php 
				$angka_1 = $_POST ['angka_1'];
				$angka_2 = $_POST ['angka_2'];
				$operator = $_POST ['operator'];
				$hasil = 0;

				if ($operator == 'tambah'){
					$hasil = $angka_1 + $angka_2;
				}elseif($operator == 'kurang'){
					$hasil = $angka_1 - $angka_2;
				}elseif($operator == 'kali'){
					$hasil = $angka_1 * $angka_2;
				}elseif($operator == 'bagi'){
					$hasil = $angka_1 / $angka_2;
				}
				
			?>



		<div>
			<h1>KALKULATOR</h1>
			<br/>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				angka 1
				<input type="text"  name="angka_1" value="<?php  echo isset ($_POST['angka_1']) ? $_POST['angka_1']:''; ?>">
				<select name="operator">
					<option value="tambah"
					<?php
						if ($_POST['operator']=='tambah'){
							echo 'selected="selected"';
						}
					?>
					>+</option>
					<option value="kurang"
					<?php
						if ($_POST['operator']=='kurang'){
							echo 'selected="selected"';
						}
					?>

>-</option>
					<option value="kali"
					<?php
						if ($_POST['operator']=='kali'){
							echo 'selected="selected"';
						}
					?>

>*</option>
					<option value="bagi"
					<?php
						if ($_POST['operator']=='bagi'){
							echo 'selected="selected"';
						}
					?>

>:</option>
				</select>
				angka 2
				<input type="text"  name="angka_2" value="<?php  echo isset ($_POST['angka_2']) ? $_POST['angka_2']:''; ?>">
				<input type="submit" value="=">
				<input type="text"  name="hasil" value="<?php echo isset ($hasil) ? ($hasil) :''; ?>">
			</form>



		</div>
	</body>
</html>
		<input type="text" nama="angka2" />
		<input type="submit" value="=" />	
	<textarea>	
	<?php
		if ($_POST['submit']){
			$angka1=$_POST['angka1'];
			$angka2=$_POST['angka2'];
			$operator=$_POST['operator'];
			if ($operator=='+') {
				echo $hasil=$angka1+$angka2; }
			elseif ($operator=='-') {
				echo $hasil=$angka1-$angka2; }
			elseif ($operator=='*') {
				echo $hasil=$angka1*$angka2; }
			elseif ($operator=='/') {
				echo $hasil=$angka1/$angka2; }			
		}
			?> </textarea>
	</form>
	</body>
</html>