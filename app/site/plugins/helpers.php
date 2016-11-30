<? class Help {
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
}
