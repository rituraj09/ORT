
<div class="container" id="wrapper">
<div class="jumbotron">



    <form role="form">
        <div class="row"><div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" autocomplete="on" placeholder="Enter email" id="tbLoginEmail">

                    <span class="errLoginClass" id="emailErrorWhileLogin"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="tbLoginPassword" placeholder="Password">

                    <span class="errLoginClass" id="passwordError"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <button type="button" id="btnLogin" class="btn btn-success">Login</button><small class="text-primary pull-right"><a href="need_help">Need Help?</a></small><br>

                    <span class="errLoginClass" id="loginErrorAfterSubmit"></span>
                </div>
            </div>
        </div>


    </form>

</div>
</div>

<script src="../assets/js/underscore-min.js"></script>
<script src="../assets/js/backbone.js"></script>
<script src="../assets/js/handlebars-v1.3.0.js"></script>
<script src="../assets/js/index_page.js"></script>