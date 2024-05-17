<div>
 
    <form wire:submit="save" class="dzForm">
        <div class="row">
         <div class="col-md-6">
            <div class="form-group">
            <div class="input-group">
        <input type="text" wire:model="fname" required class="form-control" placeholder="نام">
        @error('dzform.fname') <span class="error">{{ $errorMessage}}</span> @enderror
          </div>
            </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                     <div class="input-group"> 
        <input type="text" wire:model="lname" class="form-control" name="dzName" placeholder="نام خانوادگی
        ">   @error('dzform.lname') <span class="error">{{ $errorMessage}}</span> @enderror
          </div>
            </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
        <input type="text" class="form-control" name="dzName" wire:model="tel" placeholder="تلفن"
        >   @error('dzform.tel') <span class="error">{{ $errorMessage}}</span> @enderror
         </div>
            </div>
                </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
        <input type="textarea" class="form-control" wire:model="message"  name="dzName" placeholder="پیام شما"
        >   @error('dzform.message') <span class="error">{{ $errorMessage}}</span> @enderror
        </div>
            </div>
                </div>
                 <div class="col-md-12">
        <button type="submit" class="site-button">ارسال</button>
        </div>
         </div>
</form>
@if($successMessage)
<div>{{$successMessage}}</div>
@endif
@if($errorMessage)
<div>{{$$errorMessage}}</div>
@endif
    </div>
