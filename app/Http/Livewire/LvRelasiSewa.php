<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Customer,
    Sewa,
    Film
};

class LvRelasiSewa extends Component
{
    public $relation_ones = [];

    public $relation_twos = [];

    public $relation_threes = [];


    public function render()
    {
        $customers = Customer::all();
        $sewas = Sewa::all();
        $films = Film::all();
        // dd(compact('customers', 'sewas', 'films'));
        return view('livewire.tasks.lv_task_1')
        ->with(compact('customers', 'sewas', 'films'))
        ->layout('livewire.layouts.main');
    }

    public function setRelationOnes()
    {
        $this->relation_ones = Sewa::query()
        ->select('sewas.*', 'cs.Nama AS Nama_Customer', 'fl.Judul AS Judul_Film')
        ->join('customers AS cs', 'cs.No_Identitas', 'sewas.No_Identitas')
        ->join('films AS fl', 'fl.Kd_Film', 'sewas.Kd_Film')
        ->get();
    }

    public function setRelationTwos()
    {
        $this->relation_twos = Sewa::query()
        ->select('sewas.*', 'cs.Nama AS Nama_Customer', 'fl.Judul AS Judul_Film')
        ->join('customers AS cs', 'cs.No_Identitas', 'sewas.No_Identitas')
        ->join('films AS fl', 'fl.Kd_Film', 'sewas.Kd_Film')
        ->where('tgl_pinjam', '=', '2019-03-20')
        ->orWhere('tgl_pinjam', '=', '2019-03-21')
        ->get();
    }

    public function setRelationThrees()
    {
        $this->relation_threes =  Sewa::query()
        ->select('sewas.*', 'cs.Nama AS Nama_Customer', 'fl.Judul AS Judul_Film', 'cs.Alamat')
        ->join('customers AS cs', 'cs.No_Identitas', 'sewas.No_Identitas')
        ->join('films AS fl', 'fl.Kd_Film', 'sewas.Kd_Film')
        ->where('tgl_pinjam', '=', '2019-03-24')
        ->orWhere('tgl_pinjam', '=', '2019-03-25')
        ->get();
    }

}
