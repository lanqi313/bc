<?php namespace App\Http\Controllers;
use App\Minfo;
use App\Ginfo;
header("Content-type: text/html; charset=utf-8");


class AddController extends Controller {

         
          function  addMinfo(){
                $rav = file_get_contents("/var/www/lanew/app/福建－产品经理聚集地.json");
                $arr = json_decode($rav,true); 
                $gid = $arr['result']['ginfo']['gid'];
                foreach ($arr['result']['minfo'] as $key => $value) {
                    foreach ($value as $k => $v) {
                            $nick = $arr['result']['minfo'][$key]['nick'];
                            $nick = $arr['result']['minfo'][$key]['nick'];
                            $province = $arr['result']['minfo'][$key]['province'];
                            $gender = $arr['result']['minfo'][$key]['gender'];
                            $city = $arr['result']['minfo'][$key]['city'];
                            $uin = $arr['result']['minfo'][$key]['uin'];
                    }
                    $minfo = Minfo::create(array('gin_gid' => $gid, 'nick' =>$nick,'province'=>$province,'gender'=>$gender,'city'=>$city,'uin'=>$uin));
                }
                return "good";
          }

          function addGinfo(){

                    $rav = file_get_contents("/var/www/lanew/app/福建－产品经理聚集地.json");
                    $arr = json_decode($rav,true);                 
                    $gid = $arr['result']['ginfo']['gid'];
                    $name = $arr['result']['ginfo']['name'];
                    $ginfo = Ginfo::create(array('name' => $name,  'gid' =>$gid));
                    return "good";

          }

}