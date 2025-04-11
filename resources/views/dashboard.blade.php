<div>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="logout">
    </form>
</div>
