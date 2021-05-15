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
            <tr>
              <td>{{$sensorproperty->property->name}}</td>
              <td>
                <select type="select" id="property_value" name="property_value" value="{{$sensorproperty->property_value}}">
                  @for ($i = 0; $i < 101; $i++)
                  <option value="{{$i}}" id="{{$i}}">{{$i}}</option>
                  @endfor
                </select>
              </td>
              <td>
                <form method="POST" action="/sensorproperties/{{$sensorproperty->id}}">
                  @csrf
                  @method('PUT')
                  <input class="btn btn-primary" type="submit" value="Update"/>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
