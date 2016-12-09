<? return function ($site, $pages, $page) {
  return [
    'quizzes' => Help::all_quizzes()->flip()
  ];
};
