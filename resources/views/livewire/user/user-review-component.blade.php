<div class="fix-top mb-5">
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-review text-center">レビューを追加する</h2>
                <p class="warring-mail text-center">あなたのメールアドレスが公開されることはありません。 必須フィールドは、マークされています *</p>
            </div>
            @if (Session::has('add-review-successful'))
            <div class="col-lg-12 alert alert-success">
                {{ Session::get('add-review-successful') }}
            </div>
        @endif
            <div class="col-lg-6 content-review">
                <form wire:submit.prevent="addReview">
                <div class="row comment-review">
                    <div class="col-lg-12 d-flex justify-content-start ">
                        <div class="rating-star">
                            <input type="radio" name="rating" id="star1" value="5" wire:model="rating">
                            <label for="star1"></label>
                            <input type="radio" name="rating" id="star2" value="4" wire:model="rating">
                            <label for="star2"></label>
                            <input type="radio" name="rating" id="star3" value="3" wire:model="rating">
                            <label for="star3"></label>
                            <input type="radio" name="rating" id="star4" value="2" wire:model="rating">
                            <label for="star4"></label>
                            <input type="radio" name="rating" id="star5" value="1" wire:model="rating">
                            <label for="star5"></label>        
                        </div>
                    </div>
                    
                    {{-- <div class="col-lg-6 mb-3">
                        <input type="text" name="" placeholder="名前*" id="" class="from_control" wire:model="name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="email" name="" placeholder="Eメール*" id="" class="from_control" wire:model="email" required>
        
                    </div> --}}
                    <div class="col-lg-12 text-center ">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="10" cols="40"
                            placeholder="コメント" wire:model="comment"></textarea>
                    </div>
                    <div class=" col-lg-12 text-center sendmess mt-5 mb-5 ">                           
                        <input type="submit" value=" 送信"  class="button-review text-center ">
                           
                        
                     
                </div>
                </div>
            </form>
            </div>
        
        </div>
    </div>
</div>
