<?php
use yii\helpers\Html;
use yii\web\View;

use source\common\assets\AppAsset as commonAppasset;
use source\frontend\assets\AppAsset as frontendAppsset;

commonAppasset::register($this);
frontendAppsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>


<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>