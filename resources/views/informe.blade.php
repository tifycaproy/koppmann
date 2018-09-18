@extends('layouts.layout')

@section('content')

    <div class="col-12  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                	<div class="row ">
                		<div class="col">
                			<h3 class="">Infome</h3>
                		</div>
                		<div class="col ">
	        				<form action="">
	        					<div class="row d-flex justify-content-end">
	        						<div class="form-group col-md-4">
	        							<input type="date" class="form-control" placeholder="">
	        						</div>
	        						<div class="form-group col-md-4">
	        							<input type="date" class="form-control" placeholder="">
	        						</div>
	        					</div>
	        				</form>
                		</div>
                	</div>
                  <div class="row">
                    <div class="table-responsive col-8">
                      <table class="table">
                        <thead class="">
                            <tr class="table-secondary">
                              <th colspan="4">00/00/000</th>
                               <th colspan="4">00/00/000</th>
                            </tr>
                            <tr>
                              <th>Clientes</th>
                              <th>Promedio</th>
                              <th>NP</th>
                              <th>Total</th>
                              {{--  --}}
                             
                              <th>Promedio</th>
                              <th>NP</th>
                              <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <td>Jacob</td>
                            <td>500</td>
                            <td>1</td>
                            <td>700</td>
                            {{--  --}}
                         
                            <td>500</td>
                            <td>1</td>
                            <td>700</td>
                          </tr>
                          <tr>
                           <td>David</td>
                            <td>50</td>
                            <td>3</td>
                            <td>1300</td>
                            {{--  --}}
                            
                            <td>50</td>
                            <td>3</td>
                            <td>1300</td>
                          </tr>
                          <tr class="table-active">
                            <td><b>Total General</b></td>
                            <td><b>550</b></td>
                            <td><b>4</b></td>
                            <td><b>2000</b></td>
                            {{--  --}}
                         
                            <td><b>550</b></td>
                            <td><b>4</b></td>
                            <td><b>2000</b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-4 table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <tr class="table-secondary">
                              <th colspan="4">Totales</th>
                            </tr>
                          </tr>
                          <tr>
                            <th>Total Pro.</th>
                            <th>Total NP</th>
                            <th>Total Total</th>
                          </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <td>5678</td>
                            <td>1</td>
                       
                            <td>700</td>
                          </tr>
                          <tr>
                            <td>1234</td>
                            <td>2</td>
                         
                            <td>700</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
              
                </div>
              </div>
            </div>
@endsection
