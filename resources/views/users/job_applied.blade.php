@extends('layouts.home')
@section('content')

<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="John Doe">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-index</title>
<style>
    body {
        background-color:#fafafa;
    }
    .application_cancel{
    background-color: rgba(236, 240, 241, 0.5);
    pointer-events: none;
    width: 100%;
    }
</style>
</head>
<body>
    <div class="container" style="margin-top:50px;height:500px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <p style=" font-size: xx-large;font-weight:bold;"> Job Applied </p>
            </div>
        </div>
        <table class="table table-hover">
            <thead class="" style="background-color:#0065d1;color:white;">
              <tr>
                <th scope="col">Position</th>
                <th scope="col">To</th>
                <th scope="col">Created</th>  
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach ($candidates as $candidate )     
            <tbody class="{{$candidate->is_applying==1 ?'':'application_cancel'}}">
              <tr>
                <td>{{$candidate->position}}</td>
                <td>{{$candidate->company_name}}</td>
                <td>{{$candidate->created_at}}</td>
                @if ($candidate->is_applying==1)
                <td><i class="fas fa-circle" style="color: forestgreen;"></i></td>            
                @else
                <td><i class="far fa-times-circle"></i></td> 
                @endif
                <td>
                  <button onclick="location.href='/CV/job_applied_detail/{{$candidate->id}}'" type="button" class="btn-primary" style="border-radius:.2rem;"><i class="fas fa-eye"></i></button>
                  <button data-path="{{ route('/Cv/Resume/', ['id' => $candidate->cv_id]) }}" 
                    class="btn-info load-ajax-modal" 
                    role="button" 
                    data-toggle="modal" data-target="#dynamic-modal">
                    <i class="fas fa-file"></i>
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
                    <button onclick="location.href='/Cv/job_applied_cancel/{{$candidate->id}}'" type="button" class="btn-danger" style="border-radius:.2rem;"><i class="fas fa-times"></i></button>
                </td>
              </tr>
            </tbody>        
            @endforeach           
          </table>
    </div>

</body>

</html>
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




