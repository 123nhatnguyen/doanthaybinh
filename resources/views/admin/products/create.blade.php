    @extends('admin.layout')

    @section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div>
                             <label for="img">Image:</label>
                             <input type="file" name="img" id="img" required>
                        </div>
                        <!-- @if(isset($imageUrl))
                        <div>
                              <label>Preview:</label>
                             <img src="{{ $imageUrl }}" width="200">
                        </div>
    @endif -->
                       <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>
                       </div>
                        <div class="form-group">
                            <label for="desc">Desc</label>
                            <textarea name="desc" id="desc" required></textarea>
                        </div>
                        <div>
                         <label for="price">Price:</label>
                         <input type="number" name="price" id="price" required>
                        </div>
                        <div>
                         <label for="quantity">Quantity:</label>
                         <input type="number" name="quantity" id="quantity" required>
                        </div>
                       
                        <div>
                         <label for="quantity">category_id</label>
                         <input type="number" name="category_id" id="" required>
                        </div>
                       
                        <div>
                         <label for="quantity">view:</label>
                         <input type="number" name="views" id="" required>
                        </div>
                       
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection