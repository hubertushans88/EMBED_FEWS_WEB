<?php

namespace App\Http\Controllers;

use App\Predictions;
use Illuminate\Http\Request;
use App\Measurements;
use Carbon\Carbon;

class DataController extends Controller
{
    public function index(){
        $measurements = Measurements::where("created_at",'>=',Carbon::now()->subHour(1)->toDateTimeString())->orderBy('created_at','ASC')
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
        //return $mdata;
        return json_encode($mdata);
    }

    public function stat(){
        $data = array();
        $data['node1'] = Measurements::where('node','node1')->latest('created_at')->first();
        $data['node2'] = Measurements::where('node','node2')->latest('created_at')->first();
        $data['node3'] = Measurements::where('node','node3')->latest('created_at')->first();

        return json_encode($data);
    }

    public function prediction(){
        $pn1 = Predictions::where('node','node1')->latest('created_at')->first();
        $pn2 = Predictions::where('node','node2')->latest('created_at')->first();
        $pn3 = Predictions::where('node','node3')->latest('created_at')->first();
        $avg =0.0;
        if($pn1)$avg+=$pn1->value;
        if($pn2)$avg+=$pn2->value;
        if($pn3)$avg+=$pn3->value;
        $avg = $avg/3.0*100;
        return number_format((float)$avg, 2, '.', '');
    }
}
