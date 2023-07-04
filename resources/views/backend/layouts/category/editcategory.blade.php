@extends('backend.master')
@section('content')


            <div class="modal-body">
                <form action="{{route('category.update',$categories->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category name</label>
                        <input  value="{{$categories->name}}"name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Category name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Details</label>
                        <input  value="{{$categories->details}}" name="details" class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter details"
                            rows="3">
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
     