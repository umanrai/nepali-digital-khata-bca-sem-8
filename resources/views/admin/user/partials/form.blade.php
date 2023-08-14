<div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleInputUsername"
           value="{{ old('name', $data['user']->name ?? '') }}"
           placeholder="username">
    @if($errors->has('name'))
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}"
           value="{{ old('email', $data['user']->email ?? '') }}"
           id="exampleInputEmail1" placeholder="Enter email">
    @if($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="password">
    @if($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
    @endif
</div>

<div class="form-group">
    <label for="exampleInputPassword">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="password">
    @if($errors->has('confirm_password'))
        <div class="invalid-feedback">
            {{ $errors->first('confirm_password') }}
        </div>
    @endif
</div>
