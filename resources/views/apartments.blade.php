@foreach ($apartments as $apartment)
  <h1>
    {{ $apartment['name']}}
    {{ $apartment['location']}}
    {{ $apartment['price']}}
    {{ $apartment['description']}}
  </h1>
      
  @endforeach