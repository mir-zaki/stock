@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Category List</h3>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Category
                </button>
                <div>



                </div>
            </div>


        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <div>

                                @if(session()->has('message'))
                                <div class="row" style="padding: 20px;">
                                    <span class="alert alert-success">{{session()->get('message')}}</span>
                                </div>
                                @endif

                            </div>
                            <thead>
                                <tr>
                                    <th scope="col">Category name</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories)


                                <tr>

                                    <td>{{ $categories->name}}</td>
                                    <td>{{ $categories->details}}</td>
                                    <td>
                                        <a href="{{route('category.edit',$categories->id)}}"><i class="fa fa-edit"></a></i>
                                        <a onclick="return confirm('Are you sure want to delete this item?');" href="{{route('category.delete',$categories->id)}}"><i class="fa fa-close"></i></a>
                                    </td>

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('caterogy.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category name</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Category name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Details</label>
                        <textarea name="details" class="form-control" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
@endsection
