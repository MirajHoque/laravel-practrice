<form action="memberAdd" method="POST">
    @csrf
    <div>
        <label for="Name">Name</label>
        <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" placeholder="Enter your age" name="age">
    </div>
    <button type="submit">Register</button>
</form>