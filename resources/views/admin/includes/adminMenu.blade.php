<!-- admin Nav Menu end -->
<div class="col-sm-2 py-4 bg-warning">
    <ul class="nav flex-column">
        <a class="nav-link" href="{{ route('categories.index') }}">Manage-Categories</a>
        <br>
        <a class="nav-link" href="{{ route('posts.create') }}">Create Posts</a>
        <a class="nav-link" href="{{ route('posts.index') }}">List Posts</a>
        <br>
        <a class="nav-link" href="{{ route('users.create') }}">Create Users</a>
        <a class="nav-link" href="{{ route('users.index') }}">List Users</a>
    </ul>
</div>