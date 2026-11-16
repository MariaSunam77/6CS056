<!DOCTYPE html>
<html>
<head><title>Edit Course</title></head>
<body>
    <h1>Edit Course</h1>
    @if($errors->any())
        <ul style="color: red;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    @endif
    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf @method('PUT')
        <div><label>Name:</label> <input type="text" name="name" value="{{ old('name', $course->name) }}"></div><br>
        <div><label>Description:</label> <input type="text" name="description" value="{{ old('description', $course->description) }}"></div><br>
        <div><label>Duration (weeks):</label> <input type="number" name="duration" value="{{ old('duration', $course->duration) }}"></div><br>
        <div><label>Fee:</label> <input type="number" step="0.01" name="fee" value="{{ old('fee', $course->fee) }}"></div><br>
        <div>
            <label>Difficulty:</label>
            <select name="difficulty">
                <option value="Easy" {{ $course->difficulty == 'Easy' ? 'selected' : '' }}>Easy</option>
                <option value="Medium" {{ $course->difficulty == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Hard" {{ $course->difficulty == 'Hard' ? 'selected' : '' }}>Hard</option>
            </select>
        </div><br>
        <div>
            <label>Active:</label>
            <select name="is_active">
                <option value="1" {{ $course->is_active ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$course->is_active ? 'selected' : '' }}>No</option>
            </select>
        </div><br>
        <button type="submit">Update Course</button>
    </form><br>
    <a href="/courses">Back to Courses</a>
</body>
</html>