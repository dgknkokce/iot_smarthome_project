<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$sensor->name}}'s Properties
        </h2>
    </x-slot>
    <div class="container">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Property Name</th>
              <th scope="col">Value</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sensorproperties as $sensorproperty)
            <form method="POST" action="/sensorproperties/{{$sensorproperty->id}}">
              @csrf
              @method('PUT')
            <tr>
              <td>{{$sensorproperty->property->name}}</td>
              <td>
                <select type="select" id="property_value" name="property_value" value="{{ old('property_value') }}">
                  @for ($i = 0; $i < 101; $i++)
                  <option value="{{$i}}" id="{{$i}}">{{$i}}</option>
                  @endfor
                </select>
              </td>
              <td>
                <input class="button is-warning ml-3" type="submit" value="Update"/>
              </td>
            </tr>
            @endforeach
            </tbody>
          </form>
        </table>
    </div>
</x-app-layout>
