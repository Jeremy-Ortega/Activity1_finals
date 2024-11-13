<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;">
        <div>{{ $user->name }}</div>
        <div>{{ $profile->bio }}</div>
        <div>{{ $profile->gender }}</div>
        Courses:
        @foreach ($courses as $course )
        
        <div><a href="/course/{{ $course->id }}">{{ $course->course_name }}(Course)</a></div>
            
        @endforeach
        </section>


    {{-- papakita lahat ng user profiles - and details ng user 
    user profiles and related user details

    bali si profile at yung user ipapakita
    
    .Show All Users via Profile Model

    profile papakita
    user details - 
 --}}

</body>
</html>
