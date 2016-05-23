<?php
	include "koneksi/koneksi.php";
	$kueri = $con->query("SELECT * FROM checkbox");
	$hasil = $kueri->fetch_array(MYSQL_ASSOC);
	$pilih = explode(',',$hasil['checkbox']);
?>
<form method="POST" action="cekbox.php">
	<input type="checkbox" name="angka[]" value="satu" <?php in_array('satu',$pilih)? print "checked": "";?> >Satu<br>
	<input type="checkbox" name="angka[]" value="dua" <?php in_array('dua',$pilih)? print "checked": "";?> >Dua<br>
	<input type="checkbox" name="angka[]" value="tiga" <?php in_array('tiga',$pilih)? print "checked": "";?> >Tiga<br>
	<input type="checkbox" name="angka[]" value="empat" <?php in_array('empat',$pilih)? print "checked": "";?> >Empat<br>
	<input type="checkbox" name="angka[]" value="lima" <?php in_array('lima',$pilih)? print "checked": "";?> >Lima<br>
	<input type="checkbox" name="angka[]" value="enam" <?php in_array('enam',$pilih)? print "checked": "";?> >Enam<br>
	<input type="checkbox" name="angka[]" value="tujuh" <?php in_array('tujuh',$pilih)? print "checked": "";?> >Tujuh<br>
	<input type="checkbox" name="angka[]" value="delapan" <?php in_array('delapan',$pilih)? print "checked": "";?> >Delapan<br>
	<input type="checkbox" name="angka[]" value="sembilan" <?php in_array('sembilan',$pilih)? print "checked": "";?> >Sembilan<br>
	<input type="checkbox" name="angka[]" value="sepuluh" <?php in_array('sepuluh',$pilih)? print "checked": "";?> >Sepuluh<br>
	<input type="submit" name="kirim" value="Submit">
</form>
<table border="1 solid">
	<tr>
		<td>
			<?= $hasil['checkbox'];?>
		</td>
	</tr>
</table>