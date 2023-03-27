@extends('layouts.admin')
@section('content')

@if(session('success'))
<div class="mt-3 alert alert-success">
    <span> {{ session('success') }} </span>
   </div>
   @endif
   <div class="container-fluid">
       
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-body">
                       @if( count ($invoices) > 0)
                       <h4 class="card-title">Client Invoices </h4>
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered zero-configuration">
                               <thead>
                                   <tr>
                                       <th>ID</th> 
                                       <th>BillTo</th> 
                                       <th>Generated date</th> 
                                       <th>Due date</th> 
                                       <th>tax</th>
                                       <th>Total</th>
                                       <th>Paid</th>  
                                       <th>Status</th>  
                                       <th>Package</th>  
                                       <th>Listing ID</th>

                                                   
                                       <th>Actions</th>
                                       
                                   </tr>
                               </thead>
                               <tbody>
                                 @foreach ($invoices as $invoice)
                                   <tr>
                                       <td>{{$invoice->id}}</td>
                                       <td>{{$invoice->user->name}} - 
                                             {{$invoice->user->id}}
                                        </td>
                                       <td>
                                        {{$invoice->generate_date}}
                                        </td>
                                        <td>
                                            {{$invoice->due_date}}
                                        </td>
                                        <td>
                                            {{$invoice->tax}}
                                        </td>
                                        <td>
                                            {{$invoice->total}}
                                        </td>
                                        <td>
                                            {{$invoice->paid}}
                                        </td>
                                        <td>
                                            {{$invoice->status}}
                                        </td>
                                        <td>
                                            {{$invoice->package->package_name}}
                                        </td>
                                        <td>
                                            {{$invoice->listing_id}}
                                        </td>
                                       
                                        <td>
                                        <a href="{{ route('admin.invoice.invoice_edit',$invoice->id)}}" ><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                               
                                        
                                        </a>
                                           <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fa fa-close color-danger"></i></a>
                                           <form action="#" method="post" onsubmit="return confirm('Are you sure want to delete?');">
                                             @method('DELETE')
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           </form>
                                       </td>
                                   </tr>
                                   @endforeach
                               </tbody>
               
                           </table>

                           <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Modal</h4>
                                <div class="bootstrap-modal">
                                    <!-- Button trigger modal -->
                               
                                    <!-- Modal -->
                                   
                                </div>
                            </div>
                        </div>
                       </div>
                       @else
                       <p> please add invoice </p>
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection