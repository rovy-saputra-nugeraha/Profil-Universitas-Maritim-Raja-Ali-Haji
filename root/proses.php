<?php
include '../lib/db/dbconfig.php';
	if (isset($_POST['add_pbXia1Zasww12Q'])) {
		$query = $conn->query("SELECT*FROM user");
		$id = $query->num_rows+1;
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, sha1($_POST['pwd']));
		$nama = mysqli_real_escape_string($conn, $_POST['nama']);
		$level = "pb";
		
		$sql_user = "INSERT INTO user (id_user,
			email_user,
			pwd_user,
			level_user) VALUES(?,
			?,
			?,
			?)";
		$sql_detail = "INSERT INTO detail_pb (id_user,
			name_user) VALUES(?,
			?)";
		$cek =$conn->query("SELECT*FROM user WHERE email_user='$email'")->num_rows;
		if ($email==="" || $pwd==="" || $nama ==="") {
			header("location:../root/add_pb.php?st=4");
		} else {
			if ($cek==0) {
				if ($statement = $conn->prepare($sql_user) AND $statement1 = $conn -> prepare($sql_detail)) {
						$statement->bind_param(
							"isss", $id, $email, $pwd, $level
							);
						$statement1->bind_param(
							"is", $id, $nama
							);
						if ($statement->execute() && $statement1->execute()) {
							header("location:../root/add_pb.php?st=1");
						} else {
							header("location:../root/add_pb.php?st=2");
						}
				}
			} else {
				header("location:../root/add_pb.php?st=3");
			}
		}
		$conn->close();
	} else {
		echo "<script>window.alert('Waaahh.. Jangan Begitu ya !! ');window.location=('../home');</script>";
	}

 ?>