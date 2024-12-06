<?php

require_once "views/components/header.php";
?>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <a href="/todos" style="
            display: inline-block;
            width: 300px;
            height: 100px;
            line-height: 100px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            color: white;
            background-image: url('https://octagon-design.com/cdn/shop/products/TODONEGRE.jpg?v=1604421213');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;

        "
       onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 12px rgba(0, 0, 0, 0.3)';"
       onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)';">

    </a>
</div>



<?php
require 'views/components/footer.php';
?>
