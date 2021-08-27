<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Mapa-Backend-I</title>
</head>
<body>
<style>
    *{
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    nav{
      
      min-height: 110px;
    }
    html{
      height: 100%;
    }
    h2,h5{
      padding-top: .5rem;
      text-align: center;
      color: #016A45;
      margin-bottom: 2rem;
    }
    a{
      
      font-size: 25px;
    }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100%;
      background-image: url(./imagens/fundo.gif);
      background-size: cover;

      }
.logo {
  width: 150px;
  height: 140px;
}
.navbar-brand {
  margin-left: 2rem;
  margin-right: 10rem;
}

.btn {
  
  border: none;
  background-color: #016A45;
  color: #b6844f;
}

.produtos {
  
  margin-top: 2rem;
  margin-bottom: 2rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-evenly;
}
.card {
  border-radius: 15px;
}
.card-img-top {
  height: 13rem;
}
.navbar {
  background-color: #FBC30A;
}
#row {
  margin-top: 5rem;
}
.container-contatos{
  
  background-color:whitesmoke;
  background-size: 0px;
  
}*/
.container-contatos h2{
  color:#FBC30A;
}
.cont{
  
  background-color: whitesmoke;
  color: #016A45;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  padding-bottom: 4rem;
}
.cont p{
  width: 80%;
  font-size: 20px;
}
.contatos {
  margin-right: 2rem;
  color: #016A45;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-size: cover;
  
}
input,textarea{
  border-radius: 5px;
  border: none;
}
#map-container-google-1{
  display: flex;
  align-items: center;
  justify-content: center;
}

footer {
  color:#FBC30A;
  margin-top:auto;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  background-color:#016A45;
}
footer img{
  padding: .4rem;
  height: 140px;
  width: 150px;
}
.icons{
  padding: .5rem;
  display: flex;
  align-items:center;
  justify-content:space-evenly;
}
.info{
  margin-top: .5rem;
}
.main{
  font-size: 20px;
  color:#016A45;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  padding: 1rem;
}
.main p{
  font-size: 20 px;
  padding:1rem;
  text-align: justify;
  width: 60%;
}
.comprar{
  background-color:#016A45 ;
  padding: .5rem;
  border-radius: 3px;
  border: none;
  color: #b6844f;
}
.botao-valor{
  font-size: 20px;
  color: #016A45;
  margin:none;
  display: flex;
  justify-content: center;
  padding: .5rem;
  
}
aside{
  padding: 1.5rem;
}
.texto{
  color:#016A45;
  font-size: 20px;
  width: 60%;
}
.img-prod{
  padding: 1rem;
  width: 350px;
}
</style>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="logo" src="./imagens/logo1.png" alt="Logo fabrica de doces">
  <a class="navbar-brand" href="#"><h2>Los Dulces</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php?p=home">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index.php?p=quemsomos">Quem somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index.php?p=contato">Contatos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index.php?p=localizacao">Localização</a>
      </li>
    </ul>
  </div>
</nav>
