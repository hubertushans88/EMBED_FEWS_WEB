<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Measurements;
use Asantibanez\LivewireCharts\Models\LineChartModel;



class LivewireCharts extends Component
{
    public $firstRun = true;

    public $types = ['node1', 'node2', 'node3'];
    public $colors = [
        'node1' => '#f6ad55',
        'node2' => '#fc8181',
        'node3' => '#90cdf4',
    ];

    public function render()
    {
        $values = Measurements::all()->groupBy('node');
        $lineChartModel = $values->reduce(function (LineChartModel $lineChartModel,$data)use($values){
            //dd($data);
            foreach ($data as $datum){
                $lineChartModel->addMarker($datum->id, $datum->value);
            }
            return $lineChartModel;
        },(new LineChartModel())
            ->setTitle('Expenses Evolution')
            ->setAnimated($this->firstRun));

        $this->firstRun = false;

        return view('livewire.livewire-charts')->with([
            'lineChartModel' => $lineChartModel,
        ]);
    }
}
