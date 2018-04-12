@extends('card.master')

@section('content')
    <div class="page-header">
        <h3>Create New Card</h3>
    </div>
    <div class="col-md-6">
        <form action="">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
        </form>
    </div>
    @endsection