
<h2>Job Title: {{ $job->title }}</h2>
<p>
    Congrats! You job is now live on our website.
</p>

<a href="{{ url("/jobs/".$job->id) }}">View Jobs</a>
