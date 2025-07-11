<ul>
 @foreach ($apartments as $apartment)
  
    <li>
        <a href="/apartments/{{$apartment['id']}}">
            {{ $apartment['name']}}
            {{ $apartment['location']}}
            {{ $apartment['price']}}
            {{ $apartment['description']}}
        </a>
    </li>
 
      
  @endforeach

</ul>