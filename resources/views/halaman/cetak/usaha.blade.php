<html>
	<head>
		<title>Cetak </title>
	</head>
	<body>
	<style type="text/css">
		table{
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			width: 100%;
			
		}
		table, th, td {
		margin-left: 20px;
		  
		}
		th, td {
			width:10px;
		    text-align: left;
		   	vertical-align: middle;
		   	font-size: 13px;
		}		
		th {
			border-top: 1px solid #ddd;
			height: 20px;
			background-color: #ddd;
			text-align : center;
		}
		p img{
		margin-left: 40px;
		margin-right: 0px;
		}
		p{
		margin-left: 20px;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		padding: 5px;
		}
	</style>
					<p><img src="{{ URL::asset('images/unnamed.png' ) }}" height="110px" width="75px" align="left">
					<center>
					<font size="14">PEMERINTAH KABUPATEN KARAWANG <br />KECAMATAN TELUKJAMBE TIMUR <br /></font>
					<font size="16"><b>DESA SUKALUYU </b></font><br />
					<font size="2">JL.Raya Telukjambe No.1 Dusun Kalipandan RT.003/001<br />
					KARAWANG Kode Pos 41361</font></p>
					<br>
					<hr>
					<br>
					</center>
					 @foreach($mas as $mas )
					<center><font size="14"><b><u>SURAT KETERANGAN USAHA</u></b></font><br />
					<font size="12"><b>Nomor:{{ $mas->usaha->no_doc }} </b></font>
					</center>
					       <br />
						   
						   <p><font size="2">Kepala Desa Sukaluyu, dengan ini menerangkan bahwa:</font></p>
                            <table >
                                <tbody>
                                <tr> 
                                  <td>Nama</td><td>: {{ $mas->nama }}</td>                                  
                                 </tr>
								<tr> 
                                  <td>No.Ktp</td><td>: {{ $mas->nik }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Tempat, Tanggal Lahir</td><td>: {{ $mas->tempat_lahir }}, {{ $mas->tanggal_lahir }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Jenis Kelamin</td><td>: {{ $mas->jenis_kelamin }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Status /Agama</td><td>: {{ $mas->status }} / {{ $mas->agama }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Pekerjaan</td><td>: {{ $mas->pekerjaan }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Alamat Asal</td><td>: {{ $mas->alamat }}</td>                                  
                                 </tr>
                              </tbody>
                            </table><br />
                        <p><font size="2">Bahwa yang bersangkutan adalah benar warga Desa Sukaluyu , sebagaimana tersebut diatas.</font></p>
						<p><font size="2">Berdasarkan Surat Keterangan RT/RW Setempat, bahwa nama tersebut diatas adalah benar memiliki usaha berupa:</font></p>
                     <table >
                                <tbody>
                                <tr> 
                                  <td>Klasifikasi Usaha</td><td>: {{ $mas->usaha->klasifikasi }}</td>                                  
                                 </tr>
								  <tr> 
                                  <td>Sejak Tahun</td><td>: {{ $mas->usaha->tahun }}</td>                                  
                                 </tr>
								  <tr> 
                                  <td>Alamat Usaha</td><td>: {{ $mas->usaha->alamat_usaha }}</td>                                  
                                 </tr>
								  <tr> 
                                  <td>Berlaku Sampai</td><td>: {{date('d-m-Y',strtotime('+6month'))}}</td>                                  
                                 </tr>
						</tbody>
					</table><br />
				  @endforeach
				  <p><font size="2">Demikian Surat keterangan usaha ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.</font></p><br /><br />
				    <p align="right"><font size="2">Di buat di :Sukaluyu <br />Karawang, {{date('d-m-Y')}} <br /><br /><br /><br /><u>Kepala Desa </u></font></p>
	</body>
</html>