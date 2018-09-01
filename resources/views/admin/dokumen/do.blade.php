@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">DOKUMEN</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title col-xs-2">Dokumen Domisili</h3><hr>
                </div>
                <div class="box-body">
				@if(!empty($mas))
                  <table id="data" class="table table-bordered table-hover">
                    <thead>
                      <tr>                        
                        <th>Nik</th>
                        <th>Nama </th>                    
                        <th>Alamat </th>                            
                        <th>No Telp</th>                        
                        <th>hapus</th> 
                        <th>Cetak</th> 
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($mas as $data)
                      <tr>
                        <td>{{$data->nik }}</td>
						<td>{{$data->nama }}</td>
						<td>{{$data->alamat }}</td>
						 <td>{{$data->domisili->no_telp }}</td>
                        <td><a href="{{{ action('mascontroller@hapus',[$data->id]) }}}">
                              <span class="label label-danger" onclick="return confirm('Anda yakin akan menghapus ini?')"> Hapus</span>
                              </a>
                        </td>
						<td><a href="{{{ URL::to('domisili/'.$data->id.'/cetak') }}}">
                              <span class="label label-info"> Cetak</span>
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
			 </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div><!-- /.col -->
          </div><!-- /.row -->

@endsection
@section('script')

    <script src="{{ URL::asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection

