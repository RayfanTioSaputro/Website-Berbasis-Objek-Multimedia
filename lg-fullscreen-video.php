<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Berbasis Objek Multimedia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="Semantic-UI-CSS-master/components/image.css">
    <link rel="stylesheet" href="Semantic-UI-CSS-master/components/menu.css">
    <link rel="stylesheet" href="Semantic-UI-CSS-master/components/icon.css">
    <link rel="stylesheet" href="Semantic-UI-CSS-master/components/feed.css">
</head>
<body class="bg-light">
    <div class="d-flex" id="wrapper">
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-left mb-2">Category</div>
            <div class="list-group list-group-flush">
                <a href="index-video.php" class="list-group-item list-group-item-action" style="padding-left: 35px;"><i class="fas fa-video mr-2 active"></i>Videos</a>
                <a href="index-music.php" class="list-group-item list-group-item-action" style="padding-left: 35px;"><i class="fas fa-music mr-2"></i>Musics</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg border-bottom">
                <a href="#" class="bar-icon ml-3" id="menu-toggle"><i class="fas fa-bars"></i></a>    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo"><span>me</span>Tube.</div>
                <div class="input-group input-group-sm mb-3 mt-3 w-50 mx-auto">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text pl-4 pr-4" id="inputGroup-sizing-sm"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div>
                    <img class="ui avatar image dropdown-toggle" src="img/ray2.jpg" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                    <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="profileDropdown" style="width: 200px;">
                        <span class="dropdown-item-text" style="font-weight: 500;">RAYFAN TIO SAPUTRO</span>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="loading-wrapper">
                    <div class="loading-img">
                        <img src="loading/Ellipsis-1s-124px.gif" alt="">
                    </div>
                </div>
                <div class="ml-3 mr-3">
                    <div class="row" style="margin-top: 28px;">
                        <div class="col-8">
                            <video controls class="card-img-top" src="videos/street.mp4" loop autoplay muted></video>
                            <div class="title-video mt-3">
                                <div class="row">
                                    <div class="col-11">
                                        <p>Blablabla Video</p>
                                    </div>
                                    <div class="col-1">
                                        <div class="action">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- <span>100 x </span>ditonton • <span>1 hari yang lalu</span> -->
                            </div>
                            <div class="dropdown-divider" style="margin-top: 20px;"></div>
                            <div class="ui feed mt-4">
                                <div class="event mb-3">
                                    <div class="label">
                                        <img src="https://semantic-ui.com/images/avatar/small/joe.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="summary" style="margin-top: -12px;">
                                            <p class="mb-0" style="font-weight: 500;">Elliot Fu likes your video</p>
                                            <div class="date ml-0">
                                                1 Hour Ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event mb-3">
                                    <div class="label">
                                        <img src="https://semantic-ui.com/images/avatar/small/joe.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="summary" style="margin-top: -12px;">
                                            <p class="mb-0" style="font-weight: 500;">Elliot Fu likes your video</p>
                                            <div class="date ml-0">
                                                1 Hour Ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="https://semantic-ui.com/images/avatar/small/joe.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="summary" style="margin-top: -12px;">
                                            <p class="mb-0" style="font-weight: 500;">Elliot Fu likes your video</p>
                                            <div class="date ml-0">
                                                1 Hour Ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-5">
                            <p style="font-size: 18px;">Next Video</p>
                            <div class="row">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-2">
                                <div class="col">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <video controls src="videos/street.mp4" loop width="160"></video>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col thumb">
                                            <a href="#">Blablabla Video</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <!-- <p class="detail2">
                                                <span>100 x </span>ditonton • <span>1 hari yang lalu</span>
                                            </p> -->
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
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.loading-wrapper').fadeOut(750);
        });

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>