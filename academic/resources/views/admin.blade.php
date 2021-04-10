<h1>hello</h1>
@foreach($admins as $admin)
{{$admin['USER_NAME']}}
@endforeach

<form action="{{ url('admin') }}" method="POST" role="form">
        <legend>Test submit form</legend>
        {{ csrf_field()}}
        <div class="form-group">
            <label for="">label</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <a href="{{ url('/admin/1') }}" class="btn btn-xs btn-info pull-right">Edit</a>
