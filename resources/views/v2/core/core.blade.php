<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>weChat</title>

        <!-- style -->
        @include("v2.includes.style")

    </head>

    <body>

        <div class="menu-container" id="menuCtn">
            <div class="item"><i class="fa-solid fa-sliders"></i>&nbsp;&nbsp;Settings</div>
            <div class="item"><i class="fa-regular fa-circle-question"></i>&nbsp;&nbsp;Help</div>
            <div class="logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logut</div>
        </div>

        <div class="left-section">

            <div class="header">

                <img src="{{ asset("assets/images/v2/img1.jpg") }}" />
                <div class="menu" id="getMenuBtn">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>

            </div>
            <div class="search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="search ...">
                </div>
            </div>
            <div class="messages">

                <div class="item">
                    <img src="{{ asset("assets/images/v2/img2.jpeg") }}" />
                    <div class="des">
                        <p class="name">Mohamed</p>
                        <p class="message">Bnj cv ?</p>
                    </div>
                    <div class="time">12:05</div>
                </div>
            </div>

        </div>

        <div class="right-section">

            <div class="header">
                <img src="{{ asset("assets/images/v2/img2.jpeg") }}" />
                <div class="details">
                    <p class="name">Haythem</p>
                    <p class="status">Active now</p>
                </div>
                <div class="buttons">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <div class="messages-container">

                <div class="message sender">
                    <p class="msg">slm</p>
                </div>
                <div class="message receiver">
                    <p class="msg">Ahla</p>
                </div>

            </div>
            <div class="input-box">
                {{-- <p class="emoji-btn"><i class="fa-regular fa-face-smile"></i></p> --}}
                {{-- <p class="picker"><i class="fa-solid fa-paperclip"></i></p> --}}
                <input type="text" placeholder="write your message...." />
                <button>send</button>
            </div>

        </div>



        <!-- script -->
        @include("v2.includes.script")

    </body>

</html>
