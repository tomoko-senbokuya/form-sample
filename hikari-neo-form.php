<?php
include 'hikari-neo-form_base.php';
?>
<form action="" method="post">
<?php

$hinmok = new InputTypeRadio();
  $hinmok_attr = [
    'type'=>'radio',
    'name'=>'hinmok',
    'value'=>['新規申し込み','転用申し込み'],
    'label'=>['新規申し込み','転用申し込み'],
    'required'=>'true'
  ];
 $hinmok->set_attr($hinmok_attr);
 echo '<p>', $hinmok->out_attr();


 $od_year = new InputType();
  $od_year_arr=[
    'type'=>'text',
    'name'=>'od-year',
    'label'=>'年',
    'required'=>'true'
  ];
  $od_year->set_attr($od_year_arr);
  echo '<p>令和 ', $od_year->out_attr();

  $contractor_name = new InputTypeText();
  $contractor_name_arr=[
    'type'=>'text',
    'name'=>'contractor-name',
    'label'=>'ご契約者名義(漢字)',
    'required'=>'true'
  ];
  $contractor_name->set_attr($contractor_name_arr);
  echo '<p> ', $contractor_name->out_attr();


  $submit = new InputType();
  $submit_arr=[
    'type'=>'submit',
    'value'=>'送信'
  ];
  $submit->set_attr($submit_arr);
  echo '<p>', $submit->out_attr();
  ?>


  </form>

<!-- 
［一つの配列を回しながら別の破裂も回す方法］
$value=['A','B'];
$label=['C','D'];
foreach ($value as $key => $val){
  echo '<li>',$val , $label[$key];
  // $labelの１つ目、２つ目が順に取り出せる
}
-->

<!-- 
［参考］
abstract class InputType{}
　→abstract修飾子をつけると抽象クラスになる。
   この場合継承専用になるので、直接インスタンス化できなくなる。
 -->