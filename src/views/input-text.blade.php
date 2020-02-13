<div class="form-group">
    <label for="{{$inputName}}">{{__($title)}}</label>
<input type="text" class="form-control {{$classes??''}}" name="{{$inputName}}"
     {{isset($id)?"id=$id":''}} {{($required)?"required":''}}
        {{isset($placeholder)?"placeholder=__($placeholder)":''}} value="{{old($inputName)}}">
    @if ($errors->has($inputName))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($inputName) }}</strong>
    </span>
    @endif
</div>
