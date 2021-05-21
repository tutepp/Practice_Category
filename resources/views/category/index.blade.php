@extends('layout.index')

@section('category')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">
            <a href="">
                <button type="button" class="btn btn-primary">Thêm chuyên mục</button>
            </a>
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Khóa thay thế</th>
                            <th class="text-right" scope="col">Tổng số bài viết</th>
                            <th class="text-right" scope="col">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <th scope="row">{{ ++$key  }}</th>
                                <td>{{ $category['id'] }}</td>
                                <td>{{ $category['name'] }}</td>
                                <td>{{ $category['slug'] }}</td>
                                <td class="text-right">{{ $category['total_post'] }}</td>
                                <td class="text-right">
                                    <a href="{{ route('category.show-edit', $category['id']) }}" ><i class="c-light-blue ti-pencil"></i>Edit</a> |

                                    <a href="{{ route('category.delete', $category['id']) }}" onclick="return confirm('Are you sure?')">
                                    <i class="ti-trash text-danger"></i>Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
