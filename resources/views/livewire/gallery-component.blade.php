<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="border-left: 3px solid #9a533d;padding-left: 15px;font-weight: 900">フォトライブラリ</h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 thuvienanh">
                @foreach ($posts as $post)

                    <div class="image">
                        <a href="{{ asset('images/Gallerys') }}/{{ $post->image }}" data-toggle="lightbox" data-title="{{$post->title}}" data-footer="{{$post->descripsitone}}
                    ">
                            <img class="myimg" src="{{ asset('images/Gallerys') }}/{{ $post->image }}" alt="">
                            <p>{{$post->title}}</p>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
