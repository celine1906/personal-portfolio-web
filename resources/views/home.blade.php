@extends('layout')

@section('content')
<div id="bg-image" style="background-image: url('{{ asset('images/wallpaper.jpg') }}')">
    <div id="trans-box">
        <div id="header">

            <div id="tulisan" style="margin-top: -50px;">
                <p style="font-size:20px">Welcome to my page!<p>
                    <h1 style="color: purple;font-size:40px">Hello, I'm</h1>
                <strong>
                    <h1 class="text-border" style="font-weight: 700">Regina Celine Adiwinata</h1>
                </strong>
                <div style="font-size:25px" class="contact">
                    <br>
                    <p style="font-size: 20px">Contact me at : </p>
                    <span><i class="fab fa-whatsapp" style="color: rgb(66, 248, 66)"></i><a href="https://wa.me/qr/GI3HWT7MUF3IB1" target=”_blank”>WhatsApp</a></span> <br>
                    <span><i class="fab fa-github" style="color: rgb(55, 55, 55)"></i><a href="https://github.com/celine1906" target=”_blank”>Github</a></span> <br>
                    <span><i class="fab fa-linkedin" style="color: rgb(69, 82, 193)"></i><a href="https://www.linkedin.com/in/regina-celine-adiwinata-a93b561b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target=”_blank”>LinkedIn</a></span>
                </div>

            </div>
            <img src="images/fotoCeline.png" alt="foto">
        </div>
    </div>
</div>
@stop
