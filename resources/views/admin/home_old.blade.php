$pass = Request::input('password');
$pass2 = Request::input('password_confirm');

if($pass == $pass2)
{
$rules = array('password' => 'required|max:255',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($pass, $rules);


}
else
{
  Session::flash('danger', 'Password KOnfirmasi Yang Anda Masukan Tidak Sama');
  return redirect('/admin/settings');
}