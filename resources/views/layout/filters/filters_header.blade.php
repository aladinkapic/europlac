@foreach($filteri as $key => $value)
    @if(isset($style) and $style != null)
        @php $found = false; @endphp
        @foreach($style as $styles => $values)
            @if($key == $styles)
                @if(count($values) == 1)
                    <th data-filter-id="{{ $key }}" class="{{$values[0]}}">{{ $value }}</th>
                @elseif(count($values) == 2)
                    <th data-filter-id="{{ $key }}" class="{{$values[0]}}" width="{{$values[1]}}">{{ $value }}</th>
                @endif
                @php $found = true; @endphp
            @endif
        @endforeach
        @if(!$found) <th data-filter-id="{{ $key }}">{{ $value }}</th> @endif
    @else
        <th data-filter-id="{{ $key }}">{{ $value }}</th>
    @endif
@endforeach
