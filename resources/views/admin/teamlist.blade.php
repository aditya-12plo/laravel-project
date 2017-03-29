 @section('content')
 @foreach($marketing as $key => $m)
         <div class="col-md-4">
{{ $m->id }}
         </div>
@endforeach


@endsection