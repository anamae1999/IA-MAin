<style>
  .n-container {
  position: relative;
  width: 100%;
}

.service-container .col-6{
  padding-left:0px;
}

}
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 97.6%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(48, 59, 106, 0.69);
}

.n-container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.title{
  position: absolute;
  bottom: 10%;
  left: 5%;
  font-size:40px;
  font-weight:bold;
  color:var(--orange);
  text-transform:uppercase;
}
</style>
<section>
<div class="container n-container service-container">
<div class="d-flex">
  <div class="n-container col-6">
      <img width="100%"  src="https://intelassist.com/wp-content/uploads/2021/12/sv-shop-drawings.jpg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
  </div>
  <div class="n-container col-6">
      <img width="100%" src="https://intelassist.com/wp-content/uploads/2021/12/pexels-andrea-piacquadio-3866512-1-1.png" alt="Avatar" class="image">
      <p class="title">title here</p>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
  </div>
</div>
</div>
</section>