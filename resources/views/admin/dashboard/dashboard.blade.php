<div>
    <p>Admin Dashboard</p>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <input type="submit" value="log-out">
    </form>
    {{-- <a href="{{ route('admin.profile') }}">Profile</a> --}}
</div>
