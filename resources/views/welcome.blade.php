<html>
    <head>

        <title>
            {{ $info->name }}
        </title>

        <link rel="stylesheet" href="{{ asset('style.css') }}" />

        <link rel="icon" href="{{ asset("$info->icon") }}" />
    </head>
    <body>
    <div class="about">
        <img src="{{ asset("$info->photo") }}" /><br>
        <p>{{ $about->head }}</p><br>
        <p>{{ $about->body }}</p>
        <p>
            Facebook: {{ $info->fb }}<br> <!-- fb in $info->fb can be replace bby  tw for twitter , in for linked , yt for youtube  -->
            Youtube: {{ $info->yt }}<br>
            Twitter: {{ $info->tw }}<br>
            Linkedin: {{ $info->in }}<br>
        </p>
    </div>

    <div class="content">
    <div class="services">
        <center><h1> Services </h1></center>
        @forelse($services as $serv)
            <div class="item">
                <img src="{{ asset("$serv->icon") }}" />
                <h1>{{ $serv->head }}</h1>
                <p>{{ $serv->body }}</p>
            </div>
        @empty
        <h1>Nothing To Show</h1>
        @endforelse
    </div>

    <div class="work">
        @forelse($work as $w)
            <div class="item">
                <img src="{{ asset("$w->img") }}" />
                <h1>{{ $w->head }}</h1><br>
                <h7>{{ $w->body }}</h7><br>
                <h5>{{ $w->tag }}</h5>
            </div>
        @empty
            <h1>Nothing To Show</h1>
        @endforelse
    </div>
    </div>
    </body>
</html>