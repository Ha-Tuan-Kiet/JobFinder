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

{{-- <script src="{{asset('adminform/js/4n2NXumNjtg5LPp6VXLlDicTUfA.js')}}"></script><link rel="apple-touch-icon" href="{{asset('adminform/images/apple-touch-icon.html')}}"> --}}
<link rel="stylesheet" href="{{asset('adminform/css/style.css')}}">
<style>
    body {
        background-color:#fafafa;
    }
</style>
</head>
<body>

<header class="header">

<div class="top_bar background-color-orange">
  <div class="top_bar_container">
  <div class="container">
  <div class="row">
  <div class="col">
  <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
  <ul class="top_bar_contact_list">
  <li>
  <i class="fa fa-phone coll" aria-hidden="true"></i>
  <div class="contact-no">0123 4567 8912</div>
  </li>
  <li>
  <i class="fa fa-envelope coll" aria-hidden="true"></i>
  <div class="email"><a href="https://demo.technosarjan.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3a6bba2aeb3afa683a9aca1b7a6ada7eda0acae">[email&#160;protected]</a></div>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>

<div class="header_container background-color-orange-light">
        @include('admin.adminnav') 
</div>
</header>
<div class="container" style="margin-top:100px;height:500px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">

    <div class="row">
        <div class="col-lg-6 col-md-6">
            <p style=" font-size: xx-large;font-weight:bold;"> Manage Job Application </p>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="" style="background-color:#0065d1;color:white;">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email/Phone</th>
            <th scope="col">Position</th>
            <th scope="col">Created</th>
            <th scope="col">Apply</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($candidates as $candidate )
        <tbody>
          <tr>
            <th scope="row">{{$candidate->name}}</th>
            <td>{{$candidate->email}}<br>{{$candidate->phone}}</td>
            <td>{{$candidate->position}}</td>
            <td>{{$candidate->created_at}}</td>
            @if ($candidate->is_applying==1)
            <td><i class="fas fa-circle" style="color: forestgreen;"></i></td>            
            @else
            <td><i class="far fa-times-circle"></i></td> 
            @endif
            
            @if ($candidate->is_active ==1)
            <td><i class="fas fa-check-circle" style="color:green"></i></td>            
            @else
            <td><i class="far fa-circle" style="opacity:0.5"></i></td> 
            @endif
            <td>
              <button onclick="location.href='/admin/application_details/{{$candidate->id}}'" type="button" class="btn-primary" style="border-radius:.2rem;"><i class="fas fa-eye"></i></button>
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
                <button onclick="location.href='#'" type="button" class="btn-danger" style="border-radius:.2rem;"><i class="fas fa-trash-alt"></i></button>
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