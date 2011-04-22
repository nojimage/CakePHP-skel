<?php
/* @var $this CodeCompletionView */
?>
<?php echo $this->Html->docType('xhtml-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title>
    <?php __('CakePHP: the rapid development php framework:'); ?>
    <?php echo $title_for_layout; ?>
</title>
<?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('cake.generic');
    echo $this->Html->script(array('jquery-1.5.2.min'));
    echo $scripts_for_layout;
?>
</head>
<body>
<div id="container">
<div id="header">
    <h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
</div>
<div id="content">
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
</div>
<div id="footer">
    <?php
    echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework', true), 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
    );
    ?>
</div>
</div>
<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>