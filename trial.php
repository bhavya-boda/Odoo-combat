<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

html{
    scroll-behavior: smooth;
}

body{
    font-size: 100%;
    font-family: sans-serif;
}

div, section, span, ul, li, a, header{
    box-sizing: border-box;
}



header{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 20px 50px;
    align-items: center;
    position: fixed;
    z-index: 999;
}

#menu li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}

#menu li a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}

section{
    width: 100%;
    float: left;
    height: 100vh;
    position: relative;
}

#home{
   background-color: #59405C;
}

#about{
     background-color: #ED6663;
}

#product{
     background-color: #B52B65;
}

#pricing{
     background-color: #3C2C3E;
}

#contact{
     background-color: #B52B65;
}

h1{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
}








    </style>
</head>
<body>
    <section id="home">
        <header>
            <a href="#"><img src="images/logo.png" alt=""></a>
            <ul id="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>
         <h1>This Is Home</h1>
    </section>
    <section id="about"><h1>This Is About</h1></section>
    <section id="product"><h1>This Is Product</h1></section>
    <section id="pricing"><h1>This Is Pricing</h1></section>
    <section id="contact"><h1>This Is Contact</h1></section>
</body>
</html>
