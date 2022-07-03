@include('admin.header')

@include('admin.sidebar')
@include('admin.nav')

<div class="container-fluid page-body-wrapper">
    <div class="container " align="center">

        <h1 style="color: white; padding-top:25px; font-size:28px">ADD PRODUCT</h1>

        @if (session()-> has ('message'))
        <div class="alert alert-dismissable alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                {!! session()->get("message")!!}
            </strong>
        </div>
        @endif

        <form method="POST" action="{{url('addProduct')}}" enctype="multipart/form-data">
        @csrf
        <div style="padding: 15px;">
            <label style="width: 200px">Product Title</label>
            <input style="color: black;" type="text" name="title" placeholder="Product title" required>
        </div>

        <div style="padding: 15px;">
            <label style="width: 200px">Price</label>
            <input style="color: black;" type="number" name="price" placeholder="Product price" required>
        </div>

        <div style="padding: 15px;">
            <label style="width: 200px">Description</label>
            <input style="color: black;" type="text" name="desc" placeholder="Product description" required>
        </div>

        <div style="padding: 15px;">
            <label style="width: 200px">Quantity</label>
            <input style="color: black;" type="number" name="quantity" placeholder="Quantity" required>
        </div>

        <div style="padding: 15px;">
            <label style="width: 200px">Image</label>
            <input type="file" name="img" required>
        </div>

        <div style="padding: 15px;">
            <label style="width: 200px">Submit</label>
            <input class="btn btn-success" type="submit" name="submit">
        </div>
        </form>

</div>
</div>


@include('admin.footer')
