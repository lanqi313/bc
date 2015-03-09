<?php  namespace  App\Http\Controllers;
use App\Group;
use App\Member;
use App\Order;
class ApplyController extends Controller {
	public function upload(){
		if(!empty($_FILES)){
			foreach ($_FILES as $kt => $value) {
				$tmp_name = $_FILES[$kt]['tmp_name'];
				if(!empty($tmp_name)){
					$rav = file_get_contents("$tmp_name");
					$arr = json_decode($rav,true);
					$id = $arr['result']['ginfo']['gid'];
					var_dump($id );
					$name = $arr['result']['ginfo']['name'];
					$ginfo = Group::firstOrCreate(array(
						'name' => $name, 
						'id' =>$id
					));
					foreach ($arr['result']['minfo'] as $member) {
						$mem_id = $member['uin'];
						// $members = Member::all();
						// Member::chunk(200, function($members)
						// {
						//     foreach ($members as $mem)
						//     {
						//         	if($mem->id == $mem_id){
						//         		$order = Order::firstOrCreate(array(
						//         			'mem_id' =>$mem_id,
						//         			'group_id'=>$id
						//         			));
						//         	}
						//     }
						// });
						$members = Member::where('id','=',$mem_id)->first();
						 var_dump($members);
						if(!empty($members)){
							$order = Order::firstOrCreate(array(
						        			'mem_id'  =>$mem_id,
						        			'group_id' =>$id
						        			));

						}else{
							 $new = array(
								'nick' => $member['nick'],
								'province' =>  $member['province'],
								'gender'=>$member['gender'],
							 	'city'=>$member['city'],
							 	'id'=>$mem_id,
							 	'gin_id' => $id
							 );
							 $model = Member::firstOrCreate($new);
						 }
					}
				} 
			}
		}
		return "The uin is  upload  on the datebase!!!";
	}
}