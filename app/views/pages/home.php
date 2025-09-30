<!-- Blog Post Start -->
<?php foreach ($posts as $post) : ?>
<div class="col-md-12 blog-post row">
<div class="post-title">
    <a href="single.html">
    <h1>
        <?php echo $post['title']; ?>
    </h1>
    </a>
</div>
<div class="post-info">
    <?php echo $post['created_at']; ?> | <span>Life style</span>
</div>
<p>
    <?php echo \Core\Helpers\truncate($post['text']); ?>
</p>
<a
    href="single.html"
    class="
    button button-style button-anim
    fa fa-long-arrow-right
    "
    ><span>Read More</span></a
>
</div>
<?php endforeach; ?>
<!-- Blog Post End -->