
@extends('base')

@section('content')
<br><br><br>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card text-black bg-light mb-3">
                    <h3>Edit Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/item/edit/' . $item->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name"  value="{{$item->name}}" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$item->description}}" id="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Done</button>
                            &nbsp;&nbsp;
                            <a href="{{ url('/item') }}" class="btn btn-primary text-black">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop