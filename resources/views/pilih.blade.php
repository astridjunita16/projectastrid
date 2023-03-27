<html>

<head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('./css/style.css.css') }}"> --}}
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            color: #1a1f36;
            box-sizing: border-box;
            word-wrap: break-word;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
        }
        body {
            min-height: 100%;
            background-color: #ffffff;
        }
        h1 {
            letter-spacing: -1px;
        }
        a {
            color: rgb(243, 72, 243);
            text-decoration: unset;
        }
        .login-root {
            background: #fff;
            display: flex;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
        }
        .loginbackground {
            min-height: 692px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 0;
            overflow: hidden;
        }
        .flex-flex {
            display: flex;
        }
        .align-center {
            align-items: center;
        }
        .center-center {
            align-items: center;
            justify-content: center;
        }
        .box-root {
            box-sizing: border-box;
        }
        .flex-direction--column {
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .loginbackground-gridContainer {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
            grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
            -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
            grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
            justify-content: center;
            margin: 0 -2%;
            transform: rotate(-12deg) skew(-12deg);
        }
        .box-divider--light-all-2 {
            box-shadow: inset 0 0 0 2px #e3e8ee;
        }
        .box-background--blue {
            background-color: rgb(243, 72, 243);
        }
        .box-background--white {
            background-color: #ffffff;
        }
        .box-background--blue800 {
            background-color: #212d63;
        }
        .box-background--gray100 {
            background-color: #e3e8ee;
        }
        .box-background--cyan200 {
            background-color: #e07fed;
        }
        .padding-top--64 {
            padding-top: 64px;
        }
        .padding-top--24 {
            padding-top: 24px;
        }
        .padding-top--48 {
            padding-top: 48px;
        }
        .padding-bottom--24 {
            padding-bottom: 24px;
        }
        .padding-horizontal--48 {
            padding: 48px;
        }
        .padding-bottom--15 {
            padding-bottom: 15px;
        }
        .flex-justifyContent--center {
            -ms-flex-pack: center;
            justify-content: center;
        }
        .formbg {
            margin: 0px auto;
            /* margin-top:20px;  */
            width: 100%;
            max-width: 448px;
            background: white;
            border-radius: 4px;
            box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
        }
        span {
            display: block;
            font-size: 20px;
            line-height: 28px;
            color: #1a1f36;
        }
        .grid--50-50 {
            display: grid;
            grid-template-columns: 50% 50%;
            align-items: center;
        }
        .field input {
            font-size: 16px;
            line-height: 28px;
            padding: 8px 16px;
            width: 100%;
            min-height: 44px;
            border: unset;
            border-radius: 4px;
            outline-color: rgb(84 105 212 / 0.5);
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        }
        input[type="button"] {
            background-color: rgb(243, 72, 243);
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px,
                rgb(243, 72, 243) 0px 0px 0px 1px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(0, 0, 0, 0) 0px 0px 0px 0px,
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        .animationRightLeft {
            animation: animationRightLeft 2s ease-in-out infinite;
        }
        .animationLeftRight {
            animation: animationLeftRight 2s ease-in-out infinite;
        }
        .tans3s {
            animation: animationLeftRight 3s ease-in-out infinite;
        }
        .tans4s {
            animation: animationLeftRight 4s ease-in-out infinite;
        }
        @keyframes animationLeftRight {
            0% {
                transform: translateX(0px);
            }
            50% {
                transform: translateX(1000px);
            }
            100% {
                transform: translateX(0px);
            }
        }
        @keyframes animationRightLeft {
            0% {
                transform: translateX(0px);
            }
            50% {
                transform: translateX(-1000px);
            }
            100% {
                transform: translateX(0px);
            }
        }
    </style>
</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root"
                            style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" style="margin-top: 100px">
                    <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Pengaduan Masyarakat</a></h1>
                </div>

                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15" style="text-align: center">Silah Kan Login😁</span>
                            <form id="stripe-login">
                                <div class="field padding-bottom--24">
                                  <a href="{{ route('login') }}">
                                    <input type="button" value="Login Petugas">
                                  </a>
                                </div>
                                <p style="text-align: center;padding-bottom:24px">Atau</p>
                                <div class="field padding-bottom--24">
                                  <a href="{{ route('masyarakat.login') }}">
                                    <input type="button" value="Login Masyarakat">
                                  </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>