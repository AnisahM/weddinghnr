<html>
<body>

<?php
$str="
Nama : ".$_POST['famName']."
Jumlah Kehadiran : ".$_POST['bil']."
";



?>

<script type="text/javascript">
	if (screen.width > 768)
		setTimeout(window.location.href = "https://web.whatsapp.com/send?phone=60145599160&text=",700);
	else 
		setTimeout(window.location.href = "https://api.whatsapp.com/send?phone=60145599160&text=",700);

</script>

</body>
</html>
