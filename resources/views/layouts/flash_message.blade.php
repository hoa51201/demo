@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="width:100px;height;100px">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('cart_success'))
<div class="alert alert-info alert-block">
    <div style="width:100px;height;100px;background-color:green;color:white;text-align:center;
    ">
         <strong>{{ $message }}</strong>
    </div>
    
</div>
@endif