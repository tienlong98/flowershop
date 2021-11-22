<div class="fix-top" >
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">全てカテゴリ－</div>
                            <div class="col-lg-6">
                                <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">カテゴリを追加する</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                        <div class="alert alert-success">{{Session::get('Tin_nhan_thanh_cong')}}</div>
                    @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>カテゴリ名</th>
                                    <th>スラッグ名</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <a href="{{route('admin.editcategory', ['category_slug' => $category->slug])}}"><i class="far fa-edit"></i></a>
                                        <a class="ml-2" onclick="confirm('削除されますか？') || event.stopImmediatePropagation()" href="#" wire:click.prevent="deleteCategory({{$category->id}})"><i class="far fa-times-circle text-danger"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
