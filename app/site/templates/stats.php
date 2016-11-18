<? snippet('header') ?>
  <section class="stats">
    <div class="wrap">
      <div class="spreadsheet">
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
              <td><?= $quiz->team_members() ?></td>
              <td><?= $quiz->location() ?></td>
              <td><?= $quiz->quiz_master() ?></td>
              <td><?= $quiz->team_name() ?></td>
            </tr>
          <? } ?>
        </table>
      </div>
    </div>
  </section>
<? snippet('footer') ?>
