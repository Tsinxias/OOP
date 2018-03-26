<?php
class Html {
  function charsetMeta($charsetValue) {
    return '<meta charset="'.$charsetValue.'">';
  }

  function otherMeta($varName, $varValue, $contentValue) {
    return '<meta '.$varName.'="'.$varValue.'" content="'.$contentValue.'">';
  }

  function styleSheet($hrefStyleValue) {
    return '<link rel="stylesheet" href="'.$hrefStyleValue.'">';
  }

  function img($imgID, $srcValue, $imgHeight, $imgWidth) {
    return '<img id="'.$imgID.'" src="'.$srcValue.'" height="'.$imgHeight.'" width="'.$imgWidth.'" alt="">';
  }

  function a($hrefAValue, $aName) {
    return '<a href="'.$hrefAValue.'">'.$aName.'</a>';
  }

  function javaScript($jsSRC) {
    return '<script src="'.$jsSRC.'" charset="utf-8"></script>';
  }
}

 ?>
