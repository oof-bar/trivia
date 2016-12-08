<? class Help {
  public static $quizzes;

  public static function body_classes ($extra = '') {
    $classes = [page()->uid(), page()->template(), $extra];
    return implode(' ', array_unique($classes));
  }

  # Asset Fetcher
  public static function asset ($type, $filename) {
    return site()->url() . '/assets/' . $type . '/' . $filename;
  }

  # Asset Inliner
  public static function inline_asset ($type, $filename) {
    return f::read(kirby()->roots->assets() . DS . $type . DS . $filename);
  }

  # Content Inliner
  public static function inline_content ($file) {
    return f::read($file);
  }

  # Responsive SVGs
  public static function inline_svg ($filename, $dimensions) {
    list($x, $y) = $dimensions;
    $ratio = ($y / $x) * 100;
    $spacer = html::tag('div', '', array(
      'style' => "padding-top: {$ratio}%"
    ));
    return html::tag('div', static::inline_asset('images', $filename) . $spacer, array(
      'class' => 'responsive-svg'
    ));
  }

  # Resizer
  public static function resize ($image, $size = false) {
    switch ($size) {
      # Custom Image Size IDs
      /*
      case 'normal':
        return thumb($image, [
          'width' => 1280,
          'quality' => 75
        ]);
        break;
      */
      default:
        return $image;
    }
  }

  # Stats Gathering

  public static function all_quizzes () {
    if ( isset(static::$quizzes) ) {
      return static::$quizzes;
    } else {
      return static::$quizzes = page('quizzes')->children()->visible();
    }
  }

  public static function total_quizzes () {
    return static::all_quizzes()->count();
  }

  public static function quiz_with_high_score () {
    return static::all_quizzes()->sortBy('team_score', 'desc')->first();
  }

  public static function quizzes_within ($place = 3) {
    return static::all_quizzes()->filter(function ($quiz) use ($place) {
      return $quiz->place()->int() <= $place;
    });
  }

  public static function average_quiz_score ($quizzes = null) {
    if ( is_null($quizzes) ) $quizzes = static::all_quizzes();

    $quizzes = $quizzes->filter(function ($quiz) {
      return $quiz->team_score()->isNotEmpty();
    });

    $scores = [];

    foreach ( $quizzes as $quiz ) {
      $scores[] = $quiz->team_score()->int();
    }

    return round(array_sum($scores) / count($scores));
  }
}
