<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th><th scope="col">Name</th><th>Actions <a href="new.php" class="btn btn-sm btn-dark">New</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td><td>{{ $product->name }}</td>
                        <td>
                            <a href="/products/{{ $product->id }}/delete"><i class="bi bi-trash"></i></a>
                            <a href="/products/{{ $product->id }}/update.php"><i class="bi bi-pencil"></i></a>
                            <a href="/products/{{ $product->id }}"><i class="bi bi-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
