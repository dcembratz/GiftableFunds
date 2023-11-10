<!DOCTYPE html>
<html>
<head>
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        /* Center the text vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Make the text larger */
        p {
            font-size: 48px;
            text-align: center;
            position: absolute;
        }
    </style>
</head>
<body>
    <!-- header -->
    <div id="menu" class="fixed-header">
        <ul>
            <li class="current_page_item"><a href="index">Home</a></li>
            <li><a href="insert_contact_request">Contact Us</a></li>
            <li><a href="orderingsection">View Gift Cards</a></li>
            <li><a href="aboutus">About</a></li>
            <!-- <li><a href="#">Links</a></li> -->
            <li><a href="admin/signin">Admin</a></li>
            <li><a class="nav-link" id="myCart" href="#">My Cart (<span id="cartAmt"></span>)</a></li>
        </ul>
    </div>
    <button id="menu-button">&#9776;</button>
    <div id="menu-dropdown">
        <!-- header end -->
        <p id="movingText">Currently Under Maintenance</p>
    </div>

    <script>
        const textElement = document.getElementById("movingText");
        const maxWidth = window.innerWidth - textElement.offsetWidth;
        const maxHeight = window.innerHeight - textElement.offsetHeight;
        let xDirection = 1;
        let yDirection = 1;

        function moveText() {
            let currentX = parseInt(textElement.style.left) || 0;
            let currentY = parseInt(textElement.style.top) || 0;

            currentX += 5 * xDirection;
            currentY += 5 * yDirection;

            if (currentX < 0) {
                xDirection = 1;
                currentX = 0;
            }
            if (currentX > maxWidth) {
                xDirection = -1;
                currentX = maxWidth;
            }
            if (currentY < 0) {
                yDirection = 1;
                currentY = 0;
            }
            if (currentY > maxHeight) {
                yDirection = -1;
                currentY = maxHeight;
            }

            textElement.style.left = currentX + "px";
            textElement.style.top = currentY + "px";

            requestAnimationFrame(moveText);
        }

        moveText();
    </script>
</body>
</html>
