<!-- Info Slider 3 -->
  <div class="col-md-12 mb-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
    <form method="POST" action="{{route('infoSlider3.display', $info_slider_text3s[0]->id)}}">
      @csrf
      <div class="row">
        <span class="col-md-6"><h6 class="m-0 font-weight-bold text-primary">Slider de Informacion 3</h6></span>
          <select onchange="this.form.submit()" name="infoslider3" class="col-md-6  float-right">
            @foreach($orders as $order)
            @if($order->section == 'infoslider3' && $order->display == 1)
            <option selected value="1">Mostrar</option>
            <option value="0">Esconder</option>
            @elseif($order->section == 'infoslider3' && $order->display == 0)
            <option value="1">Mostrar</option>
            <option selected value="0">Esconder</option>
            @endif
            @endforeach
          </select>
      </div>
    </form>
      </div>

      <div class="card-body row">
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('img/sections/infoSlider.png')}}">
        </div>
        <div class=" col-md-6">
          <div class="row">
            <a class="btn btn-success mx-auto mt-5" href="editInfoSlider3/{{$info_slider_text3s[0]->id}}">Editar contenido &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /Info Slider 3 -->
