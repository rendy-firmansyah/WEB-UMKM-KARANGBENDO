<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ChartPembagianWilayah extends Component
{
    public $data;
    public $labels;

    public function __construct($data = [], $labels = [])
    {
        $this->data = $data;
        $this->labels = $labels;
    }

    public function render()
    {
        return view('components.chart-pembagian-wilayah');
    }
}
