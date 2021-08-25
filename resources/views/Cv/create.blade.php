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
            background: #252b60;
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
            box-shadow: 0 0 0 2px white, 0 0 0 3px #252b60
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
        #msform .action-button-previous:focus
        {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
        }

        #msform .action-button-submit,
        #msform .action-button-preview {
            width: 100px;
            background: #252b60;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button-submit:hover,
        #msform .action-button-submit:focus
        {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #fb246a
        }

        #msform .action-button-preview:hover,
        #msform .action-button-preview:focus
        {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #252b60
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
            margin-bottom: 20px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 33%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f19d"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f0a3"
        }

        /*#progressbar #confirm:before {*/
        /*    font-family: FontAwesome;*/
        /*    content: "\f00c"*/
        /*}*/



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
            background: #252b60
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
        .modal-backdrop {
            /* position: fixed; */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
        }


        /*    CSS RESUME*/

        .bold {
            font-weight: 700;
            font-size: 20px;
            text-transform: uppercase;
            color: #28395a;
        }

        .semi-bold {
            font-weight: 500;
            font-size: 16px;
        }

        .resume {
            width: 900px;
            height: auto;
            display: flex;
            margin: 20px auto;
        }

        .resume .resume_left {
            width: 300px;
            background: #0bb5f4;
        }

        .resume .resume_left .resume_profile {
            width: 100%;
            height: 300px;
        }

        .resume .resume_left .resume_profile img {
            width: 100%;
            height: 100%;
        }

        .resume .resume_left .resume_content {
            padding: 0 25px;
            background-color: powderblue;
        }

        .resume .title {
            margin-bottom: 20px;
        }

        .resume .resume_left .bold {
            color:  #28395a;
        }

        .resume .resume_left .regular {
            color:  #28395a;
        }

        .resume .resume_item {
            padding: 25px 0;
            border-bottom: 2px solid #b1eaff;
        }

        .resume .resume_left .resume_item:last-child,
        .resume .resume_right .resume_item:last-child {
            border-bottom: 0px;
        }

        .resume .resume_left ul li {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }

        .resume .resume_left ul li:last-child {
            margin-bottom: 0;
        }

        .resume .resume_left ul li .icon {
            width: 35px;
            height: 35px;
            background: #fff;
            color:  #28395a;
            border-radius: 50%;
            margin-right: 15px;
            font-size: 16px;
            position: relative;
        }

        .resume .icon i,
        .resume .resume_right .resume_hobby ul li i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .resume .resume_left ul li .data {
            color:   #28395a;
        }

        .resume .resume_left .resume_skills ul li {
            display: flex;
            margin-bottom: 10px;
            color:  #28395a;
            justify-content: space-between;
            align-items: center;
        }

        .resume .resume_left .resume_skills ul li .skill_name {
            width: 25%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress {
            width: 60%;
            margin: 0 5px;
            height: 5px;
            background: #009fd9;
            position: relative;
        }

        .resume .resume_left .resume_skills ul li .skill_per {
            width: 15%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress span {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #fff;
        }

        .resume .resume_left .resume_social .semi-bold {
            color: #fff;
            margin-bottom: 3px;
        }

        .resume .resume_right {
            width: 600px;
            background: #fff;
            padding: 30px;
        }

        .resume .resume_right .bold {
            color:  #28395a;
        }

        .resume .resume_right .resume_about ul,
        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_education ul {
            padding-left: 40px;
            overflow: hidden;
        }

        .resume .resume_right ul li {
            position: relative;
        }

        /*.resume .resume_right ul li .date {*/
        /*    font-size: 16px;*/
        /*    font-weight: 500;*/
        /*    margin-bottom: 15px;*/
        /*}*/

        /*.resume .resume_right ul li .info {*/
        /*    margin-bottom: 20px;*/
        /*}*/

        /*.resume .resume_right ul li:last-child .info {*/
        /*    margin-bottom: 0;*/
        /*}*/
        .resume .resume_right .resume_hobby ul li:before,
        .resume .resume_right .resume_about ul li:before,
        .resume .resume_right .resume_work ul li:before,
        .resume .resume_right .resume_education ul li:before {
            content: "";
            position: absolute;
            top: 5px;
            left: -25px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            /*border: 2px solid #0bb5f4;*/
        }
        .resume .resume_right .resume_hobby ul li:after,
        .resume .resume_right .resume_about ul li:after,
        .resume .resume_right .resume_work ul li:after,
        .resume .resume_right .resume_education ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 115px;
            background: #0bb5f4;
        }

        .resume .resume_right .resume_hobby ul {
            display: flex;
            justify-content: space-between;
        }

        /*.resume .resume_right .resume_hobby ul li {*/
        /*    width: 80px;*/
        /*    height: 80px;*/
        /*    border: 2px solid #0bb5f4;*/
        /*    border-radius: 50%;*/
        /*    position: relative;*/
        /*    color: #0bb5f4;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li i {*/
        /*    font-size: 30px;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li:before {*/
        /*    content: "";*/
        /*    position: absolute;*/
        /*    top: 40px;*/
        /*    right: -52px;*/
        /*    width: 50px;*/
        /*    height: 2px;*/
        /*    background: #0bb5f4;*/
        /*}*/

        .resume .resume_right .resume_hobby ul li:last-child:before {
            display: none;
        }
    </style>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Create Your CV</strong></h2>
                    <p>Fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" method="POST" action="{{route('/Cv/create')}}">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account" ><strong>Contact</strong></li>
                                    <li id="personal" ><strong>Knowledges</strong></li>
                                    <li id="payment"><strong>Qualified</strong></li>
{{--                                    <li id="confirm"><strong>Preview</strong></li>--}}
                                </ul> <!-- fieldsets -->
                                <fieldset id="filed1">
                                    <div class="form-card" >
                                        <label for="text"><b>Title For Your CV</b></label>
                                        <input type="text" id="title" name="title" placeholder="Title CV" />
                                        <label><b>Contact Information</b></label>
                                        <input type="text" id="position_apply" name="position_apply" placeholder="Position Apply" />
                                        <input type="number" id="phone" name="phone" placeholder="Phone"  maxlength="10"/>
                                        <input type="email" id="email" name="email" placeholder="Email"/>
                                        <div class="row">
                                            <label>Gender:</label>
                                            <div >
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
                                                @foreach($career_id as $career)
                                                    <option value="{{ $career->id }}">{{$career->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div> <input type="button" id="nextbtn" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset id="filed2">
                                    <div class="form-card">
{{--                                        <h2 class="fs-title">Knowledges</h2>--}}
                                        <label><b>Introduction:</b></label>
                                        <textarea name="introduction"  rows="3" id="introduction" placeholder="Introduction yourself"></textarea>
                                        <label><b>Education:</b></label>
                                        <textarea name="education" rows="3" id="education" placeholder="Education"></textarea>
                                        <label><b>Experience:</b></label>
                                        <textarea name="experience"  rows="3" id="experience" placeholder="Experience"></textarea>
                                        <label><b>Activity:</b></label>
                                        <textarea name="activity"  rows="3" id="activity" placeholder="Activity"></textarea>
                                    </div> <input type="button" id="nextbtn" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset >
                                    <div class="form-card">
{{--                                        <h2 class="fs-title">Qualified</h2>--}}
                                        <label><b>Skills:</b></label>
                                        <textarea name="skill" id="skill"  placeholder="Skill" rows="3"></textarea>

                                        <label><b>Certificate</b></label>
                                        <textarea name="certificate" id="certificate" placeholder="Certificate" rows="3"></textarea>


                                        <label><b>Hobby:</b></label>
                                        <textarea name="hobby" id="hobby" placeholder="Your Hobby" rows="3"></textarea>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
{{--                                    <button type="button" id="nextbtn1" value="Next Step" class="next action-button" >Next Step</button>--}}
                                    <button type="button" id="preview"  class="action-button-preview" data-toggle="modal" data-target="#exampleModalCenter">
                                        Preview CV
                                    </button>
                                    <button type="submit" style="background-color: #fb246a" class="action-button-submit" >Submit</button>
                                </fieldset>
                                <fieldset >

{{--                                    <div class="form-card">--}}
{{--                                        <h2 class="fs-title text-center">Success !</h2> <br><br>--}}
{{--                                        <div class="row justify-content-center">--}}
{{--                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>--}}
{{--                                        </div> <br><br>--}}
{{--                                        <div class="row justify-content-center">--}}
{{--                                            <div class="col-7 text-center">--}}
{{--                                                <h5>You Have Successfully Create CV</h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div> <img style="width:400px;height:400px;" src="./assets/img/CV selection.png" class="fit-image"> </div>
                                    <button type="submit"  class="action-button-submit" >Submit</button>
{{--                                    <button type="button" id="preview" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--                                        Preview CV--}}
{{--                                    </button>--}}
{{--                                    new--}}
<!-- Button trigger modal -->


                                    <!-- Modal -->


{{--                                    new--}}

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

                        <div class="resume">
                            <div class="resume_left">

                                <div class="resume_content">
                                    <div class="resume_item resume_info">

                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-map-signs"></i>
                                                </div>
                                                <div class="data" id="datatitle">

                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-mobile-alt"></i>
                                                </div>
                                                <div class="data" id="dataphone">

                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="data" id="dataemail">

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="resume_item resume_skills">
                                        <div class="title">
                                            <p class="bold">skill's</p>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="skill_name">
                                                    HTML
                                                </div>
                                                <div class="skill_progress">
                                                    <span style="width: 80%;"></span>
                                                </div>
                                                <div class="skill_per">80%</div>
                                            </li>
                                            <li>
                                                <div class="skill_name">
                                                    CSS
                                                </div>
                                                <div class="skill_progress">
                                                    <span style="width: 70%;"></span>
                                                </div>
                                                <div class="skill_per">70%</div>
                                            </li>
                                            <li>
                                                <div class="skill_name">
                                                    SASS
                                                </div>
                                                <div class="skill_progress">
                                                    <span style="width: 90%;"></span>
                                                </div>
                                                <div class="skill_per">90%</div>
                                            </li>
                                            <li>
                                                <div class="skill_name">
                                                    JS
                                                </div>
                                                <div class="skill_progress">
                                                    <span style="width: 60%;"></span>
                                                </div>
                                                <div class="skill_per">60%</div>
                                            </li>
                                            <li>
                                                <div class="skill_name">
                                                    JQUERY
                                                </div>
                                                <div class="skill_progress">
                                                    <span style="width: 88%;"></span>
                                                </div>
                                                <div class="skill_per">88%</div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="resume_right">
                                <div class="resume_item resume_about">
                                    <div class="title">
                                        <p class="bold">Introduction</p>
                                    </div>
                                    <div id="dataintroduction"></div>
                                </div>
                                <div class="resume_item resume_work">
                                    <div class="title">
                                        <p class="bold">Work Experience</p>
                                    </div>
                                    <div id="dataexperience"></div>

                                </div>
                                <div class="resume_item resume_education">
                                    <div class="title">
                                        <p class="bold">Education</p>
                                    </div>
                                    <div id="dataeducation"></div>
                                </div>
                                <div class="resume_item ">
                                    <div class="title">
                                        <p class="bold">Hobby</p>
                                    </div>
                                    <div id="datahobby"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                        <button type="button" class="btn btn-secondary" >Save changes</button>--}}
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


        // using Jquery

            $('#nextbtn').click(function(){
               var position_apply= $("#msform #position_apply ").val().trim();
                $('#datatitle').html(position_apply);
                var phone= $("#msform #phone ").val().trim();
                $('#dataphone').html(phone);
                var email= $("#msform #email ").val().trim();
                $('#dataemail').html(email);

                // var introduction = CKEDITOR.instances.introduction.getdata();
                // // $('#dataintroduction').html(introduction)


            });

            $('#preview').click(function ()
            {
                var introduction = CKEDITOR.instances.introduction.getData();
                $('#dataintroduction').html(introduction);
                var education = CKEDITOR.instances.education.getData();
                $('#dataeducation').html(education);
                var experience = CKEDITOR.instances.experience.getData();
                $('#dataexperience').html(experience);
                var activity = CKEDITOR.instances.activity.getData();
                $('#dataactivity').html(activity);

                var skill = CKEDITOR.instances.skill.getData();
                $('#dataskill').html(skill);
                var certificate = CKEDITOR.instances.certificate.getData();
                $('#dataCertificate').html(certificate);
                var hobby = CKEDITOR.instances.hobby.getData();
                $('#datahobby').html(hobby);
            });



    </script>
@endpush
