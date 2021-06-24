@extends('layouts.template')

@section('css')

@endsection

@section('main')
<section class="intro">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placeholder.pics/svg/1348X600" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://placeholder.pics/svg/1348X600" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://placeholder.pics/svg/1348X600" class="d-block w-100" alt="..." />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="overview">
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container">
            <h1 class="display-5 text-center font-weight-normal">
                Raw Denim Heirloom Man Braid
            </h1>
            <p class="lead text-center font-weight-normal">
                Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh
                mi pug.
            </p>
            <div class="deco-bar mx-auto"
                style="width:65px;height:4px;background-color:#6366f1;border-radius:2px;margin-top:10px"></div>
        </div>
    </div>
    <div class="container marketing" style="max-width:1536px">
        <!-- Three columns of text below the carousel -->
        <div class="row text-center">
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 80x80" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">80x80</text>
                </svg>

                <h2>Shooting Stars</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice
                    poutine,
                    ramps microdosing banh mi pug VHS try-hard.</p>
                <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 80x80" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">80x80</text>
                </svg>

                <h2>The Catalyzer</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice
                    poutine,
                    ramps microdosing banh mi pug VHS try-hard.</p>
                <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 80x80" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>

                <h2>Neptune</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice
                    poutine,
                    ramps microdosing banh mi pug VHS try-hard.</p>
                <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
            </div><!-- /.col-lg-4 -->
            <button type="button" class="btn btn-primary mx-auto">Button</button>
        </div><!-- /.row -->
</section>

<section class="grid">
    <div class="container grid-text ">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>Master Cleanse Reliac Heirloom</h1>
            </div>
            <div class="col-12 col-md-8">
                <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table.
                    Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-6">
                <div class="row">
                    <div class="col-6"><img class="img-fluid mb-4" src="https://placeholder.pics/svg/285X170" alt="">
                    </div>
                    <div class="col-6"><img class="img-fluid mb-4" src="https://placeholder.pics/svg/285X170" alt="">
                    </div>
                    <div class="col-12"><img class="img-fluid" src="https://placeholder.pics/svg/570X342" alt=""></div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-12"><img class="img-fluid mb-4" src="https://placeholder.pics/svg/570X342" alt="">
                    </div>
                    <div class="col-6"><img class="img-fluid" src="https://placeholder.pics/svg/285X170" alt=""></div>
                    <div class="col-6"><img class="img-fluid" src="https://placeholder.pics/svg/285X170" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container price">
    <div>
        <h1 class="text-center">Pricing</h1>
        <p class="text-center">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel
            artisan direct trade
            mumblecore 3 wolf moon twee</p>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col" class="table-active">Plan</th>
                <th scope="col" class="table-active">Speed</th>
                <th scope="col" class="table-active">Storage</th>
                <th scope="col" class="table-active">Price</th>
                <th scope="col" class="table-active ml-auto"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Start</th>
                <td>5 Mb/s</td>
                <td>15 GB</td>
                <td>Free</td>
                <td ml-auto><input name="plan" type="radio"></td>
            </tr>
            <tr>
                <th scope="row">Pro</th>
                <td>25 Mb/s</td>
                <td>25 GB</td>
                <td>$24</td>
                <td><input name="plan" type="radio"></td>
            </tr>
            <tr>
                <th scope="row">Business</th>
                <td>36 Mb/s</td>
                <td>40 GB</td>
                <td>$50</td>
                <td><input name="plan" type="radio"></td>
            </tr>
            <tr>
                <th scope="row">Exclusive</th>
                <td>48 Mb/s</td>
                <td>120 GB</td>
                <td>$72</td>
                <td><input name="plan" type="radio"></td>
            </tr>
        </tbody>
    </table>
    <div class="table-bottom d-flex justify-content-between ">
        <a href="">Learn More</a> <button type="button" class="btn btn-primary">Button</button>
    </div>
</section>


<section class="container product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pb-2">
                <h1 style="font-size: 30px;">Pitchfork Kickstarter Taxidermy</h1>
                <div class="bar"
                    style="width:65px;height:4px;background-color:#6366f1;border-radius:2px;margin-top:10px"></div>

            </div>
            <div class="col-12 col-md-6 col">
                <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table.
                    Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck
                    ugh
                    squid celiac humblebrag.</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mb-4">
            <div class="card bg-light border-0">
                <img src="https://placeholder.pics/svg/240X160" class="card-img-top p-3" alt="...">
                <div class="card-body pt-0">
                    <p class="p-0 m-0" style="color:#6366F1;">SUBTITLE</p>
                    <h5 class="card-title">Chichen Itza</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                        edison bulbche.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card bg-light border-0">
                <img src="https://placeholder.pics/svg/240X160" class="card-img-top p-3" alt="...">
                <div class="card-body pt-0">
                    <p class="p-0 m-0" style="color:#6366F1;">SUBTITLE</p>
                    <h5 class="card-title">Colosseum Roma</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                        edison bulbche.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card bg-light border-0">
                <img src="https://placeholder.pics/svg/240X160" class="card-img-top p-3" alt="...">
                <div class="card-body pt-0">
                    <p class="p-0 m-0" style="color:#6366F1;">SUBTITLE</p>
                    <h5 class="card-title">Great Pyramid of Giza</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                        edison bulbche.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card bg-light border-0">
                <img src="https://placeholder.pics/svg/240X160" class="card-img-top p-3" alt="...">
                <div class="card-body pt-0">
                    <p class="p-0 m-0" style="color:#6366F1;">SUBTITLE</p>
                    <h5 class="card-title">San Francisco</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt
                        edison bulbche.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="feature container text-center text-md-left" style="max-width: 900px;">
    <div class="row featurette">
        <div class="col-md-10 order-md-2 order-2">
            <h5 class="featurette-heading">Shooting Stars
            </h5>
            <p class="lead">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                juice poutine.</p>
            <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
        </div>
        <div class="col-md-2 order-md-1 ">
            <svg class="rounded-circle bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="128" height="128" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 128x128"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-10 order-2">
            <h5 class="featurette-heading">The Catalyzer</h5>
            <p class="lead">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                juice poutine.
            </p>
            <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
        </div>
        <div class="col-md-2 order-md-2">
            <svg class="rounded-circle bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="128" height="128" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 128x128"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>

        </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-10 order-md-2 order-2">
            <h5 class="featurette-heading">The 400 Blows</span>
            </h5>
            <p class="lead">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                juice poutine.</p>
            <p><a class="" href="https://getbootstrap.com/docs/4.6/examples/carousel/#">Learn more »</a></p>
        </div>
        <div class="col-md-2 order-md-1">
            <svg class="rounded-circle bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="128" height="128" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 128x128"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
            </svg>

        </div>
    </div>
    <button type="button" class="btn btn-primary mx-auto d-flex ">Button</button>

</section>
<!-- /END THE FEATURETTES -->


<section class="container shoppingcart d-flex ">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="picture d-flex justify-content-center ">
                <img src="https://placeholder.pics/svg/550X550" class="img-fluid " alt="">
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="picture-description">
                <h6 class="text-muted">BRAND NAME</h6>
                <h2>The Catcher in the Rye</h2>
                <div class="review d-flex align-items-center mb-3 ">
                    <div class="stars mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h6 class="text-muted m-0 mr-2">4 reviews |</h6>
                    <div class="media">
                        <i class="fab fa-facebook-f text-muted mr-2"></i>
                        <i class="fab fa-twitter text-muted mr-2"></i>
                        <i class="fas fa-comment text-muted mr-2"></i>
                    </div>
                </div>
            </div>
            <p class="mb-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1
                seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo
                tattooed umami cardigan.</p>
            <div>
                <div class="property d-flex">
                    <div class="color d-flex ">
                        <span class="mx-2">Color</span>
                        <div class="rounded-circle"
                            style="border:2px solid lightgray;width:24px;height:24px;background-color:white"></div>
                        <div class="rounded-circle"></div>
                        <div class="rounded-circle"></div>
                        <div class="rounded-circle"
                            style="border:2px solid lightgray;width:24px;height:24px;background-color:rgb(55,65,81)">
                        </div>
                        <div class="rounded-circle"></div>
                        <div class="rounded-circle"></div>
                        <div class="rounded-circle"
                            style="border:2px solid lightgray;width:24px;height:24x;background-color:#6366F1"></div>
                        <div class="rounded-circle"></div>
                        <div class="rounded-circle"></div>
                    </div>
                    <div class="size">
                        <span class="mx-2">Size</span>
                        <select name="" id="">
                            <option value="small">SM</option>
                            <option value="medium">M</option>
                            <option value="large">L</option>
                            <option value="extralarge">XL</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="actionBtn d-flex justify-content-between ">
                <div>
                    <h4>$58.00</h4>
                </div>
                <div class="button-group d-flex align-items-center">
                    <button type="button" class="btn btn-primary mx-2">Button</button>
                    <i class="fas fa-heart-circle" style="font-size: 40px;"></i>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">The Catalyzer</h5>
                    <p class="card-text text-muted">$16.00</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">Shooting Stars</h5>
                    <p class="card-text text-muted">$21.15</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">Neptune</h5>
                    <p class="card-text text-muted">$12.00</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">The 400 Blows</h5>
                    <p class="card-text text-muted">$18.40</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">The Catalyzer</h5>
                    <p class="card-text text-muted">$16.00</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">Shooting Stars</h5>
                    <p class="card-text text-muted">$21.15</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">Neptune</h5>
                    <p class="card-text text-muted">$12.00</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 ">
                <img src="https://placeholder.pics/svg/300X160" class="card-img-top" alt="...">
                <div class="">
                    <p class="p-0 m-0 text-muted">CATEGORY</p>
                    <h5 class="card-title m-1 font-weight-normal">The 400 Blows</h5>
                    <p class="card-text text-muted">$18.40</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map container-fluid px-0 position-relative">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.3918509844593!2d120.67261786498845!3d24.122873184407062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cfcecffe9d9%3A0xe28afadc0dad203a!2z5ZyL56uL5Lit6IiI5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1618135976708!5m2!1szh-TW!2stw"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="">
    </iframe>

    <div class="card position-absolute d-felx justify-content-center " style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title">Feedback</h5>
            <p class="card-text">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <div class="mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Button</button>
            <small class="text-muted">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</small>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection