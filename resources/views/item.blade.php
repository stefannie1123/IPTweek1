@extends('base')

@section('content')
<br><br><br>
  <div class="container">
    <div class="mb-1 float-end">
      <a href="{{url('item/create')}}" class="btn btn-primary">
        Add Item
      </a>
    </div>
  <h1 class="text-blue">LIST OF ITEMS</h1>
  <table class="table table-sm table-ligt">
      <thead class="bg-primary text-black">
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>&nbsp;</th>
      </thead>
      <tbody>
          @foreach($items as $itm)
          <tr>
              <td>{{$itm->name}}</td>
              <td>{{$itm->description}}</td>
              <td>{{$itm->price}}</td>
              <td>{{$itm->quantity}}</td>
              <td>
                  <a href="{{ url('item/edit/' . $itm->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                      Edit
                  </a> &nbsp;&nbsp;
                  <a href="{{ url('item/delete/' . $itm->id) }}" class="btn btn-danger btn-sm" type="submit">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  </div> 

@endsection