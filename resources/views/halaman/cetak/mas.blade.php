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
					<center><font size="14"><b><u>SURAT KETERANGAN DOMISILI PENDUDUK</u></b></font><br />
					<font size="12"><b>Nomor:{{ $mas->domisili->no_doc }} </b></font>
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
                                  <td>Agama</td><td>: {{ $mas->agama }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Status</td><td>: {{ $mas->status }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Pekerjaan</td><td>: {{ $mas->pekerjaan }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Alamat Asal</td><td>: {{ $mas->alamat }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Alamat Domisili</td><td>: {{ $mas->domisili->alamat_domisili }}</td>                                  
                                 </tr>
                              </tbody>
                            </table><br />
                        <p><font size="2">Bahwa yang bersangkutan adalah benar berdomisili di Desa Sukaluyu Kecamatan Teluk jambe Timur 
						Kabupaten Karawang , sebagaimana alamat tersebut diatas.</font></p>
						<p><font size="2">Surat Keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya. </font></p>
                         <p><font size="2">Surat Keterangan ini berlaku sampai dengan tanggal          :</font><font size="3"><b>{{date('d-m-Y',strtotime('+6month'))}} </b></font></p>
						<p><font size="2">Demikian kami sampaikan, agar pihak yang berkepentingan maklum adanya.</font></p>
                    <br>               
                  <br>
				  @endforeach
				    <table >
				  <tbody><tr><td>Tanda Tangan Ybs,</td><td></td><td>Di buat di :Sukaluyu <br />Karawang, {{date('d-m-Y')}} </td></tr>
				  <tr><td><br /><br /><br /><br /><br /></td><td ><u>Photo 3x4</u></td><td><br /><br /><br /><br /><br /></td></tr>
				  <tr><td><u>{{ $mas->nama }} </u></td><td></td><td><u>Kepala Desa</u></td></tr>
				  </tbody>
				  </table>
				 
	</body>
</html>