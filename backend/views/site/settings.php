<?php

use yii\bootstrap\ActiveForm;
use common\components\keyStorage\FormWidget;

/* @var $this yii\web\View */
/* @var $model common\models\KeyStorageItem */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('backend', 'Application settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-settings">

    <?= FormWidget::widget([
        'model' => $model,
        'formClass' => ActiveForm::className(),
        'submitText' => Yii::t('backend', 'Save'),
        'submitOptions' => ['class' => 'btn btn-primary'],
    ]) ?>

</div>
