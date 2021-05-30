<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $sensor->name }}'s Properties
        </h2>
    </x-slot>
    <div class="container">
      @foreach($sensor->sensorproperties as $sensorproperty)
      <form method="POST" action="/sensorproperties/{{$sensorproperty->id}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label for="property_value" class="col-md-4 col-form-label text-md-right">{{ $sensorproperty->property->name }}</label>

          <div class="col-md-6">
            <select id="property_value" type="select" class="form-control @error('property_value') is-invalid @enderror" name="property_value" value="{{ old('property_value') }}">
              @for ($i = 0; $i < $sensorproperty->property->max_value; $i++)
                <option value="{{$i}}" id="{{$i}}">{{$i}}</option>
              @endfor
            </select>

            @error('property_value')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="button is-warning ml-3" onmouseover="this.classList.toggle('has-text-dark')" onmouseout="this.classList.toggle('has-text-dark')">
              Update
            </button>
          </div>
        </div>
      </form>
      @endforeach
    </div>
</x-app-layout>
