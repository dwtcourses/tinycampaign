<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
/**
 * Media Library View
 *  
 * @license GPLv3
 * 
 * @since       2.0.6
 * @package     tinyCampaign
 * @author      Joshua Parker <joshmac3@icloud.com>
 */
$app = \Liten\Liten::getInstance();
$app->view->extend('_layouts/dashboard');
$app->view->block('dashboard');
TinyC\Config::set('screen_parent', 'media');
?>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link href="vendor/studio-42/elfinder/css/elfinder.full.css" type="text/css" rel="stylesheet" />
<link href="vendor/studio-42/elfinder/css/theme.css" type="text/css" rel="stylesheet" />
<script src="vendor/studio-42/elfinder/js/elfinder.full.js" type="text/javascript"></script>
<script type="text/javascript">
    $().ready(function () {
        var elf = $('#elfinder').elfinder({
            url: '<?= get_base_url(); ?>dashboard/media-connector/',
            modal: true,
            resizable: false
        }).elfinder('instance');
    });
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box box-solid">
        <div class="box-header with-border">
            <i class="fa fa-camera"></i>
            <h3 class="box-title"><?= _t('Media Library'); ?></h3>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

    <?= _tc_flash()->showMessage(); ?>

        <div class="box box-default">
            <div class="box-body">
                <div id="elfinder"></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $app->view->stop(); ?>