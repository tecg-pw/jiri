<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $event->course_name }} - {{ $event->academic_year }} - session n° {{ $event->exam_session }}</h1>
    <ul>
        @foreach($event->students as $student)
        <li>{{ $student->name }} - {{ $student->performances->first()->manual_score }}</li>
        @endforeach
    </ul>
</body>
</html>
