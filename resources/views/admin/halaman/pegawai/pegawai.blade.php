@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">DATA PEGAWAI</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title col-xs-2">Daftar Pegawai</h3><hr>
                </div>
                <div class="box-body">
				@if(!empty($pegawai))
                  <table id="data" class="table table-bordered table-hover">
                    <thead>
                      <tr>                        
                        <th>ID </th>
                        <th>NIK</th>                    
                        <th>Nama </th>                            
                        <th>Tanggal Lahir</th>                        
                        <th>Jenis Kelamin</th> 
						<th>Status</th>                            
                        <th>Jabatan</th>                        
                        <th>No Telp</th> 
                        <th>Aksi</th> 
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($pegawai as $item)
                      <tr>
                        <td>{{$item->id }}</td>
						<td>{{$item->nik }}</td>
                        <td>{{$item->nama }}</td>
						<td>{{$item->tanggal_lahir }}</td>
						<td>{{$item->jenis_kelamin }}</td>
						<td>{{$item->status }}</td>
						<td>{{$item->jabatan }}</td>
						<td>{{$item->no_telp }}</td>
                        <td><a href="{{{ URL::to('pegawai/'.$item->id.'/show') }}}">
                              <span class="label label-info"> Detail</span>
                              </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
				  @else
				  <p>tidak ada data.</p>
				  @endif
				  <br />
				  <br />
				  <div class ="table nav">
				  <div class="jumlah-data">
				  <strong>jumlah menu : {{ $jumlah }} </strong></div>
				<div class = "paging" >
				{{ $pegawai->links() }}
				</div>
				
				<div class="tombol-nav">
			<a href="{{{ action('pegawaicontroller@tambah') }}}" class="btn btn-success btn-sm " data-toggle="modal" title="Tambah"><i class="fa fa-plus"></i>Tambah Menu</a>
             </div>
			 </div>
			 </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div><!-- /.col -->
          </div><!-- /.row -->

@endsection
@section('script')

    <script src="{{ URL::asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection

