<?php
///////////////////////////////////////////
// 以下基底クラス記述
///////////////////////////////////////////
class InputType{
  protected $type ='' ;
  protected $name ='' ;
  protected $value ='' ; //値が無い場合に備える 
  protected $class ='' ;
  protected $id ='' ;
  protected $required ='' ;
  protected $disabled ='' ;
  protected $label ='' ;

// 値をセットするメソッド
  function set_attr($attr){
    foreach ($attr as $key => $value) {
    // $keyには"type"が$valueには"radio"が入っている
      $this->$key = $value;
    }
  }

  /*
    ラベルが後ろにつくタイプ
  */
  function out_attr(){
    return "<label>
    <input type='$this->type' 
           name='$this->name'
           value='$this->value' 
           required='$this->required'>
    $this->label</label>";
  }
}// class end

/*
  ラジオボタン専用の子クラス
  */
class InputTypeRadio extends InputType{
  protected $value = [] ; // 一応初期化
  protected $label = [] ; 

  function out_attr(){
    $html = ''; // タグを連結して溜め込む変数も初期化
    foreach ($this->value as $key => $val) {
      $html .= "<label><input type='$this->type' name='$this->name'
      value='$val' required='$this->required'>
      {$this->label[$key]}</label>";
    }
    return $html;
  }
}


/*
  ラベルが前につくタイプ の子クラス
*/

class InputTypeText extends InputType{
  // 親クラスのメソッドを上書きする
  function out_attr(){
    return "<label>$this->label
      <input type='$this->type' name='$this->name'  required='$this->required'>
    </label>";
  }
}
