<?php
	//koneksi ke database
	$conn = mysqli_connect('localhost', 'root', '12345');
	mysqli_select_db('galeri');
	//membaca data dari database
	$result = mysqli_query("select * from foto");
	//menampilkan foto
	?>
	<table>
		<tr>
		<?php
		$i = 1;
		while($row = mysqli_fetch_array($result)){
		?>
			<td>
				<a href="upload/<?php echo $row['nama_file'];?>">
				<img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>
				</a>
				<br/><?php echo $row['deskripsi'];?>
			</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>