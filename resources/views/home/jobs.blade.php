              <!-- Count of Job list Start -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="count-job mb-35">
                        <span>{{$jobsdata->total()}} Jobs found</span>
                        <!-- Select job items start -->
                        {{-- <div class="select-job-items">
                            <span>Sort by</span>
                            <select name="select">
                                <option value="">None</option>
                                <option value="">job list</option>
                                <option value="">job list</option>
                                <option value="">job list</option>
                            </select>
                        </div> --}}
                        <!--  Select job items End-->
                    </div>
                </div>
            </div>
            <!-- Count of Job list End -->
 @foreach($jobsdata as $job)
  <!-- single-job-content -->
  <div class="single-job-items mb-30">
    <div class="job-items">
        <div class="company-img">
            <a href="job_details.html"><img style="width:100px;height:100px;" src="{{ asset('bootstrap/img/icon/'.$job->image_logo)}}" alt=""></a>
        </div>
        <div class="job-tittle">
            <a href="jobdetails/{{$job->id}}/career/{{$job->career_id}}"><h4>{{$job->position}}</h4></a>

            <ul>
                <li>{{$job->name}}</li>
                <li><i class="fas fa-map-marker-alt"></i>{{$job->location}}</li>
                <li>{{$job->salary_min}} - {{$job->salary_max}} {{$job->salary_unit}} </li>
            </ul>
        </div>
    </div>
    <div class="items-link f-right">
        <a href="job_details.html">{{$job->job_type}}</a>
        <span>{{$job->work_time}} hours ago</span>
    </div>
</div>                          
@endforeach                                                     
<div style="display:flex;justify-content:center">  {!! $jobsdata->links() !!}</div>           

 