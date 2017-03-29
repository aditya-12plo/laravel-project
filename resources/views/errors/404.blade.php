 @if (Auth::guard('admins'))
  <!-- Admin Account 404 -->

@extends('admin.layouts.app')

@section('main-content')
<div class="row">
404
<br>

</div>




@endsection
<!-- Admin Account 404 -->


 @elseif (Auth::user())
                    <!-- Team Account Menu -->



 @endif


