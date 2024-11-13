<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All User</title>
</head>
<body>

    <section style="display: flex; flex-direction:column; gap:20px; justiify-content:center; align-items:center;">
        <div>
            <div>all Users</div>
        
        @foreach ($profiles as $profile )
        
            <div><a href="/profile/{{ $profile->user->id }}">{{ $profile->user->name }}</a></div>
            
        @endforeach
        </div>
        
        <div>
           <div>All courses</div>
        @foreach ($courses as $course )
        
            <div><a href="/course/{{ $course->id }}">{{ $course->course_name }}(Course)</a></div>
        
        @endforeach
         
        </div>
        </section>


    {{-- .Show All Courses from a User

    show lahat ng course na related sa user id selected --}}

    
</body>
</html>