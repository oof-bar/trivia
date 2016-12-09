<section class="dashboard">
  <div class="wrap">
    <div class="stats">
      <div class="stat">
        <div class="data"><?= Help::total_quizzes() ?></div>
        <h3>Games Played</h3>
      </div>
      <div class="stat">
        <div class="data"><?= Help::quiz_with_high_score()->team_score() ?></div>
        <h3>Highest Score</h3>
      </div>
      <div class="stat">
        <div class="data"><?= Help::quizzes_within(3)->count() ?></div>
        <h3>Times in Top 3</h3>
      </div>
      <div class="stat">
        <div class="data"><?= page('quizzes')->missed()->int() ?></div>
        <h3>Weeks Missed</h3>
      </div>
      <div class="stat">
        <div class="data"><?= Help::average_quiz_score() ?></div>
        <h3>Average Score</h3>
      </div>
      <div class="stat">
        <div class="data"><?= Help::quizzes_within(1)->count() ?></div>
        <h3>Games Won</h3>
      </div>
    </div>
  </div>
</section>
