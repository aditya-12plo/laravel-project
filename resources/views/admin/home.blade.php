@extends('admin.layouts.app')

@section('main-content')
<div class="row">

 @foreach($marketing as $key => $m)
         <div class="col-md-4">
{{ $m->id }}
         </div>
@endforeach

</div>




@endsection
