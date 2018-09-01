@extends('admin.layout.master')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Administrator</li>
          </ol>
@stop
@section('content')
          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Master User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				@if(!empty($user))
                  <table id="dataMahasiswa" class="table table-bordered table-hover">
                    <thead>
                      <tr>                        
                        <th>ID</th>
                        <th>NAMA LENGKAP</th>
                        <th>EMAIL</th>
                        <th>NO TELP</th>                    
                        <th>LEVEL</th>                            
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $item)
					  <tr>
                        <td>{{$item->id }}</td>
						<td>{{$item->nama }}</td>
                        <td>{{$item->email }}</td>
						<td>{{$item->no_telp }}</td>
						<td>{{$item->level }}</td>
						<td><a href="{{{ URL::to('user/'.$item->id.'/detail') }}}">
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
				  <strong>jumlah  : {{ $jumlah }} </strong></div>
				<div class = "paging" >
				{{ $user->links() }}
				</div>
				
				<div class="tombol-nav">
			<a href="{{{URL::to('/register')}}}" class="btn btn-success btn-sm " data-toggle="modal" title="Tambah"><i class="fa fa-plus"></i>Tambah User</a>
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

