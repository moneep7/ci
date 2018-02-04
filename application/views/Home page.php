<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">MON-E</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เว็บบอร์ด</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            ติดต่อเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">CEO</a>
                            <a class="dropdown-item" href="#">สาขาย่อย</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">ช่วยเหลือ</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">เกี่ยวกับเรา</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/01.jpg" alt="First slide" width="150"  height="200">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/02.jpg" alt="Second slide" width="150"  height="200">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/03.jpg" alt="Third slide" width="150"  height="200">
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
        <hr>
        <div>
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">Success</a>
            <a href="#" class="badge badge-danger">Danger</a>
            <a href="#" class="badge badge-warning">Warning</a>
            <a href="#" class="badge badge-info">Info</a>
            <a href="#" class="badge badge-light">Light</a>
            <a href="#" class="badge badge-dark">Dark</a>
        </div>
        <hr>
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">ชื่อ สกุล</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="กรอกชื่อ สกุล">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">อีเมล์</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="กรอกอีเมล์">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">อายุ</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="กรอกอายุ">
                    </div>
                </form>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <hr>
        <h1>รายชื่อผู้เข้าร่วมอบรม</h1>

        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>
        <table class="table table-dark table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ - สกุล</th>
                    <th>mail</th>
                    <th>อายุ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>*****</td>
                    <td>mo.n</td>
                    <td>aaaaa1@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-light">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>**</td>
                    <td>mo.e</td>
                    <td>aaaaa2@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-light">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>***</td>
                    <td>mo.p</td>
                    <td>aaaaa3@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-light">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>