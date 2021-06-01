<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Measurements;
use Carbon\Carbon;

class DataController extends Controller
{
    public function index(){
        $measurements = Measurements::where("created_at",'>=',Carbon::now()->subDay()->toDateTimeString())->orderBy('created_at','ASC')
        //$measurements = Measurements::where("created_at",'>=',Carbon::now()->subMinute()->toDateTimeString())->orderBy('created_at','ASC')
            ->get()->groupBy(function($data) {
                return Carbon::parse($data->created_at)->format('d/m H:i:s');
            });
        //return $measurements;
        $mdata = array();
        $mdata['node1']=[];
        $mdata['node2']=[];
        $mdata['node3']=[];
        $count=0;
        foreach ($measurements as $key=>$data){
            $mdata['time'][]=$key;
            $count++;
            foreach ($data as $datum){
                //return $datum;
                $mdata[$datum->node][]= $datum->value;
            }
            if(count($mdata['node1']) < $count)$mdata['node1'][]=0;
            if(count($mdata['node2']) < $count)$mdata['node2'][]=0;
            if(count($mdata['node3']) < $count)$mdata['node3'][]=0;
        }
        return json_encode($mdata);
    }
}
