@if($port->count() > 0)
<div id="work" class="work-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>recent work.</h2>
                    <p>Here's some of my recent work</p>
                </div>
            </div>
        </div> <!--/.row-->

        <div class="row">
            <ul class="work-list text-center">
                <li class="filter" data-filter="all">all</li>
                <li class="filter" data-filter=".medias">media</li>
                <li class="filter" data-filter=".illustration">illustration</li>
                <li class="filter" data-filter=".branding">Branding</li>
            </ul>
        </div> <!--/.row-->

        <div class="work-inner">
            <div class="row">
                @foreach($port as $po)
                <div class="col-md-4 col-sm-6 col-xs-12 mix medias"> <!-- Single Work -->
                    <div class="single-work">
                        <img src="{{ $po->img }}" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>{{ $po->head }}</h4>
                                        <a href="#" class="work-link" data-toggle="modal" data-target="#m{{ $po->id }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    @foreach($port as $po)
                    <!-- Work Modal One  -->
                    <div  tabindex="0" class="modal fade" id="m{{ $po->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">{{ $po->name }}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ $po->img }}" alt="work-1">
                                    <h3>{{ $po->head }}</h3>
                                    <p>{!! $po->body !!}</p>
                                    <ul class="list-unstyled project-list" >
                                        <li><label>Author : </label> {{ $info->name }}</li>
                                        <li><label>Category :</label> {{ $po->tag }}</li>
                                        <li><label>Date : </label> {{ $po->created_at }}</li>
                                        <li><label>Project Url : </label> <a href="{{ $po->link }}">{{ $po->link }}</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->
                    @endforeach
                </div>
            </div> <!--/.row-->
        </div>
    </div><!--/.container-->
</div>
  @endif