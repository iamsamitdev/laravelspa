<template>
    <div>
        <div class="row">
                <div class="col-md-7" :style="image">
                </div>
                <div class="col-md-5 my-5 py-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="card border-secondary">
                                        <div class="card-header">
                                            <h3 class="mb-0 my-2">Sign Up</h3>
                                        </div>
                                        <div class="card-body">
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="inputName">Name</label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="full name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputVerify3">Verify</label>
                                                    <input type="password" class="form-control" id="inputVerify3" placeholder="password (again)" required="">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-lg">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        </div>
                        <!--/col-->
                    </div>
            <!--/row-->
        </div>
<!--/container-->
    </div>
</template>

<style>
    .border-secondary{
        border-color: #d5d6d6  !important;
    }
</style>

<script>
    export default {
         data() {
            return {
                image: {backgroundImage: "url(images/login.jpg)"}
            };
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>