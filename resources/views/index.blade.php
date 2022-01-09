@extends('layouts.main')
@section('content')



<div class="content">

    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$noOfTasks}}</span></div>
                                    <div class="stat-heading">Total Tasks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$completeTasks}}</span></div>
                                    <div class="stat-heading">Complete Tasks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$pendingTasks}}</span></div>
                                    <div class="stat-heading">Pending Tasks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Progress</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>DELETE</th>
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
                            <td><a href="{{route('editTask',['id'=>$task->id])}}"><button class="btn btn-info">EDIT</button></a></td>
                            <td><a href="{{route('deleteTask',['id'=>$task->id])}}"><button onclick="return confirm('are you sure you want to delete?')" class="btn btn-danger">DELETE</button></a></td>
    
                        </tr>
                            
                        @endforeach
    
                        
    
    
    
    
                    </tbody>
    
                </table>
                <a href="{{route('createTask')}}"><button class="btn btn-success">Add Task <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button></a>
    
            </div>

        </div>
    </div>




 <!-- /.table-stats -->

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