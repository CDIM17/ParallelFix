<style>


@foreach($contenidosection1s as $cont)

.overlay{{$cont->id}} {
    position: absolute;
    width: 100%;
    height: 100%;

    /* opacity: 0.3; */
    transition: all 0.2s ease-out;

    @if($cont->overlay < 100)
      background: rgba(0, 0, 0, 0.{{$cont->overlay}});
    @else
      background: rgba(0, 0, 0, 1);
    @endif


}
@endforeach
</style>
