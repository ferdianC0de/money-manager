@extends('.layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
          <div class="card-body">
              <h4 class="box-title">Orders </h4>
          </div>
          <div class="card-body--">
              <div class="table-stats order-table ov-h">
                  <table class="table" id="post-table">
                      <thead>
                          <tr>
                              <th class="serial">#</th>
                              <th class="images">Gambar</th>
                              <th>Nomor unik</th>
                              <th>Nama</th>
                              <th>Deskripsi</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $key => $value)
                          <tr>
                              <td class="serial">{{ $loop->iteration }}</td>
                              <td class="images">
                                  <div class="round-img">
                                      <a href="#"><img class="rounded-circle" src="images/posts/{{$value->image}}" alt=""></a>
                                  </div>
                              </td>
                              <td> {{$value->id}} </td>
                              <td>  <span class="name">{{$value->name}}</span> </td>
                              <td> <span class="desc">{{ $value->description }}</span> </td>
                              <td>
                                  <span class="badge badge-complete">{{$value->status}}</span>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div> <!-- /.table-stats -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('script')
  <script src="{{ asset('js/datatables.js') }}"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#post-table').DataTable();
    } );
  </script>
@endpush
@push('res')
  <link href="{{ asset('css/datatables.css') }}" rel="stylesheet" type="text/css">
@endpush
