<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf
    <label for="real_name">Real Name:</label>
    <input type="text" name="real_name" required>
    
    <label for="hero_name">Hero Name:</label>
    <input type="text" name="hero_name" required>
    
    <label for="photo_url">Photo URL:</label>
    <input type="url" name="photo_url" required>
    
    <label for="additional_info">Additional Info:</label>
    <textarea name="additional_info"></textarea>
    
    <button type="submit">Create Superhero</button>
</form>