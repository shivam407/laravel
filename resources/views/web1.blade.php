{{$data['name']}}


@if($data['name']=='vishal')
{{'yes'}}
@else
{{'no'}}
@endif



@for($i=1;$i<=5;$i++)
{{$i}}
@endfor


@foreach($data as $key)
{{$key}}
@endforeach