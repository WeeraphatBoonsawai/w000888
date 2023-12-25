<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Customer</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('customer.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Province</th>
                    <th>Zipcode</th>
                    <th>Location</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Customers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fname}} {{ $item->lname}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_no }}</td>
                        <td>{{ $item->province }}</td>
                        <td>{{ $item->zipcode }}</td>
                        <td>{{ $item->location }}</td>
                        <td>
                            <form action="{{ route('customer.destroy',$item->id) }}" method="Post">
                                <a class="bg-white hover:bg-red-600 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" href="{{ route('customer.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-600 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <br>
        {!! $Customers->links() !!}
        <br>
        <center>
            <div class="inline-flex ">
                <a href="{{ url('/product_type') }}">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                    Product Type
                </button>
            </a>
            <a href="{{ url('/brand') }}">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                    Brand
                </button>
            </a>
            <a href="{{ url('/product') }}">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                    Product
                  </button>
                </a>
                <a href="{{ url('/promotion') }}">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        Promotion
                      </button>
                    </a>
                    <a href="{{ url('/customer') }}">
                        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                            Customer
                          </button>
                        </a>

                        <a href="{{ url('/category-chart') }}">
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                Category Chart
                              </button>
                            </a>
              </div>
            </center>
    </div>
</body>
</html>