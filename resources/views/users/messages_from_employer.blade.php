@extends('layouts.home')
@section('content')
<div class="container mt-50" style="height:500px">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <p style=" font-size: xx-large;font-weight:bold;"> Messages From Employer</p>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="" style="background-color:#0065d1;color:white;">
          <tr>
            <th scope="col">Title</th>
            <th scope="col">From</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($messages as $message)
        <tbody>
            <tr>
                <th scope="row">{{$message->title}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->created_at}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button data-path="{{ route('/Cv/showMessages_detail', ['id' => $message->id]) }}" 
                        class="btn-primary load-ajax-modal" 
                        role="button" 
                        data-toggle="modal" data-target="#dynamic-modal">
                        <i class="fas fa-eye"></i>
                     </button>

                        <div class="modal fade" id="dynamic-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content" style="width:1000px">
                              <div class="modal-header">
                                <h5 class="modal-title">Message from employer</h5>
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
                        <button type="button" class="btn-danger">
                            <a onclick="return confirm('Are you sure?')" href="{{route('/Cv/showMessages_delete',['id'=>$message->id])}}">
                                <i class="fas fa-times">
                                </i>
                            </a>
                        </button>
                    
                </td>
        </tbody>
        @endforeach
               
    </table>
    <div style="display:flex;justify-content:center">  {!! $messages->links() !!}</div>   
</div>
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