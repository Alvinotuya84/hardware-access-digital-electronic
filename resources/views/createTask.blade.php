@extends('layouts.main')
@section('content')
<div class="content">
    <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center">Create Task</h3>
                </div>
                <hr>
                <form action="{{route('createNewTask')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Title</label>
                        <input id="cc-payment" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Description</label>
                        <input id="cc-name" name="description" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" required>
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Progress</label>
                        <input id="cc-number" name="progress" type="number" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" required>
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status"  required>
                            <option value="Completed">Completed</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>

                    <div>
                        <a href="createNewTask"><button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">create
                        </button></a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
    
@endsection