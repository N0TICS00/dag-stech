@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{Session::get("error")}}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-info" role="alert">
    {{Session::get("success")}}
</div>
@endif