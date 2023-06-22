<!DOCTYPE html>
<html lang="en">


@include('layouts.nav')
<!-- Restaurant Section Start -->
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index.html">
            <img src="https://via.placeholder.com/84x41" alt="logo">
        </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
            <form class="ms-form" method="post">
                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                    <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value=""> <i class="flaticon-search text-disabled"></i>
                </div>
            </form>
        </li>


    </ul>
    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
    </div>
</nav>
<!-- Preloader -->
<div id="preloader-wrap">
    <div class="spinner spinner-8">
        <div class="ms-circle1 ms-child"></div>
        <div class="ms-circle2 ms-child"></div>
        <div class="ms-circle3 ms-child"></div>
        <div class="ms-circle4 ms-child"></div>
        <div class="ms-circle5 ms-child"></div>
        <div class="ms-circle6 ms-child"></div>
        <div class="ms-circle7 ms-child"></div>
        <div class="ms-circle8 ms-child"></div>
        <div class="ms-circle9 ms-child"></div>
        <div class="ms-circle10 ms-child"></div>
        <div class="ms-circle11 ms-child"></div>
        <div class="ms-circle12 ms-child"></div>
    </div>
</div>

<!-- Main Content -->
<main class="body-content">
    <br>
    <!-- Body Content Wrapper -->



    <div class="ms-panel">
        <div class="ms-panel-header">
            <h6>Product List</h6>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table class="table table-hover thead-primary">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Inventory</th>
                        <th scope="col">Online Ordering</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menu as $m)
                    <tr>
                        <td>{{$m->id}}</td>
                        <td>{{$m->category}}</td>
                        <td><a href="/product/update?id={{$m->id}}">{{$m->name}}</a></td>
                        <td>{{$m->price}}</td>
                        <td>{{$m->inventory}}</td>
                        <td>{{$m->online_ordering}}</td>
                        <td class="product_photo"><img src="{{asset(("images/".($m->photo ?? 'black.jpg')))}}" alt=""></td>
                        <td><a href="/product/delete?id={{$m->id}}"><span id="boot-icon" class="bi bi-trash" style="font-size:10rem"></span></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<style>
    .product_photo{
        width: 100px;
        height: 100px;
    }
</style>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="{{asset("/assets/js/jquery-3.5.0.min.js")}}"></script>
<script src="{{asset("/assets/js/popper.min.js")}}"></script>
<script src="{{asset("/assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("/assets/js/perfect-scrollbar.js")}}"> </script>
<script src="{{asset("/assets/js/jquery-ui.min.js")}}"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src="{{asset("/assets/js/slick.min.js")}}"> </script>
<script src="{{asset("/assets/js/moment.js")}}"> </script>
<script src="{{asset("/assets/js/jquery.webticker.min.js")}}"> </script>
<script src="{{asset("/assets/js/Chart.bundle.min.js")}}"> </script>
<script src="{{asset("/assets/js/Chart.Financial.js")}}"> </script>
<!-- Page Specific Scripts Finish -->

<!-- Costic core JavaScript -->
<script src="{{asset("/assets/js/framework.js")}}"></script>

<!-- Settings -->
<script src="{{asset("/assets/js/settings.js")}}"></script>
</body>
@include('layouts.header')
</html>
