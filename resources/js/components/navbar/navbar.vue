<template>
  <div>
       <nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">Company</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link">
                <router-link to="/product">P</router-link>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" >

                <router-link to="/home">Home</router-link>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
