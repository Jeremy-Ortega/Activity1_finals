<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
</head>
<body>
    <section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;">
        <div>course Name:{{ $course->course_name }}(Course) </div>
        <div>Users:</div>
            @foreach ($users as $user)
            
                <div><a href="/profile/{{$user->id}}">{{ $user->name }}</a></div>
                
            @endforeach
        </section>

        
</body>
</html>