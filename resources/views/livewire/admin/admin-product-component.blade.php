<div class="fix-top">
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="min-width: 800px;overflow: auto">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                全て商品
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ route('admin.addproduct') }}" class="btn btn-success pull-right">商品を追加する</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{ Session::get('Tin_nhan_thanh_cong') }}</div>
                        @endif
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        画像
                                    </th>
                                    <th>
                                        商品名
                                    </th>
                                    <th>
                                        ストック
                                    </th>
                                    <th>
                                        価格
                                    </th>
                                    <th>
                                        カテゴリー
                                    </th>
                                    <th>
                                        日付
                                    </th>
                                    <th>
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('images') }}/{{ $product->image }}"
                                                width="60"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a
                                                href="{{ route('admin.editproduct', ['product_slug' => $product->slug]) }}"><i class="far fa-edit"></i></i></a>
                                            <a class="ml-2" href="#" onclick="confirm('削除しますか？') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteProduct({{ $product->id }})"><i class="far fa-times-circle text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
