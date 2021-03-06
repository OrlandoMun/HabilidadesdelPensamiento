
<div>
<div class="col-lg-12" style="padding-top:8px;">
           <div class="card">
                <div class="card-header">
                    
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="">Carrera:</label>
                                <select class="js-example-basic-single" id="region" name="region" style="width:100%"  wire:change='listarComunas($event.target.value)'>
                                @foreach($regiones as $region)
                                <option value="{{$region->id}}">{{$region->name }}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Materia:</label>
                                <select class="js-example-basic-single" style="width:100%" name="comuna" >
                                @if($comunas)
                                @foreach($comunas as $comuna)
                                <option value="{{$comuna->id}}">{{$comuna->name }}</option>
                                @endforeach
                                @endif
                                </select>
                        </div>
                        <div class="col-lg-4">
                            <br>
                            <button style="width:70%" id="submit" name="submit" type="submit" class="btn btn-primary" tabindex="4">Ingresar</button>
             
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
</div>
