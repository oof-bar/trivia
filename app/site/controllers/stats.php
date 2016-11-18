<? return function ($site, $pages, $page) {
  return [
    'quizzes' => page('quizzes')->children()->visible()
  ];
};
