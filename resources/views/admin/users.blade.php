@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Key Note Speackers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Key Note Speackers </li>
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
                    Ajouter Key Note Speackers 
                  </button> <br> <br>
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>First Name</TH>
                            <TH>Last Name</TH>
                           <TH>Description</TH>
                           <TH>Web Site</TH>
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
        <h5 class="modal-title" id="exampleModalLabel">ajouter une nouvelle Key Note Speackers </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{url('ajoutertech')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="First Name" name="src">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Last Name" name="alt">
                </div>
                
    
                <div class="mb-3">
                    <label  for="exampleFormControlInput1" class="form-label" >Description</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Description" name="ord">
                </div>
                <div class="mb-3">
                    <label  for="exampleFormControlInput1" class="form-label" >Web Site</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Web Site" name="ord">
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