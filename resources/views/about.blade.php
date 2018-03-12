
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="author-image">
                    <img src="{{ asset("$info->photo") }}" alt="Author Image"> <!--=== about image ===-->
                </div>
            </div>

            <div class="col-md-7">
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist"> <!-- Nav tabs -->
                        <li role="presentation" class="active"><a href="#Section1" role="tab" data-toggle="tab">about</a></li>
                        @if($skill->count() > 0)<li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Skills</a></li>@endif
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1"> <!-- Single Tab -->
                            <h4 class="about-heading">{{ $about->head }}</h4>
                            <p>{{ $about->body }}</p>
                            <ul class="social-links"> <!--=== social-links ===-->
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    @if($skill->count() > 0)
                            <div role="tabpanel" class="tab-pane fade" id="Section2"> <!-- Single Tab -->

                            @foreach($skill as $sk)
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>{{ $sk->name }}</h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $sk->prog }}" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"><span>85%</span></div>
                                </div>
                            </div>
                            @endforeach
                    @endif
                      </div>
                    </div>
                </div>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</div>
