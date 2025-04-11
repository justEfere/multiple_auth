<div>
    <form action="{{ route('super-admin.logout') }}" method="post">
        @csrf
        <input type="submit" value="log-out">
    </form>
    <a href="{{ route('super-admin.profile.edit') }}">Profile</a>
</div>
