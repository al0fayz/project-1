<html>
	<head>
		<title>Cetak </title>
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
					        @foreach($desa as $desa)
                            <table  >
                                <tbody>
                                <tr> 
                                  <td>NO</td><td>{{ $desa->id }}</td>                                  
                                 </tr>
								<tr> 
                                  <td>Nama Desa</td><td>{{ $desa->nama_desa }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Alamat</td><td>{{ $desa->alamat }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>No Telp</td><td>{{ $desa->no_telp }}</td>                                  
                                 </tr>
								 <tr> 
                                  <td>Kode Pos</td><td>{{ $desa->kode_pos }}</td>                                  
                                 </tr>
                              </tbody>
                            </table>
                           
                                       
                    <br>               
                  </table>
                  <br>
				  @endforeach
                  <font size="12"><p align="right" >Karawang, {{date('d-m-Y')}} </p><br /><br /><br />	                            
	              <p align="right">____________________</p><p align="right">Kepala Desa</p></font>
	</body>
</html>