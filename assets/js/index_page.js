/**
 * Created by dhruv on 28/12/14.
 */
var app = app || {};
app.IndexView = Backbone.View.extend({

    el: '#wrapper',

    events: {

        'click #btnSignUp': 'btnSignUp',
        'click #btnLogin':'btnLogin',
        'click #btnAreaInvite' : 'btnAreaInvite',
        'click #btnSubDemand' : 'btnSubDemand'
    },

    initialize:function(){
     alert();
    },
    btnSignUp: function() {
        window.location.href="signup";
    },
    btnLogin:function(){
        $("#loginErrorAfterSubmit").hide();
        $("#emailErrorWhileLogin").hide();
        $("#passwordError").hide();
        var email=$("#tbLoginEmail").val();
        var password= $("#tbLoginPassword").val();

        if((email=="") && (password=="")){

            $("#loginErrorAfterSubmit").show();
            $("#loginErrorAfterSubmit").text("please Enter Credentials");
            return false;
        }
        else if(email==""){
            $("#emailErrorWhileLogin").show();
            $("#emailErrorWhileLogin").text('please enter mail id');
            return false;
        }

        else if(this.isEmail(email)==false){

            $("#emailErrorWhileLogin").show();
            $("#emailErrorWhileLogin").text('Invalid Email Id');
            return false;
        }

        else if(password.length<6){
            $("#passwordError").show();
            $("#passwordError").text('Password length is less than six character');
            return false;
        }

        else
        {
            $("#loginErrorAfterSubmit").show();
            $("#loginErrorAfterSubmit").html('<img src=../assets/images/loading_123.gif>');
            $.post("login",{email:email,password:password},function(data){
                var obj={};
                obj = JSON.parse(data);

                $("#loginErrorAfterSubmit").show();
                $("#loginErrorAfterSubmit").html(obj.opt);
            });

        }

        return false;
    },
    isEmail:function(Mail)
    {
        Mail=Mail.toLowerCase();
        return (Mail.search(/^([a-z]+)([a-z0-9\-\_\.]{1,100})([a-z0-9]+)\@([a-z0-9]+)([a-z0-9\-\.]*)([a-z0-9]+)\.([a-z]{2,6})$/) != -1);
    },
    btnAreaInvite: function(){

        var text=$("#txtAreaInvite").val();
        FB.ui(
            {
                method: 'feed',
                name: 'DevelopMyNation',
                link: 'http://www.developmynation.in',
                //source:'',
                //picture:'http://localhost/ci_intro/assets/images/fbiconshare.png',
                caption: text
                //description: des,
                //message: des,
            });

    },
    btnSubDemand: function(){

        var text=$("#taWhatNext").val();

        if(text==""){
            alert("Text values cannot be empty");
            return false;
        }
        else{
            $.post("index_controller/subDemand",{text:text},function(data){

                if(data=="signup"){
                    window.location.href="signup";
                }
                else if(data=="home"){
                    window.location.href="home?demand="+encodeURIComponent(text);
                }

            });
        }
    }


});

$(function() {
    new app.IndexView();

});

