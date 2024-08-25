<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">Dev Folio</h5>
                <button type="button" class="btn select-portfolio" data-id="DevFolio" onmouseover="this.style.background = 'green', this.style.color = 'white'" onmouseout="this.style.background = 'white', this.style.color = 'gray'"><i class="bi bi-check-circle"></i></button>
            </div>

            <!-- Slides with captions -->
            <div id="devfolioCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#devfolioCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#devfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#devfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/portfolios/folio-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-2 bg-dark">
                            <h5>Landing Page</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/portfolios/folio-2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-2 bg-dark">
                            <h5>About Me</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/portfolios/folio-3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-2 bg-dark">
                            <h5>Contact</h5>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#devfolioCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#devfolioCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div><!-- End Slides with captions -->

        </div>
    </div>
</div>
