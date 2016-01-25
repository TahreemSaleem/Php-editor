<?php



namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Request;
use View;
class myController extends BaseController
{
	public function Form(){
		//echo "wow";
		$input = Request::only('textareaCode');
		//return $input['textareaCode'];
		//$input = 'wow';
		if (Auth::user()->name == 'Tahreem'){
			$users = DB::table('allCode')->distinct()->lists('name');
			$mycode = DB::table('allCode')->where('name', 'fatima')->lists('code');
			//return $users;
			$data = array(
			    'user'  => $users,
			    'code' => $mycode
			);
			return view('try2')->with('data', $data);
		}
		else
			{
				if ($input['textareaCode'])
				{
					DB::table('allCode')->insert(
						    array('name' => Auth::user()->name, 'code' => $input['textareaCode'])
						);
				}
				return view('try')->with('data', $input['textareaCode']);
		}

	}
	public function vCode($id){
			$mycode = DB::table('allCode')->where('name', $id)->lists('code');
		

			$users = DB::table('allCode')->distinct()->lists('name');
			$data = array(
			    'user'  => $users,
			    'code' => $mycode
			);
			return view('try2')->with('data', $data);
			

	}
}
