<div>
    <form method="POST" action="/cities/store">
        @csrf
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required>
        <button type="submit">Add City</button>
    </form>
</div>
