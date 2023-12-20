@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <div>{{ $profiles->links() }} </div>
    <table class="table table-zebra">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Controls</th>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
            <tr>
                <td>{{$profile->id}}</td>
                <td>{{$profile->email}}</td>
                <td>{{$profile->created_at}}</td>
                <td>{{$profile->updated_at}}</td>
                <td>
                    <div class="join">
                        <a class="btn btn-info join-item" href="">View</a>
                        <a class="btn btn-warning join-item" href="">Edit</a>
                        <button form="delete-form-{{$profile->id}}" class="btn btn-error join-item">Delete</button>
                    </div>
                    <form id="delete-form-{{$profile->id}}" action="" method="POST">
                        @csrf
                        @method('delete')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
