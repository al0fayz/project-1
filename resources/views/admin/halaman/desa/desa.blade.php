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
				@if(!empty($desa))
                  <table id="data" class="table table-bordered table-hover">
                    <thead>
                      <tr>                        
                        <th>ID </th>
                        <th>Nama Desa</th>                    
                        <th>Alamat </th>                            
                        <th>No Telp</th>                        
                        <th>Kode Pos</th> 
                        <th>Aksi</th> 
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($desa as $item)
                      <tr>
                        <td>{{$item->id }}</td>
						<td>{{$item->nama_desa }}</td>
                        <td>{{$item->alamat }}</td>
						<td>{{$item->no_telp }}</td>
						<td>{{$item->kode_pos }}</td>
                        <td><a href="{{{ URL::to('desa/'.$item->id.'/detail') }}}">
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
			 </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div><!-- /.col -->
          </div><!-- /.row -->

@endsection
@section('script')

    <script src="{{ URL::asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection

