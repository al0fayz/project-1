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
		td {
			width:85px;
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
					<center><font size="14"><b><u>SURAT KETERANGAN DOMISILI PERUSAHAAN</u></b></font><br />
					<font size="12"><b>Nomor:{{ $mas->domisili_usaha->no_doc }} </b></font>
					</center>
					       <br />
						   
						   <p><font size="2">Kepala Desa Sukaluyu Kecamatan Telukjambe Timur Kabupaten Karawang dengan ini menerangkan bahwa:</font></p>
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
                                  <td>Agama</td><td>: {{ $mas->agama }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Pekerjaan</td><td>: {{ $mas->pekerjaan }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Alamat </td><td>: {{ $mas->alamat }}</td>                                  
                                 </tr>
                              </tbody>
                            </table><br />
                        <p><font size="2">Benar pada saat ini mempunyai /membuka /memiliki sebagaimana tersebut dibawah ini:</font></p>
						<table >
                                <tbody>
                                <tr> 
                                  <td>Nama Perusahaan</td><td>: {{ $mas->domisili_usaha->nama_usaha }}</td>                                  
                                 </tr>
								<tr> 
                                  <td>Penanggung Jawab</td><td>: {{ $mas->domisili_usaha->penanggung_jawab }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Jenis Kegiatan/Klasifikasai</td><td>: {{ $mas->domisili_usaha->jenis_kegiatan }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Luas Keseluruhan</td><td>: {{ $mas->domisili_usaha->luas }} M^</td>                                  
                                 </tr>
								  <tr> 
                                  <td>Luas Ruang Usaha</td><td>: {{ $mas->domisili_usaha->luas_ruang }} M^</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Jumlah Karyawan</td><td>: {{ $mas->domisili_usaha->karyawan }}  Orang</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Status Bangunan </td><td>: {{ $mas->domisili_usaha->status_bangunan }}</td>                                  
                                 </tr>
								 <tr>
								<td>Alamat Perusahaan</td><td>: {{ $mas->domisili_usaha->alamat_usaha }} </td>
								</tr>
								<tr>
								<td>Ijin Mendirikan Bangunan</td><td>: Nomor</td><td>: {{ $mas->domisili_usaha->no_ijin }} </td>
								</tr>
								<tr>
								<td></td><td>: Tanggal</td><td>: {{ $mas->domisili_usaha->tanggal_ijin }} </td>
								</tr>
								<tr>
								<td>Akte Pendirian Perusahaan</td><td>: Notaris</td><td>: {{ $mas->domisili_usaha->notaris }} </td>
								</tr>
								<tr>
								<td></td><td>: Nomor</td><td>: {{ $mas->domisili_usaha->no_notaris }} </td>
								</tr>
								<tr>
								<td></td><td>: Tanggal</td><td>: {{ $mas->domisili_usaha->tanggal_notaris }} </td>
								</tr>
                              </tbody>
                            </table><br />
						
                         <p><font size="2">Surat Keterangan ini berlaku sampai dengan tanggal          :</font><font size="3"><b>{{date('d-m-Y',strtotime('+12month'))}} </b></font>
						<font size="2"><br />Demikian Surat Keterangan Domisili Perusahaan ini dibuat untuk dipergunakan Semestinya</font></p>
                    <br>               
 
				  @endforeach
				    <table >
				  <tbody><tr><td>Tanda Tangan Ybs,</td><td>Di buat di :Sukaluyu <br />Karawang, {{date('d-m-Y')}} </td></tr>
				  <tr><td><br /><br /><br /><br /><br /></td><td><br /><br /><br /><br /><br /></td></tr>
				  <tr><td><u>{{ $mas->nama }} </u></td><td><u>Kepala Desa</u></td></tr>
				  </tbody>
				  </table>
				 
	</body>
</html>