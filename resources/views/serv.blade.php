@if(!empty($ser) && $ser->count() > 0)
    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>what i do.</h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="row">
                @forelse($ser as $serv)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service text-center wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img" style="background-image: url(<?php $i = $serv->icon ?>  {{ asset($i) }})"></div>
                            <h3>{{ $serv->head }}</h3>
                            <p>{{ $serv->body }}</p>
                        </div>
                    </div>
                @empty

                @endforelse
            </div><!--/.row-->
        </div><!--/.container-->
    </div>
@endif

