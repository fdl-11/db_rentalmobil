<?php
session_start();

// CONNECT DB
$conn = mysqli_connect("localhost", "root", "", "tugas_basdat");

// INSERT MOBIL
if (isset($_POST['insertmobil'])) {
	$id_mobil = $_POST['id_mobil'];
	$plat = $_POST['plat'];
	$merk = $_POST['merk'];
	$type = $_POST['type'];
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$bahan_bakar = $_POST['bahan_bakar'];

	$tambahmobil = mysqli_query($conn, "insert into mobil (id_mobil, plat, merk, type, jenis, warna, bahan_bakar) values ('$id_mobil', '$plat', '$merk', '$type', '$jenis', '$warna', '$bahan_bakar')");
	if ($tambahmobil) {
		header('location:index.php');
	} else {
		echo "gagal";
		header('location:index.php');
	}
}

//UPDATE MOBIL
if (isset($_POST['updatemobil'])) {
	$id_mobil = $_POST['id_mobil'];
	$plat = $_POST['plat'];
	$merk = $_POST['merk'];
	$type = $_POST['type'];
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$bahan_bakar = $_POST['bahan_bakar'];

	$updatembl = mysqli_query($conn, "update mobil set id_mobil='$id_mobil', plat='$plat', merk='$merk' , type='$type', jenis='$jenis', warna='$warna', bahan_bakar='$bahan_bakar' where mobil.id_mobil='$id_mobil' ");
	if ($updatembl) {
		header('location:index.php');
	} else {
		echo "gagal";
		header('location:index.php');
	}
}

//DELETE MOBIL
if (isset($_POST['deletembl'])) {
	$id_mobil = $_POST['id_mobil'];

	$deletembl = mysqli_query($conn, "delete from mobil where id_mobil='$id_mobil'");
	if ($deletembl) {
		header('location:index.php');
	} else {
		echo "gagal";
		header('location:index.php');
	}
}

//INSERT PEMINJAM
if (isset($_POST['insertpmj'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$addpmj = mysqli_query($conn, "insert into peminjam (nik, nama, jenis_kelamin, alamat, no_telp) values ('$nik', '$nama', '$jenis_kelamin', '$alamat', '$no_telp')");
	if ($addpmj) {
		header('location:peminjam.php');
	} else {
		echo "gagal";
		header('location:peminjam.php');
	}
}

//UPDATE PEMINJAM
if (isset($_POST['updatepmj'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$updatepeminjam = mysqli_query($conn, "update peminjam set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' where peminjam.nik='$nik' ");
	if ($updatepeminjam) {
		header('location:peminjam.php');
	} else {
		echo "gagal";
		header('location:peminjam.php');
	}
}

//DELETE PEMINJAM
if (isset($_POST['deletepmj'])) {
	$nik = $_POST['nik'];

	$deletepmj = mysqli_query($conn, "delete from peminjam where nik='$nik'");
	if ($deletepmj) {
		header('location:peminjam.php');
	} else {
		echo "gagal";
		header('location:peminjam.php');
	}
}

//INSERT PEGAWAI
if (isset($_POST['addpegawai'])) {
	$id_pegawai = $_POST['id_pegawai'];
	$nama_pegawai = $_POST['nama_pegawai'];
	$alamat_pgw = $_POST['alamat_pgw'];
	$id_cabang = $_POST['id_cabang'];

	$addkry = mysqli_query($conn, "insert into pegawai (id_pegawai, nama_pegawai, alamat_pgw, id_cabang) values ('$id_pegawai', '$nama_pegawai', '$alamat_pgw', '$id_cabang')");
	if ($addkry) {
		header('location:pegawai.php');
	} else {
		echo "gagal";
		header('location:pegawai.php');
	}
}

//UPDATE PEGAWAI
if (isset($_POST['updatepegawai'])) {
	$id_pegawai = $_POST['id_pegawai'];
	$nama_pegawai = $_POST['nama_pegawai'];
	$alamat_pgw = $_POST['alamat_pgw'];
	$id_cabang = $_POST['id_cabang'];

	$updatekry = mysqli_query($conn, "update pegawai set id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', alamat_pgw='$alamat_pgw', id_cabang='$id_cabang' where id_pegawai='$id_pegawai'");
	if ($updatekry) {
		header('location:pegawai.php');
	} else {
		echo "gagal";
		header('location:pegawai.php');
	}
}

//DELETE PEGAWAI
if (isset($_POST['deletepegawai'])) {
	$id_pegawai = $_POST['id_pegawai'];

	$deletekry = mysqli_query($conn, "delete from pegawai where id_pegawai='$id_pegawai'");
	if ($deletekry) {
		header('location:pegawai.php');
	} else {
		echo "gagal";
		header('location:pegawai.php');
	}
}

// INSERT SEWA
if (isset($_POST['insertsewa'])) {
	$no_sewa = $_POST['no_sewa'];
	$id_mobil = $_POST['id_mobil'];
	$nik = $_POST['nik'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$harga = $_POST['harga'];
	$denda = $_POST['denda'];


	$insertsewa = mysqli_query($conn, "insert into sewa (no_sewa, id_mobil, nik, tgl_pinjam, tgl_kembali, harga, denda) values ('$no_sewa', '$id_mobil', '$nik', '$tgl_pinjam', '$tgl_kembali', '$harga', '$denda')");

	if ($insertsewa) {
		header('location:sewa.php');
	} else {
		echo "gagal";
		header('location:sewa.php');
	}
}

// UPDATE SEWA
if (isset($_POST['updatesewa'])) {
	$no_sewa = $_POST['no_sewa'];
	$id_mobil = $_POST['id_mobil'];
	$nik = $_POST['nik'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$harga = $_POST['harga'];
	$denda = $_POST['denda'];

	$updateswa = mysqli_query($conn, "update sewa set no_sewa='$no_sewa', id_mobil='$id_mobil', nik='$nik', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', harga='$harga', denda='$denda' where sewa.no_sewa='$no_sewa'");
	if ($updateswa) {
		header('location:sewa.php');
	} else {
		echo "gagal";
		header('location:sewa.php');
	}
}

// DELETE SEWA
if (isset($_POST['deletesewa'])) {
	$no_sewa = $_POST['no_sewa'];

	$deletesewa = mysqli_query($conn, "delete from sewa where no_sewa='$no_sewa'");

	header('location:sewa.php');
}