<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
    if(isset($_GET['load_type']) and $_GET['load_type'] == 'ajax'){
        $is_ajax=true;
    }
    else{
        $is_ajax=false;
    }
?>
<?php if(!$is_ajax):  ?>
    <?php
        $this->need('header.php');
    ?>
<?php else:  ?>
    <a id="content-title" style="display:none"><?php $this->archiveTitle('','',' - '); ?><?php $this->options->title(); ?></a>
<?php endif ?>

<article class="post">
    <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <div class="post-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>
<?php if(!$is_ajax):  ?>
    </div>
    <?php $this->need('footer.php'); ?>
<?php endif ?>
