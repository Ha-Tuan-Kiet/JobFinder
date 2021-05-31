@extends('layouts.home')
@section('content')
    <style>

        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        #grad1 {
            background-color: #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA)
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 204px;
            height: 104px;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Update Your CV</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" method="POST" action="{{route('Cv/update', ['id' => $cv->id]) }}">
                            @csrf
                            <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account" ><strong>Contact</strong></li>
                                    <li id="personal" ><strong>Knowledges</strong></li>
                                    <li id="payment"><strong>Qualified</strong></li>
                                    <li id="confirm"><strong>Preview</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <label><b>Title For Your CV</b></label>
                                        <input type="text" name="title" placeholder="Title CV" value="{{$cv->title}}"/>
                                        <h2 class="fs-title">Contact Information</h2>
                                        <input type="text" name="position_apply"  value="{{$cv->position_apply}}"/>
                                        <input type="number" name="phone" placeholder="Phone"  maxlength="10" value="{{$cv->phone}}"/>
                                        <input type="email" name="email" placeholder="Email" value="{{$cv->email}}" />
                                        <div class="row">
                                            <label>Gender:</label>
                                            <div class="col-lg-6 col-md-6">

                                                <select name="gender">
                                                    <option value="Male">
                                                        Male
                                                    </option>
                                                    <option value="Female">
                                                        FeMale
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="cars">Choose careers:</label>

                                            <select name="career_id" id="career_id">
{{--                                                @foreach($cv as $career)--}}
{{--                                                    <option value="{{$cv->$career}}" </option>--}}
{{--                                                @endforeach--}}
                                                <option {{$cv->career_id}}> </option>
                                            </select>
                                        </div>
                                    </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
{{--                                        <h2 class="fs-title">Knowledges</h2>--}}
                                        <label><b>Introduction:</b></label>
                                        <textarea name="introduction"  rows="3" id="introduction"  placeholder="Introduction yourself" value={!!$cv->introduction!!} ></textarea>
                                        <label><b>Education:</b></label>
                                        <textarea name="education" rows="3" id="education" placeholder="Education" value={!! $cv->education !!} ></textarea>
                                        <label><b>Experience:</b></label>
                                        <textarea name="experience"  rows="3" id="experience" placeholder="Experience" value={!! $cv->experience !!} ></textarea>
                                        <label><b>Activity:</b></label>
                                        <textarea name="activity"  rows="3" id="activity" placeholder="Activity" value={!! $cv->activity !!} ></textarea>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
{{--                                        <h2 class="fs-title">Qualified</h2>--}}


                                        <label><b>Skills:</b></label>
                                                <textarea name="skill" id="skill"  placeholder="Skill" rows="3" value={!! $cv->skill !!}   ></textarea>


                                        <label><b>Certificate</b></label>
                                                <textarea name="certificate" id="certificate" placeholder="Certificate"rows="3" value={!! $cv->certificate !!}   ></textarea>


                                        <label><b>Hobby:</b></label>
                                        <textarea name="hobby" id="hobby" placeholder="Your Hobby"  rows="3" value= {!!$cv->hobby!!}   ></textarea>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
{{--                                    <button type="submit" class="next action-button" >Submit</button>--}}
                                    <button type="button" value="Next Step" class="next action-button" >Next Step</button>
                                </fieldset>
                                <fieldset>
{{--                                    <div class="form-card">--}}
{{--                                        <h2 class="fs-title text-center">Success !</h2> <br><br>--}}
{{--                                        <div class="row justify-content-center">--}}
{{--                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>--}}
{{--                                        </div> <br><br>--}}
{{--                                        <div class="row justify-content-center">--}}
{{--                                            <div class="col-7 text-center">--}}
{{--                                                <h5>You Have Successfully Update CV</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Preview CV
                                    </button>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--       This code for preview cv--}}
    <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width:1000px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Preview CV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row justify-content-center round">
                            <div class="col-lg-10 col-md-12 ">
                                <div class="card shadow-lg card-1">
                                    <div class="card-body inner-card">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-group"><label for="first-name">First Name</label><input type="text" class="form-control" id="first-name" placeholder="Type your Name"> </div>
                                                <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input type="text" class="form-control" id="Mobile-Number" placeholder=""> </div>
                                                <div class="form-group"> <label for="inputEmail4">Project Type</label> <select class="form-control">
                                                        <option>Web Design</option>
                                                        <option>Blockchain</option>
                                                        <option>ML</option>
                                                    </select> </div>
                                                <div class="form-group"> <label for="time">Maximum time for the project</label> <input type="text" class="form-control" id="time" placeholder=""> </div>
                                                <div class="form-group"><label for="skill">Required Skills</label> <input type="text" class="form-control" id="skill" placeholder=""> </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-group"> <label for="last-name">Last Name</label> <input type="text" class="form-control" id="last-name" placeholder=""> </div>
                                                <div class="form-group"> <label for="phone">Email</label> <input type="email" class="form-control" id="email" placeholder=""> </div>
                                                <div class="form-group"> <label for="Evaluate Budget">Evaluate Budget</label> <input type="text" class="form-control" id="Evaluate Budget" placeholder=""> </div>
                                                <div class="form-group"> <label for="Company-Name">Company Name</label> <input type="text" class="form-control" id="Company-Name" placeholder=""> </div>
                                                <div class="form-group"> <label for="inputEmail4">Country</label> <select class="form-control">
                                                        <option>India</option>
                                                        <option>China</option>
                                                        <option>UK</option>
                                                    </select></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function(){

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

//Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
                next_fs.show();
//hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
// for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $(".previous").click(function(){

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

//Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
                previous_fs.show();

//hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
// for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function(){
                return false;
            })

        });
    </script>
@endpush
