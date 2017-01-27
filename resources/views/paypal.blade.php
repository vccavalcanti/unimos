@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron text-center">
                    <h1>Olá, {{ Auth::user()->name }}</h1>
                    <p class="lead">
                        Bem vindo ao Sistema Unimos
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary btn-lg">Iniciar</a>

                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                        <!-- Identify your business so that you can collect the payments. -->
                        <input type="hidden" name="business" value="professor@mail.com">

                        <!-- Specify a Buy Now button. -->
                        <input type="hidden" name="cmd" value="_xclick">

                        <!-- Specify details about the item that buyers will purchase. -->
                        <input type="hidden" name="item_name" value="aula de guitarra janeiro">
                        <input type="hidden" name="amount" value="5.95">
                        <input type="hidden" name="currency_code" value="BRL">

                        <!-- Display the payment button. -->
                        <input type="image" name="submit" border="0"
                               src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png"
                               alt="Buy Now">
                        <img alt="" border="0" width="1" height="1"
                             src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                    </form>

                    <p id="demo">Click the button to change the layout of this paragraph</p>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("demo");
                            x.style.fontSize = "25px";
                            x.style.color = "red";

                            swal({
                                title: "Sweet!",
                                text: "Here's a custom image.",
                                imageUrl: 'thumbs-up.jpg'
                            });

                            sweetAlert("Oops...", "Something went wrong!", "error");


                        }
                    </script>

                    <button onclick="myFunction()">Click Me!</button>

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

