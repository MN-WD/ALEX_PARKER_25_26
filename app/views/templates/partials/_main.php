<div id="main">
    <div class="container">
    <div class="row">
        <?php include '../app/views/templates/partials/_nav.php'; ?>

        <!-- Blog Post (Right Sidebar) Start -->
        <div class="col-md-9">
        <div class="col-md-12 page-body">
            <div class="row">
            <div class="col-md-12 content-page">

                <!-- Blog Post Start -->
                <?php echo $content; ?>
                <!-- Blog Post End -->

            </div>
            </div>
        </div>

        <?php include '../app/views/templates/partials/_footer.php'; ?>
        </div>
        <!-- Blog Post (Right Sidebar) End -->
    </div>
    </div>
</div>

<!-- Back to Top Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- Back to Top End -->