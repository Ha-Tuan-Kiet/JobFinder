@extends('layouts.home')
@section('content')
<meta name="_token" content="{{ csrf_token() }}" />
<body>
    <div class="container p-3 my-5 border " style="height:1000px;background-color:honeydew">
        <table class="table">
            <thead class="thead-light">
              <tr >
                <th scope="col" style="background-color: #fb246a;color: white">Title</th>
                <th scope="col"style="background-color: #fb246a;color: white">Email</th>
                <th scope="col"style="background-color: #fb246a;color: white">Day of birthday</th>
                <th scope="col"style="background-color: #fb246a;color: white">Created</th>
                <th scope="col"style="background-color: #fb246a;color: white">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cvs as $cv )
              <tr>
                    <td >{{$cv->title}}</td>
                    <td>{{$cv->email}}</td>
                    <td>{{$cv->birthday}}</td>
                    <th scope="row">{{$cv->created_at}}</th>
                    <td>
                      <button data-path="{{ route('/Cv/Resume/', ['id' => $cv->id]) }}"
                        class="btn-primary load-ajax-modal"
                        role="button"
                        data-toggle="modal" data-target="#dynamic-modal">
                        <i class="fas fa-eye"></i>
                     </button>

                        <div class="modal fade" id="dynamic-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content" style="width:1000px">
                              <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button onclick="location.href='/Cv/edit/{{$cv->id}}'"  type="button" class="btn-warning" style="border-radius: .2rem"><i class="fas fa-edit"></i></button>
                        <button onclick="location.href='/Cv/DeleteResume/{{$cv->id}}'" type="button" class="btn-danger" style="border-radius: .2rem"><i class="fas fa-trash-alt"></i>
                        </button>
                        <button onclick="location.href='/Cv/DownloadResume/{{$cv->id}}'" type="button" class="btn-success"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
              </tr>
              @endforeach
        </table>
        <div style="display:flex;justify-content:center">  {!! $cvs->links() !!}</div>   
        <!-- Button trigger modal -->

        <!-- Modal -->

    </div>

</body>
@endsection
@push('scripts')
<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
    }
});

$('.load-ajax-modal').click(function()
{

$.ajax({
    type : 'GET',
    url : $(this).data('path'),

    success: function(result) {
        $('#dynamic-modal div.modal-body').html(result);
    }
});
});
</script>

@endpush
