<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-support"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('nombres', null, ['class' => "form-control", 'maxlength' => 120, 'placeholder' => 'Nombres']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-support"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('apellidos', null, ['class' => "form-control", 'maxlength' => 120, 'placeholder' => 'Apellidos']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-calendar"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('edad', null, ['class' => "form-control", 'maxlength' => 2, 'placeholder' => 'Edad']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-tax"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('rut', null, ['class' => "form-control", 'id' => 'rut', 'maxlength' => 20, 'placeholder' => 'RUT']) }}
            </div>
        </div>
    </div>

</div>


<div class="row ml-3">


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="nk-int-mk sl-dp-mn">
            <b>
                <p>Área departamental</p>
            </b>
        </div>
        <div class="bootstrap-select fm-cmp-mg">
            <select class="selectpicker" name="departamento">
                @foreach($areas as $item)
                <option value="{{ $item->id }}">{{ $item->area }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <b>
            <p>Género</p>
        </b>
        <div class="fm-checkbox">
            <div class="i-checks">
                <label>
                    {{ Form::radio('genero', 'Masculino', 'checked') }}
                    <i></i>
                    Masculino
                </label>
            </div>
        </div>
        <div class="fm-checkbox">
            <div class="i-checks">
                <label>

                    {{ Form::radio('genero', 'Femenino') }}
                    <i></i>
                    Femenino
                </label>
            </div>
        </div>
    </div>



    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <b>
            <p>Turno</p>
        </b>
        <div class="toggle-select-act mg-t-30">
            <div class="nk-toggle-switch" data-ts-color="amber">
                <label for="ts7" class="ts-label">Mañana</label>
                <!-- <input id="ts7" type="radio" name="turno" hidden="hidden"> -->
                {{ Form::radio('turno', 'Mañana', ['id' => 'ts7', 'hidden']) }}
                <label for="ts7" class="ts-helper"></label>
            </div>
            <br><br>
            <div class="nk-toggle-switch" data-ts-color="green">
                <label for="ts4" class="ts-label">Tarde</label>
                <!-- <input id="ts4" type="radio" name="turno" hidden="hidden"> -->
                {{ Form::radio('turno', 'Tarde', ['id' => 'ts4', 'hidden']) }}
                <label for="ts4" class="ts-helper"></label>
            </div>
            <br><br>
            <div class="nk-toggle-switch" data-ts-color="blue">
                <label for="ts3" class="ts-label">Noche</label>
                <!-- <input id="ts3" type="radio" name="turno" hidden="hidden"> -->
                {{ Form::radio('turno', 'Noche', ['id' => 'ts3', 'hidden']) }}
                <label for="ts3" class="ts-helper"></label>
            </div>
        </div>
    </div>
</div>

