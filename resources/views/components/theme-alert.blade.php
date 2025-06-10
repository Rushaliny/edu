@if (Session::has('message'))
<div class="basket-display session-message">
    <div data-notify="container" class="col-xxl-3 col-lg-5 col-md-6 col-sm-7 col-12 alert  animated fadeInDown"
        role="alert" data-notify-position="top-right"
        style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; background: #b7cdf7; !important;
        color: #fff !important; z-index: 1031; top: 20px; right: 20px;">
            <span data-notify="message">{{ Session::get('message') }}</span>
    </div>
</div>

@endif
