@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Add Project</h2>
                        <div class="ml-auto">
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">Back to All Project</a>
                        </div>
                    </div>
                </div>
                 <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="post">
                        @include("projects._form", ['buttonText' => "Add Project"])
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
