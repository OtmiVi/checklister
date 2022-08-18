@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Create Checklist in ').$checklistGroup->name}}</h3>
                </div>
                <form action="{{route('admin.checklist_groups.checklists.store', $checklistGroup)}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="checklist_name">Checklist name</label>
                            <input type="text" name="name" class="form-control" id="checklist_name" placeholder="Checklist name" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection