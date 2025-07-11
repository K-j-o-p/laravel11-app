<x-layout>
  @foreach ($apartments as $apartment)
  <h1>
    {{ $apartment['name']}}
    {{ $apartment['location']}}
    {{ $apartment['price']}}
  </h1>
      
  @endforeach
  

 
     
 

</x-layout>
