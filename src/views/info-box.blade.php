<div class="info-box">
    <!-- Apply any bg-* class to to the icon to color it -->
    <span class="info-box-icon bg-{{$color}}"><i class="{{$icon}}"></i></span>
    <div class="info-box-content">
        <span class="info-box-text">{{__($title)}}</span>
        <span class="info-box-number">{{__($value)}}</span>
        @isset($percent)
        <div class="progress">
            <div class="progress-bar" style="width: {{$percent}}%"></div>
        </div>
        @endisset
        @isset($description)
        <span class="progress-description">
            {{__($description)}}
        </span>
        @endisset
    </div>
    <!-- /.info-box-content -->
</div>
