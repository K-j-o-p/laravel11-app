<x-layout>

  Home

 @foreach ($men as $man)
 <div>
    <h1>NAME:{{$man['name']}}</h1>
    <h1>NAME:{{$man['age']}}</h1>
 </div>
     
 @endforeach

</x-layout>
