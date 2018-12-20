@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Projects</h2>
                        <div class="ml-auto">
                            <a href="{{ route('projects.create') }}" class="btn btn-outline-secondary">Add Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Task List</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ $project }} --}}
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td colspan="2">
                                <button>View</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
