<?php

namespace App\Http\Livewire;
use App\Models\Region;
use Livewire\Component;
use App\Models\Comuna;
class RegisterComponent extends Component
{

public $comunas="";
public function mount(){
    $this->comunas=Comuna::where("region_id",1)->get();
}
    public function render()
    {
        return view('livewire.register-component',[
            "regiones"=>Region::all(),
            "comunas"=>$this->comunas
        ]);
    }
    public function listarComunas($region_id)
    {
$this->comunas=Comuna::where("region_id",$region_id)->get();
    }
}
