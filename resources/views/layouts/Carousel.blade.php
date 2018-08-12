<!-- FANS-->
<section id="fans">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="img/fans.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">School Management</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Carousel Slides / Quotes -->
                                    <div class="carousel-inner">

                                        <!-- Quote 1 -->
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>
                                                    <small><strong>Vulputate M., Dolor</strong></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Quote 2 -->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</p>
                                                    <small><strong>Fringilla A., Vulputate Sit</strong></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Quote 3 -->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>
                                                    <small><strong>Aenean A., Justo Cras</strong></small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        //carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 10000,
        });
    });
</script>
