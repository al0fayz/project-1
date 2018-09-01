<html>
	<head>
		<title>Cetak data pegawai</title>
	</head>
	<body>
	<style type="text/css">
		table{
			width: 100%;
		}
		table, th, td {
		   /* border: 1px solid black; */
		  
		}
		th, td {
		    padding: 5px;
		    text-align: left;
		   	vertical-align: middle;
		   	border-bottom: 1px solid #ddd;
		   	font-size: 12px;
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
	</style>
					<p><img src="{{ URL::asset('images/unnamed.png' ) }}" height="120px" width="90px" align="left">
					<center>
					<font size="16">PEMERINTAH KABUPATEN KARAWANG <br />KECAMATAN TELUKJAMBE TIMUR <br /></font>
					<font size="18"><b>DESA SUKALUYU </b></font><br />
					<font size="12">JL.Raya Telukjambe No.1 Dusun Kalipandan RT.003/001<br />
					KARAWANG Kode Pos 41361</font></p>
					<br>
					<hr>
					<br>
					</center>

	
                    <br>
                    <table  >
                    <thead>
                      <tr>
                        <th>No.</th>          
                        <th>NIK</th>            
                        <th>NAMA</th>                                                    
                        <th>TTL</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>STATUS</th>
                        <th>JABATAN</th>
						<th>EMAIL</th>
                        <th>NO TELP</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @if (! empty($pegawai))
                     <?php $i=1;foreach ($pegawai as $pegawai):  ?>
                      <tr>
                        <td align="center">{{$i}}</td>
                        <td align="center">{{$pegawai->nik}}</td>
                        <td>{{$pegawai->nama}}</td>
                        <td>{{$pegawai->tempat_lahir}} , {{$pegawai->tanggal_lahir }}</td>
                        <td align="center">{{$pegawai->jenis_kelamin}}</td>
                        <td align="center">{{$pegawai->agama}}</td>
                        <td align="center">{{$pegawai->status}}</td>
                        <td align="center">{{$pegawai->jabatan}}</td>
						<td align="center">{{$pegawai->email}}</td>
                        <td align="center">{{$pegawai->no_telp}}</td>
                      </tr>
                      <?php $i++; endforeach  ?>
                    @endif 
                    </tbody>                  
                  </table>
                  <br>
                  <font size="12"><p align="right" >Karawang, {{date('d-m-Y')}} </p><br /><br /><br />	                            
	              <p align="right">____________________</p><p align="right">Kepala Desa</p></font>
	              
	</body>
</html>