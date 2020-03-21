<form action="{{ route('contact.store') }}" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary" style="margin: 0 auto; display: block;">SEND MESSAGE</button>
</form>
