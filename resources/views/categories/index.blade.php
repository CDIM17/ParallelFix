@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Manejar Categorias</h1>
  <a href="{{route('categories.create')}}" class="d-none d-sm-inline-block btn btn-primary btn-icon-split shadow-sm"><span class="icon text-white-50"><i class="fas fa-plus fa-sm "></i></span><span class="text"> &nbsp;Nueva Categoria<span></a>
</div>
@if($categories->count() > 0)
  <div class="card">
    <div class="card-body" >
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre de la Categoria</th>
              <th>Artículos</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>
                <h3>{{ $category->name }}</h3>
              </td>
              <td>
                {{ $category->posts()->count() }}
              </td>
              <td>
                <span class="float-right"><button id="deleteCategory" onclick="handleDelete({{ $category->id }})" class="btn btn-circle btn-danger float-right ml-3"><i class="fas fa-trash"></i></button><a href="{{route('categories.edit', $category->id)}}" class="btn btn-success btn-inverse float-right" ><i class="fas fa-edit"></i>&nbsp; Edit</a></span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Delete Category Modal-->
  <div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategory" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="" method="post" id="deleteCategoryForm">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Estás seguro?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Haz click en eliminar si quieres eliminar la categoria" </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-warning">Eliminar&nbsp;<i class="fas fa-trash"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @else
    <h3 class="h3 text-center text-gray-800">Ahora Mismo no hay Categorias Creadas</h3>
  @endif
</div>
@endsection



@section('script')
 <script type="text/javascript">
 function handleDelete(id) {


   var form = document.getElementById('deleteCategoryForm')
   form.action = '/categories/' + id
   console.log('deleting', form)
   $('#deleteCategoryModal').modal('show')
 }
 </script>
@endsection
