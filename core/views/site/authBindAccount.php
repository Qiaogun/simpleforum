<?php
/**
 * @link http://simpleforum.org/
 * @copyright Copyright (c) 2015 SimpleForum
 * @author Jiandong Yu admin@simpleforum.org
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = Yii::t('app', 'Link your account');
?>

<div class="row">
<!-- sf-left start -->
<div class="col-lg-8 sf-left">

<div class="card sf-box">
    <div class="card-header sf-box-header sf-navi">
        <?php echo Html::a(Yii::t('app', 'Home'), ['topic/index']), '&nbsp;/&nbsp;', $this->title; ?>
    </div>
    <div class="card-body sf-box-form">
<?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'id' => 'form-auth-bind-account',
            'fieldConfig' => [
                'horizontalCssClasses' => [
                    'label' => 'col-form-label col-sm-3 text-sm-right',
                    'wrapper' => 'col-sm-9',
                ],
            ],
      ]); ?>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9" style="padding-top:7px;">
                <?php echo Yii::t('app', 'You have signed in with your {name} account.', ['name'=>$authInfo['sourceName']]); ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-sm-3 text-sm-right"><?php echo Yii::t('app', 'Username'); ?></label>
            <div class="col-sm-9" style="padding-top:7px;">
                <strong><?php echo $authInfo['username']; ?></strong>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-sm-3 text-sm-right"><?php echo Yii::t('app', 'Don\'t have an account?'); ?></label>
            <div class="col-sm-9">
                <?php echo Html::a(Yii::t('app', 'Create an account and bind it'), ['auth-signup'], ['class'=>'btn sf-btn']); ?>
            </div>
        </div>
        <br /><strong><?php echo Yii::t('app', 'Bind your account'); ?></strong><hr>
        <?php echo $form->field($model, 'username')->textInput(['maxlength'=>20]); ?>
        <?php echo $form->field($model, 'password')->passwordInput(['maxlength'=>20]); ?>
        <div class="form-group">
            <div class="offset-sm-3 col-sm-9">
            <?php echo Html::submitButton(Yii::t('app', 'Bind'), ['class' => 'btn sf-btn', 'name' => 'login-button']); ?>
            &nbsp;&nbsp;<?php echo Html::a(Yii::t('app', 'Forgot password?'), ['site/forgot-password']); ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

</div>
<!-- sf-left end -->

<!-- sf-right start -->
<div class="col-lg-4 sf-right">
<?php echo $this->render('@app/views/common/_right'); ?>
</div>
<!-- sf-right end -->

</div>
