<body>
<form action="" method="POST">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Input">

</form>

<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo"Nama Anda : <b>$nama</b>";
}
?>
</body>