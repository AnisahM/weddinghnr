<html>
<body>

<?php
$str="
Nama : ".$_POST['famName']."
Nombor Telefon : ".$_POST['no']."
Jumlah Kehadiran : ".$_POST['bil']."
";



?>

<script type="text/javascript">
	if (screen.width > 768)
		setTimeout(window.location.href = "https://web.whatsapp.com/send?phone=<?php echo $_GET['no'] ?>&text=<?php echo urlencode ( $str ); ?>",700);
	else 
		setTimeout(window.location.href = "https://api.whatsapp.com/send?phone=<?php echo $_GET['no'] ?>&text=<?php echo urlencode ( $str ); ?>",700);

</script>

</body>
</html>
