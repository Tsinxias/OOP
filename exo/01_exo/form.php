<?php
class Form {
//----------START FORM----------//
  function startForm($redirection, $sendMethod) {
    return '<form class="" action="'.$redirection.'" method="'.$sendMethod.'">';
  }

//----------KIND OF INPUTS----------//

  function inputText($inputName, $inputType) {
      return $inputName . '<input type="'.$inputType.'" name="" value="">';
  }


  function selectOpen($selectName) {
    return $selectName.' <select class="" name="">';
  }

  function option($optionName) {
    return '<option value="'.$optionName.'">'.$optionName.'</option>';
  }

  function selectClose() {
    return '</select>';
  }


  function textarea($row, $cols) {
    return 'Message : <textarea name="name" rows="'.$row.'" cols="'.$cols.'"></textarea>';
  }


  function inputChoice($inputName, $inputType, $inputChoiceName, $inputValue = '') {
      return $inputName . '<input type="'.$inputType.'" name="'.$inputChoiceName.'" value="'.$inputValue.'">'.$inputValue;
  }

  function submit($btnName) {
    return '<button type="submit" name="button">'.$btnName.'</button>';
  }
//----------END FORM----------//

  function endForm() {
    return '</form>';
  }
}
 ?>
