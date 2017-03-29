var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('{{ url("/admin/teamlist") }}').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds