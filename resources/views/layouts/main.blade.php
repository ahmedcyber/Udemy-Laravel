<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
            <div class="row column">
                <br>
                <h5>Main menu</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/login">Home</a></li>
                    <li><a href="/register">Home</a></li>
                    <li><a href="/gallery/create">Create Gallery</a></li>
                </ul>
            </div>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-large">
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="my-info"></button>
                    <span class="title-bar-title">Mike Mikerson</span>
                </div>
            </div>
            <div class="callout primary">
                <div class="row column">
                    <h1>Hello! This is the portfolio of a very witty person.</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
                </div>
            </div>

                @yield('content')
            <hr>

            <div class="row">
                <div class="medium-6 columns">
                    <h3>Contact Me</h3>
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
                    <ul class="menu">
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Yo</a></li>
                    </ul>
                </div>
                <div class="medium-6 columns">
                    <label>Name
                        <input type="text" placeholder="Name">
                    </label>
                    <label>Email
                        <input type="text" placeholder="Email">
                    </label>
                    <label>
                        Message
                        <textarea placeholder="holla at a designerd"></textarea>
                    </label>
                    <input type="submit" class="button expanded" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src=js/vendor/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>


