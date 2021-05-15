<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$device->name}}'s Sensors
        </h2>
    </x-slot>
    <div class="container">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Sensor Name</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sensors as $sensor)
            <tr>
              <td>{{$sensor->name}}</td>
              <td>{{$sensor->status}}</td>
              <td>
                    <button class="button is-warning ml-3" onclick="location.href='{{ url('/sensors/' . $sensor->id) }}'">
                    Control</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
