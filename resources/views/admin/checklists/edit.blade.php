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
            <div class="card card-warnind">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edit ChecklistChecklist in ').$checklistGroup->name}}</h3>
                </div>
                <form action="{{route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="checklist_name">Checklist name</label>
                            <input type="text" name="name" class="form-control" id="checklist_name" value="{{$checklist->name}}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning">{{__('Update')}}</button>
                    </div>
                </form>
                <div class="card-footer">
                    <form action="{{route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('{{__('Are you sure')}}')">
                            {{__('Delete')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection