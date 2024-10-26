<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <!-- fonts -->
    <link rel="stylesheet" href="{{asset('/frontend/assets/fonts/font.css')}}">

    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="{{asset('/../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}" />

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom Css Files -->
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/animation.css')}}">
    
    <!-- result css -->
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/result_style.css')}}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">QuizMaster</h1>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Leaderboard</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Test Your Knowledge</h2>
            <p>Take quizzes, track your score, and challenge your friends.</p>
            <a href="#" class="btn start-btn">Start Quiz</a>
        </div>
    </section>

    <!-- Quiz Section -->
    <section class="quiz-section">
        <div class="container">
            @foreach ($ques as $question)
            <div class="quiz-header">
                <h3>Question 1 of 5</h3>
                <p>{{ $question->ques }}</p>
            </div>
            <form class="quiz-options">
                <label><input type="radio" name="question" value="A"> A. {{ $question->opt_a }}</label>
                <label><input type="radio" name="question" value="B"> B. {{ $question->opt_b }}</label>
                <label><input type="radio" name="question" value="C"> C. {{ $question->opt_c }}</label>
                <label><input type="radio" name="question" value="D"> D. {{ $question->opt_d }}</label>
            </form>
            <button class="btn next-btn">Next</button>
            <button class="btn next-btn">Hint</button>
            @endforeach
        </div>
    </section>

    <!-- Leaderboard Section -->
    <section class="leaderboard">
        <div class="container">
            <h2>Leaderboard</h2>
            <ul class="leaderboard-list">
                <li>1. John Doe - 150 Points</li>
                <li>2. Jane Smith - 130 Points</li>
                <li>3. Michael Brown - 120 Points</li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 Tushar. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
