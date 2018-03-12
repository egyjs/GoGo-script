@extends("layouts.dash")
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-star"></i> All Features</h1>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Striped Table</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @forelse($ser as $service)
                    <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->head }}</td>
                    <td><img style="width: 36px" src="{{ asset("$service->img") }}" </td>
                    <td>{{ $service->created_at }}</td>
                    <td><a style="border-radius: 100%" href="{{ route('dash.work.edit',["id"=>$service->id]) }}" class="btn btn-info"><i style="margin: 0 auto" class="fa fa-edit"></i></a> </td>
                    <td><a style="border-radius: 100%" href="#" class="btn btn-danger"
                                   onclick="event.preventDefault();
                                                     document.getElementById('delfeat-form').submit();">
                            <I style="margin: 0 auto" class="fa fa-trash"></I>
                        </a>

                        <form id="delfeat-form" action="{{ route('dash.work.del',['id'=>$service->id]) }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </td>
                </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection