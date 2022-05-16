@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/datatables/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/datatables/css/dataTables.bootstrap4.min.css') }}">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Event List</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="/mvc/register" class="btn btn-success btn-sm mb-1" style="float:right">Add Phone Number</a>
                        </div>
                
                        <table class="table table-bordered table-striped" id="event">
                            <thead class="bg-navy">
                                <th class="text-center" style="width:5%">No</th>
                                <th class="text-center" style="width:30%">Event Name</th>
                                <th class="text-center" style="width:10%">Slug</th>
                                <th class="text-center" style="width:10%">Start At</th>
                                <th class="text-center" style="width:5%">End At</th>
                                <th class="text-center" style="width:5%">Action</th>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @if ($event->count()>0)
                                    @foreach ($event as $ev)
                                        <tr>
                                            <td class="text-center">{{$no++}}</td>
                                            <td class="text-center">{{$ev->name}}</td>
                                            <td class="text-center">{{$ev->slug}}</td>
                                            <td class="text-center">{{$ev->startAt}}</td>
                                            <td class="text-center">{{$ev->endAt}}</td>
                                            <td class="text-center">
                                                <a href="" title="edit"  val="">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="/api/events/{{$ev->id}}" title="Delete" onclick=" return confirm('Delete Record?')">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="6"> No Records</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#event').DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_ records each page",
                    "zeroRecords": "No records",
                    "info": "Show _PAGE_ from _PAGES_",
                    "infoEmpty": "No phone records found",
                    "infoFiltered": "(Search from _MAX_ total record)",
                    "search": "Search:",
                    "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": "Next",
                        "previous": "Previous"
                    },
                }
            });
        });
    </script>
@endsection