<?php
use yii\helpers\Html;

/**
 * @var $model            \common\models\Screen
 * @var $newComments      integer
 * @var $lazyLoadPriority string
 */

// Default values
$newComments      = isset($newComments) ? $newComments : 0;
$lazyLoadPriority = isset($lazyLoadPriority) ? $lazyLoadPriority : 'medium';
?>

<div class="box screen-item" data-screen-id="<?= $model->id ?>">
    <div class="content">
        <?php if ($newComments > 0): ?>
            <div class="pin pin-warning comments-notification" data-cursor-tooltip="<?= Yii::t('app', 'Has unread comments')?>">
                <i class="ion ion-ios-bell"></i>
            </div>
        <?php endif ?>

        <figure class="featured">
            <img data-src="<?= $model->getThumbUrl('medium', true) ?>" class="img lazy-load" alt="<? Html::encode($model->title) ?>" data-priority="<?= $lazyLoadPriority ?>">

            <div class="featured-overlay"></div>
            <div class="overlay-item top-left">
                <div class="form-group">
                    <input type="checkbox" id="screen_bulk_<?= $model->id ?>" class="screen-bulk-checkbox">
                    <label for="screen_bulk_<?= $model->id ?>"></label>
                </div>
            </div>
            <div class="overlay-item top-right">
                <div class="dropdown-handle more-options">
                    <i class="ion ion-android-more-horizontal" data-bind="clickToggle" data-target=".dropdown-menu" data-class="active" data-isolate="parent"></i>
                    <div class="dropdown-menu small compact">
                        <ul>
<!--
                            <li>
                                <a href="#"><?= Yii::t('app', 'Move') ?></a>
                            </li>
-->
                            <li>
                                <a href="#" class="danger-link screen-delete"><?= Yii::t('app', 'Delete') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="overlay-item center">
                <span class="circle-icon open-screen-edit">
                    <i class="ion ion-ios-settings-strong"></i>
                </span>
            </div>
        </figure>
    </div>
</div>
