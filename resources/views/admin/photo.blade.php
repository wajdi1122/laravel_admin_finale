@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Photos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Photos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"style="margin-left: 850px"> <i class="bi bi-person-plus"></i>
                    Ajouter Photos
                  </button> <br> <br>
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>Vpath</TH>
                            <TH>Alt</TH>
                           <TH>Title</TH>
                           <TH>Order</TH>
                           <TH>Action</TH>
                      </tr>
                    
                 
                  </table>
            </div>
          </div>
        </div>
      </div>
    </section>   

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter une nouvelle Photos </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{url('ajoutertech')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Vpath</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Vpath" name="src">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alt</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Alt" name="alt">
                </div>
                
    
                <div class="mb-3">
                    <label  for="exampleFormControlInput1" class="form-label" >Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Title" name="ord">
                </div>
                <div class="mb-3">
                    <label  for="exampleFormControlInput1" class="form-label" >Order</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Order" name="ord">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
        <button type="submit" class="btn btn-primary">ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection