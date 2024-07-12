<h2>{{$job->position}}</h2>

<p>Congrats! Your job is now live on our website</p>

<p>
    <a href="{{url('/jobs/'. $job->id)}}">See Job</a>
</p>
