<style>
    h1{
        color: white;
        font-size:57px;
    }
    h2{
        color: white;
        font-size:41px;
    }
    .Caja_descripcion{   
    display: flex;
    flex-flow: row wrap;
    justify-content: space-evenly;
    aling-cotent: center;
    height:50px;
    width: 100%;
    margin: 0 auto;
    }

    .responsive{
        float: left;
        width: 100%;
        height: auto;
        aling-items: center;
    }
    .waving-hand {
  animation-name: wave-animation;
  animation-duration: 2.5s;
  animation-iteration-count: infinite;
  transform-origin: 70% 70%;
  display: inline-block;
}

@keyframes wave-animation {
  0% { transform: rotate( 0.0deg) }
  15% { transform: rotate(18.0deg) }  /* The following five values can be played with to make the waving more or less extreme */
  30% { transform: rotate(-8.0deg) }
  40% { transform: rotate(18.0deg) }
  50% { transform: rotate(-4.0deg) }
  60% { transform: rotate(10.0deg) }
  70% { transform: rotate( 0.0deg) }  /* Reset for the last half to pause */
 100% { transform: rotate( 0.0deg) }
}
</style>
<section class="Caja_descripcion">
    <div class="descripcion">
<h1><br>Hola a todos, Soy Ricardo
<span class="waving-hand">👋</span>
 </h1>
<h2>Soy un apasionado de la programacion, <br>con experiencia en el desarrollo web </h1>
    </div>
    <div class="descripcion">
        
<img class="responsive"  src="img/Grupo 20.png" alt=""  >        
    </div>
</section>
