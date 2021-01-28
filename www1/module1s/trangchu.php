<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2 p-0">
                <img src="images/logo.png" class="img-fluid" alt="" />
            </div>
            <div class="col-10">
                <img src="images/banner.png" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="./trangchu.php">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./dssanpham.php">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./lienhe.php">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./chao.php">Chào</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 p-0 text-center">
                <div class="categories">
                    <h3>Danh muc</h3>
                    <div id="accordianId" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="section1HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId"
                                        aria-expanded="true" aria-controls="section1ContentId">
                                        Section 1
                                    </a>
                                </h5>
                            </div>
                            <div id="section1ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section1HeaderId">
                                <div class="card-body">
                                    Section 1 content
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="section2HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId"
                                        aria-expanded="true" aria-controls="section2ContentId">
                                        Section 2
                                    </a>
                                </h5>
                            </div>
                            <div id="section2ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section2HeaderId">
                                <div class="card-body">
                                    Section 2 content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ads p-1">
                    <img src="images/4.png" class="img-fluid" alt="" />
                    <img src="images/5.png" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 text-center table-bordered m-3">
                        <div id="carouselId" class="carousel slide text-gray-dark" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner img-fluid" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/1.png" alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img src="images/2.png" alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img src="images/3.png" alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-danger" href="#carouselId" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row m-3">
                        <h3>Sản phẩm</h3>
                        <div class="card-deck">
                            <div class="card border-0">
                                <img class="card-img-top" src="images/sp/1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center">iphone</h4>
                                    <p class="card-text text-center">20.000.000</p>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary">Đặt mua</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0">
                                <img class="card-img-top" src="images/sp/2.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center">samsung</h4>
                                    <p class="card-text text-center">20.000.000</p>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary">Đặt mua</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0">
                                <img class="card-img-top" src="images/sp/3.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center">samsung</h4>
                                    <p class="card-text text-center">20.000.000</p>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary">Đặt mua</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0">
                                <img class="card-img-top" src="images/sp/4.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center">oppo</h4>
                                    <p class="card-text text-center">20.000.000</p>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary">Đặt mua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="black" />
                    <div class="row m-1">
                        <div class="col">
                            <h3>Tin tức & sự kiện</h3>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="card">
                                        <img class="card-img-top" src="images/news/1.gif" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img class="card-img-top" src="images/news/2.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img class="card-img-top" src="images/news/3.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 border">
                <ul class="colfoot">
                    <li><a href="/lich-su-mua-hang" title="Lịch sử mua hàng">Lịch sử mua hàng</a></li>
                    <li><a href="/tra-gop" title="Hướng dẫn mua trả góp">Tìm hiểu về mua trả góp</a></li>
                    <li><a href="/bao-hanh" title="Tìm trung tâm bảo hành">Chính sách bảo hành</a></li>
                    <li><a href="/chinh-sach-bao-hanh-san-pham" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
                </ul>
            </div>
            <div class="col-md-4 border">
                <ul class="colfoot">
                    <li><a href="http://mwg.vn" target="_blank" title="Giới thiệu công ty (mwg.vn)" rel="noopener">Giới
                            thiệu công ty <span>(mwg.vn)</span></a></li>
                    <li><a href="//vieclam.thegioididong.com" target="_blank" title="Tuyển dụng" rel="noopener">Tuyển
                            dụng</a></li>
                    <li><a href="/lien-he" title="Gửi góp ý, khiếu nại">Gửi góp ý, khiếu nại</a></li>
                    <li><a href="/he-thong-sieu-thi-the-gioi-di-dong" title="Tìm siêu thị (2.173 shop)">Tìm siêu thị
                            <span>(2.173 shop)</span></a></li>
                    <li>
                        <a class="viewmb" rel="nofollow" href="/?sclient=mobile" title="Xem bản mobile">Xem bản
                            mobile</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 border">
                <ul class="colfoot">
                    <li>

                        <p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
                        <p>Gọi khiếu nại &nbsp; <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
                        <p>Gọi bảo hành &nbsp; <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
                        <p>Kỹ thuật &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:18001763">1800.1763</a> (7:30 -
                            22:00)</p>
                        <a target="_blank" rel="nofollow noopener" class="bct"
                            href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=20098"
                            aria-label="bộ công thương mwg"><i class="icontgdd-bct"></i></a>
                        <a rel="nofollow noopener" class="bct" href="/tos#giai-quyet-khieu-nai"
                            aria-label="bộ công thương chống hàng giả"><i class="icontgdd-hg"></i></a>
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d&refurl=http://www.thegioididong.com/"
                            title="DMCA.com Protection Status" class="dmca-badge"> <img
                                style="opacity:0.6;margin: 0px auto -8px;display: block;"
                                src="//images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d"
                                alt="DMCA.com Protection Status"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="owl/dist/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</body>

</html>