<h2>
    {{ $job->title }}
</h2>

<p>
    Congrat! Your job is now live on our Website!
</p>

<p>
    <a href="{{ url('jobs', $job->id) }}">View your Job Listing.</a>
</p>
