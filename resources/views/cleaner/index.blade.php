
    <div class="col-lg-8 col-md-10 mx-auto">
        <table class="table table-border">
          <thead>
            <tr>
              <th>#</th>
              <th>Your Service</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Date</th>
              <th>
                Activice
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->unit_price }}</td>
                <td>{{ $product->qty_in_stock }}</td>
              
                  </ul>
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  <hr>
