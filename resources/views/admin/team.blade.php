@extends('admin.layouts.app')

@section('main-content')
<div class="row">

<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_team').load('{{ url("/admin/teamlist") }}').fadeIn("slow");
}, 5000); // refresh every 10000 milliseconds
</script>

<div id="load_team"> </div>


</div>




@endsection