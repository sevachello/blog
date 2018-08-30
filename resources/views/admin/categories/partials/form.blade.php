<label for="">Status</label>
<select name="published" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title of category" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Automatic generate" value="{{$category->slug or ""}}" readonly>

<label for="">Parent category</label>
<select name="parent_id" class="form-control">
    <option value="0"> -- main -- </option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>
<hr>
<input type="submit" class="btn btn-primary" value="Save">