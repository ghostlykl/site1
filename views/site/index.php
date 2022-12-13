<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<?php Header("Content-type: text/css; charset=utf-8"); ?>
<link rel="stylesheet" href="C:\xampp\htdocs\site\web\css\site.css">

<script>
    var confirmDelete = (function (element) {
        var className = element.className;

        if (className.indexOf('need-to-confirm') > -1) {
            element.className = className.replace('need-to-confirm', 'confirmed');
            return false;
        } else {
            element.remove();
        }
    });
</script>

<body>
    <div class="logo">
        <h1>Название галереи</h1>
    </div>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Название альбома</h5>
                                <button class="delete-link">
                                    <span class="maintext">Удалить изображение</span>
                                </button>
                                <button class="dop">
                                    <span class="maintext">Добавить изображение</span>
                                </button>
                                <button type="btn-close" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/2.jpg" class="d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/3.jpg" class="d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/4.jpg" class="d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/5.jpg" class="d-block">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/6.jpg" class="d-block">
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Предыдущий</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Следующий</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="btn" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="images/foto.png" class="card-img-top" alt="Название альбома">
                        <div class="card-body">
                            <h5 class="card-title">Название альбома</h5>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>