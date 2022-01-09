@extends('layouts.main')
@section('content')



<div class="content">

    <div class="animated fadeIn">
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Progress</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td class="serial">{{$task->id}}</td>
                        <td> {{$task->title}} </td>
                        <td>  <span class="name">{{$task->description}}</span> </td>
                        <td>
                            <div class="progress mb-3">
                            <div class="progress-bar sm-info" style="width: {{$task->progress}}%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                        <td>
                            @if ($task->status=='Completed')
                            <span class="badge badge-complete">{{$task->status}}</span>

                                
                            @else
                            <span class="badge badge-pending">{{$task->status}}</span>

                            @endif
                        </td>

                    </tr>
                        
                    @endforeach

                    




                </tbody>

            </table>

        </div> <!-- /.table-stats -->
    </div>

</div><!-- .content -->



@endsection


@section('scripts')
<script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/init/datatables-init.js')}}"></script>
    
@endsection