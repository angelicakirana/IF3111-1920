<!DOCTYPE html>
<html>
<head>
<title>Gitra</title>
<style type="text/css"> 
*{
    margin: 0;
    padding: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

ul{
    float: right;
    list-style-type: none;
    margin-top: 25px;
}

ul li{
    display: inline-block;
}

ul li a{
    text-decoration: none;
    color: crimson;
    padding: 5px 20px;
    border: 1px solid crimson;
    transition: 0.6s ease;
}

ul li a:hover{
    background-color: #fff;
    color: #000;
}

ul li.active a{
    background-color: #fff;
    color: #000;
}

.logo img{
    float: left;
    width: 578px;
    height: auto;
}

.main{
    max-width: 1200px;
    margin: auto;
}

.title{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.title h1{
    color: #000;
    font-size: 30px;
}

.button{
    position: absolute;
    top: 80%;
    left: 80%;
    transform: translate(-50%,-50%);
}

.btn{
    border: 1px solid #000;
    padding: 10px 30px;
    color: #000;
    text-decoration: none;
    transition: 0.6s ease;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.btn:hover{
    background-color: #000;
    color: #fff;
}
</style>
</head>

<body>
    <header>
        <div class="main">
        <div class="title">
            <h1 align="center">SIMPLE LAPOR</h1>
            <p>Buat Laporan
        </div>

        <div class="button">
            <a href="#" class="btn">Buat LAPOR!      </a>

        </div>
    </header>


</body>
</html>