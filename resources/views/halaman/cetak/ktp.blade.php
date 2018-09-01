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
					<center><font size="14"><b><u>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</u></b></font><br />
					<font size="12"><b>Nomor:{{ $mas->ktp->no_doc }} </b></font>
					<p><img src="{{ URL::asset('images/'.$mas->ktp->foto ) }}" height="110px" width="75px"  alt="pas photo 2x3"></p>
					</center>
					       <br />
						   
						   <p><font size="2">Kepala Desa Sukaluyu, dengan ini menerangkan bahwa:</font></p>
                            <table >
                                <tbody>
								<tr> 
                                  <td>No KK</td><td>: {{ $mas->ktp->no_kk }}</td>                                  
                                 </tr>
                                <tr> 
                                  <td>Nama Lengkap</td><td>: {{ $mas->nama }}</td>                                  
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
                                  <td>Status</td><td>: {{ $mas->status }}</td>                                  
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
								 <tr> 
                                  <td>Kewarganegaraan</td><td>: {{ $mas->ktp->kewarganegaraan }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Nama Ayah</td><td>: {{ $mas->ktp->ayah }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Nama Ibu</td><td>: {{ $mas->ktp->ibu }}</td>                                  
                                 </tr>
                              </tbody>
                            </table><br />
                        <p><font size="2">Dengan ini menyatakan bahwa data yang kami berikan benar adanya Dan bertanggung jawab sepenuhnya atas semuanya.</font></p>
				  <table >
                         <tbody>
                                <tr> 
                                  <td>Pemohon</td><td>Ketua RT</td><td>Disetuji <br /> camat</td><td>Mengetahui <br />Di buat di :Sukaluyu <br />Karawang, {{date('d-m-Y')}}<br />Kepala Desa</td>                                  
                                 </tr>
								 <tr><td><br /><br /><br /><br /></td></tr>
								  <tr> 
                                  <td><u>({{ $mas->nama }})</u></td><td>(---------------------)</td><td>(---------------------)</td><td>(---------------------)</td>                                  
                                 </tr> 
						</tbody>
					</table><br />
					@endforeach
	</body>
</html>