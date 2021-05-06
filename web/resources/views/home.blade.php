<div class="row">
    <div class="col-12">
        <form action="" method="get">
            <div class="form-group">
                <div class="col-4">
                    <select name="product_type" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($products_type as $product_type)
                        <option value="{{ $product_type }}">{{ $product_type }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-4">
                    <input type="search" name="product_name" placeholder="Nombre de Producto" />
                </div>

                <div class="col-3">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Fecha Ingreso</th>
                    <th>Unidades Vendidas</th>
                    <th>Ventas</th>
                    <th>Ultima Semana</th>            
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_type }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->date_price }}</td>
                    <td>{{ $product->table2->enter_date->format('m-d-Y') }}</td>
                    <td>{{ $product->table3->qty_sale }}</td>
                    <td>{{ $product->product_price * $product->table3->qty_sale }}</td>
                    <td>{{ $product->table3->number_week }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>