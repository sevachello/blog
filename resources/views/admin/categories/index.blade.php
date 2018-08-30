@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') List of categories @endslot
        @slot('parent') Main @endslot
        @slot('active') Category @endslot
    @endcomponent

        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">Add category</a>
        <table class="table table-striped">
            <thead>
                <th>Title</th>
                <th>Published</th>
                <th class="text-right">Action</th>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td>{{$category->published}}</td>
                        <td>
                            <a href="{{route('admin.category.edit', ['id'=>$category->id])}}">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            <h2>Empty ;(</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination pull-right">
                            {{$categories->links()}}
                        </ul>
                    </td>

                </tr>
            </tfoot>
        </table>
</div>
@endsection