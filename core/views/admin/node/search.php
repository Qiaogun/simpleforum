<?php
/**
 * @link http://simpleforum.org/
 * @copyright Copyright (c) 2015 SimpleForum
 * @author Jiandong Yu admin@simpleforum.org
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\ActiveForm;

$this->title = Yii::t('app/admin', 'Search channels');
?>

<div class="row">
<!-- sf-left start -->
<div class="col-lg-8 sf-left">

<ul class="list-group sf-box">
    <li class="list-group-item sf-box-header sf-navi">
        <?php
            echo Html::a(Yii::t('app/admin', 'Forum Manager'), ['admin/setting/all']), '&nbsp;/&nbsp;', Html::a(Yii::t('app/admin', 'Channels'), ['admin/node/index']), '&nbsp;/&nbsp;', $this->title;
        ?>
    </li>
    <li class="list-group-item list-group-item-info"><strong><?php echo Yii::t('app', 'Search'); ?></strong></li>
    <li class="list-group-item sf-box-form">
<?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'id' => 'form-setting',
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-form-label col-sm-2 text-sm-right',
            'wrapper' => 'col-sm-10',
        ],
    ],
]); ?>
<?php
        echo $form->field($model, "name");
?>
        <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
            <?php echo Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn sf-btn', 'name' => 'login-button']); ?>
            </div>
        </div>
<?php
ActiveForm::end();
?>
    </li>
    <li class="list-group-item list-group-item-info"><strong><?php echo Yii::t('app', 'Channel'); ?></strong></li>
    <li class="list-group-item">
        <ul>
        <?php
            if( !empty($node) ) {
                echo '<li>[', $node['id'], ']&nbsp;', Html::encode($node['name']), '&nbsp;(', $node['ename'], ')&nbsp;|&nbsp;', Html::a(Yii::t('app', 'Edit'), ['admin/node/edit', 'id'=>$node['id']]), '</li>';
            } else {
                echo Yii::t('app', '{attribute} doesn\'t exist.', ['attribute'=>Yii::t('app', 'Channel')]);
            }
        ?>
        </ul>
    </li>
</ul>

</div>
<!-- sf-left end -->

<!-- sf-right start -->
<div class="col-lg-4 sf-right">
<?php echo $this->render('@app/views/common/_admin-right'); ?>
</div>
<!-- sf-right end -->

</div>
