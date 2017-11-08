<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\twitchtv\Assets::register($this);
?>

<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('TwitchtvModule.base', '<strong>Twitch</strong> Chat'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe frameborder="0" 
        scrolling="no" 
        id="twitchTVFrame" 
        src="<? $twitchtvUrl ?>" 
        height="500" 
        width="100%">
</iframe>

<?= Html::endTag('div'); ?>
</div>
</div>
