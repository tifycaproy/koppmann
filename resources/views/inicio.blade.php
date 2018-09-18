@extends('layouts.layout')

@section('content')
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Formulario N°001</h4>
         
          <form class="forms-sample">
          	<div class="row">
          		<div class="form-group col-12 col-md-3">
	              <label for="exampleInputEmail1">Fecha</label>
	              <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
	            </div>
	            <div class="form-group col-12 col-md-3">
		            <label for="exampleFormControlSelect1">Cliente</label>
		            <select class="form-control " id="exampleFormControlSelect1">
		              <option>Cliente1</option>
		              <option>Cliente2</option>
		              <option>Cliente3</option>
		              <option>Cliente4</option>
		              <option>Cliente5</option>
		            </select>
		        </div>
		        <div class="form-group col-12 col-md-3">
		            <label for="exampleFormControlSelect1">Manifold</label>
		            <select class="form-control " id="exampleFormControlSelect1">
		              <option>Si</option>
		              <option>No</option>
		            </select>
		        </div>
		        <div class="form-group col-12 col-md-3">
	              <label for="exampleInputEmail1">Peso</label>
	              <div class="row ">
	              	<div class="col-md-8 col-12">
	              		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="...">
	              	</div>
	              	<div class="col-12 col-md-4">
	              		<select class="form-control " id="exampleFormControlSelect1">
			              <option>Kg</option>
			              <option>Sin Peso</option>
			            </select>
	              	</div>
	              </div>
	              
	            </div>

	        </div>
            <button type="submit" class="btn btn-success mr-2">Guardar</button>

          </form>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                	<div class="row ">
                		<div class="col">
                			<h3 class="">Listado</h3>
                		</div>
                		<div class="col ">
	        				<form action="">
	        					<div class="row d-flex justify-content-end">
	        						<div class="form-group col-md-4">
	        							<input type="text" class="form-control" placeholder="Cliente">
	        						</div>
	        						<div class="form-group col-md-4">
	        							<input type="date" class="form-control" placeholder="">
	        						</div>
	        						<div class="form-group col-md-4">
	        							<input type="text" class="form-control" placeholder="Peso">
	        						</div>
	        					</div>
	        				</form>
                		</div>
                	</div>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Clientes</th>
                          <th>Manifold</th>
                          <th>Fecha</th>
                          <th>Peso</th>
                          <th>Temp.</th>
                          <th>Dirección</th>
                          <th>Rut</th>
                          <th>Alerta</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Si</td>
                          <td>16/09/2018</td>
                          <td>10 Kg</td>
                          <td></td>
                          <td>Direccion</td>
                          <td>Rut</td>
                          <td><label class="badge badge-success w-100">Verdadero</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>No</td>
                          <td>16/09/2018</td>
                          <td>10 Kg</td>
                          <td></td>
                          <td>Direccion</td>
                          <td>Rut</td>
                          <td><label class="badge badge-danger w-100">Falso</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Si</td>
                          <td>16/09/2018</td>
                          <td>10 Kg</td>
                          <td></td>
                          <td>Direccion</td>
                          <td>Rut</td>
                          <td><label class="badge badge-success w-100">Verdadero</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>No</td>
                          <td>16/09/2018</td>
                          <td>10 Kg</td>
                          <td></td>
                          <td>Direccion</td>
                          <td>Rut</td>
                          <td><label class="badge badge-danger w-100">Falso</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>Si</td>
                          <td>16/09/2018</td>
                          <td>Sin Peso</td>
                          <td></td>
                          <td>Dirección</td>
                          <td>Rut</td>
                          <td><label class="badge badge-success w-100">Verdadero</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <nav aria-label="Page navigation example" class="mt-4">
					  <ul class="pagination">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
					      </a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					        <span class="sr-only">Next</span>
					      </a>
					    </li>
					  </ul>
					</nav>
                </div>
              </div>
            </div>
@endsection
