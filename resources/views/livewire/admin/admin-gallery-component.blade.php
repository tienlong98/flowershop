<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="min-width: 800px;overflow: auto">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>全投稿</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <a href="{{ route('admin.addgallerys') }}" class="btn btn-success pull-right">新規投稿の追加</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive text-center" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>画像</th>
                                    <th>タイトル</th>
                                    <th>内容</th>
                                    <th style="width: 15%">年月日</th>
                                    <th style="width: 15%">アクション</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Session::has('message'))
                                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                                @endif
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td><img src="{{ asset('images/Gallerys') }}/{{ $post->image }}"
                                                width="120"></td>
                                        <td style="width: 18%">{{ $post->title }}</td>
                                        <td style="text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;
                                        -webkit-box-orient: vertical;overflow: hidden;padding-top: 0.75em;padding-left: 10px;padding-right: 10px;padding-bottom: 0px!important">{{ $post->descripsitone }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editgallerys', ['gallery_id' => $post->id]) }}"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="ml-2"
                                                onclick="confirm('削除しますか？') || event.stopImmediatePropagation()"
                                                href="#" wire:click.prevent="deleteGallery({{ $post->id }})"><i
                                                    class="far fa-times-circle text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
