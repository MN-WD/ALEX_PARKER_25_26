<div class="row">
<div class="sub-title">
    <a href="#" title="Go to Home Page"
    ><h2>Back Home</h2></a
    >
    <a href="#comment" class="smoth-scroll"
    ><i class="icon-bubbles"></i
    ></a>
</div>

<div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">
    <div>
        <img src="images/blog/1.jpg" alt="">
    </div>

    <!-- Post Headline Start -->
    <div class="post-title">
        <h1>
            <?php echo $post['title']; ?>
        </h1>
    </div>
    <!-- Post Headline End -->

    <!-- Post Detail Start -->
    <div class="post-info">
        <span><?php echo date('d.M.Y', strtotime($post['created_at']));?></span> | <span><?php echo $post['name']; ?></span>
    </div>
    <!-- Post Detail End -->

    <p>
        <?php echo $post['text']; ?>
    </p>

    <!-- Post Blockquote (Italic Style) Start -->
    <blockquote class="margin-top-40 margin-bottom-40">
        <p>
            <?php echo $post['quote']; ?>
        </p>
    </blockquote>
    <!-- Post Blockquote (Italic Style) End -->

    <!-- Post Buttons -->
    <div>
        <a href="posts/<?php echo $post['postID']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/editForm" type="button" class="btn btn-primary">
            Edit Post
        </a>
        <a
        href="posts/<?php echo $post['postID']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/delete"
        type="button"
        class="btn btn-secondary"
        role="button">
            Delete Post
        </a>
    </div>
    <!-- Post Buttons End -->
    </div>
</div>
</div>