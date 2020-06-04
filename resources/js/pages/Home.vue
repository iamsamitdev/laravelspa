<template>
    <div>
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid my-4">
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-heart"></i>
                    <h1 class="mt-3">Service Mind</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum neque repellendus iste delectus obcaecati tempora sequi consequuntur, tempore reprehenderit quisquam architecto adipisci ex, laudantium atque nesciunt, officiis aliquid repudiandae.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-chart-pie"></i>
                    <h1 class="mt-3">Reporting</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum neque repellendus iste delectus obcaecati tempora sequi consequuntur, tempore reprehenderit quisquam architecto adipisci ex, laudantium atque nesciunt, officiis aliquid repudiandae.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-fire"></i>
                    <h1 class="mt-3">Traindy</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum neque repellendus iste delectus obcaecati tempora sequi consequuntur, tempore reprehenderit quisquam architecto adipisci ex, laudantium atque nesciunt, officiis aliquid repudiandae.</p>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
