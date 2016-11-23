<section class="stats">
  <div class="wrap">
    <div class="spreadsheet">
      <div class="scroll">
        Scroll
      </div>
      <table>
        <tr class="header">
          <th>Date</th>
          <th>Score</th>
          <th>Place</th>
          <th>Teams</th>
          <th>Members</th>
          <th>Location</th>
          <th>Quiz Master</th>
          <th>Team Name</th>
        </tr>
        <? foreach ($quizzes as $quiz) { ?>
          <tr class="entries">
            <td><?= $quiz->date('m.d.y') ?></td>
            <td><?= $quiz->team_score() ?></td>
            <td><?= $quiz->place() ?></td>
            <td><?= $quiz->participating_teams() ?></td>
            <td><?= count($quiz->team_members()->split()) ?></td>
            <td><?= $quiz->location()->toPage()->title() ?></td>
            <td><?= $quiz->quiz_master()->toPage()->title() ?></td>
            <td><?= $quiz->team_name()->toPage()->title() ?></td>
          </tr>
        <? } ?>
      </table>
    </div>
  </div>
</section>
