<h1>This is my contact info</h1>

<a href="{{url('/')}}">back home</a>

<form action="{{route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Write your name"><br>
    <input type="email" name="email" placeholder="Write your email"><br>
    <button type="submit">submit</button>
</form>