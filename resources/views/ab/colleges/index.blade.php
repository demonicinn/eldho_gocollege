@extends('layouts.ab')
@section('title', 'College')
@section('content')


<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">

            <div class="row">
                <div class="col-10">
                    <form>
                        <div class="input-group">
                            <input type="search" name="search" class="form-control form-control-sm mr" placeholder="Search"
                                value="{{ request()->search }}">


                            

                            <button type="submit" class="input-group-text"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-2">
                    
                    <a href="{{ route('ab.colleges.create') }}" class="btn btn-primary btn-sm float-end">Add
                        New</a>

                </div>
            </div>

        </div>


        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($collegesData as $data)
                        <tr class="align-middle">
                            <td>{{ $collegesData->firstItem() + $loop->index }}</td>
                            <td><img src="{{ $data->image_path }}" height="70" width="70"></td>
                            <td>{{ $data->name }}</td>
                            <td>{{ statusValue($data->status) }}</td>
                            <td>
                                <a href="{{ route('ab.colleges.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <a data-method="Delete" data-confirm="Are you sure to delete?" href="{{ route('ab.colleges.delete', $data->id) }}" class="btn btn-danger btn-sm">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



        <div class="card-footer clearfix">
            {{ $collegesData->links() }}
        </div>

    </div>
</div>

@endsection
