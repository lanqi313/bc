<?php  namespace App\Http\Controllers;
use  App\Minfo;
use Request;


      class  SelectController extends Controller {


                function  citySelect(){
                        $minfos = Minfo::where('city','=','福州')->get();
                        return  view('out')->with('minfos',$minfos);
                }

                function  provinceSelect(){
                        $provinces = Minfo::where('province','=','福建')->get();
                        return  view('province')->with('provinces',$provinces);
                }
                function  qq(){
                    $sel =  Request::input('sel');
                    if($sel=='fuzhou'){
                        return $this->citySelect();
                    }else  return  $this->provinceSelect();
                    
                }

      }