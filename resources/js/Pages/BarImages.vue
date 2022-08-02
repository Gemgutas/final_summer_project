<template>
    <h1> Images </h1>
    <hr>
    <p>A Beautiful Scenery</p>

<div class="row">
  <div class="col-md-4">
     <div class="thumbnail">
         <a href="./img/lounge.jpg">
            <img src="./img/lounge.jpg" alt="The Lounge" style="width:100%">
          <div class="Atomic G Liquors Lounge">
              <p>Atomic G Liquors Lounge</p>
            </div>
         </a>
        </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
     <div class="thumbnail">
         <a href="./img/wine.jpg">
            <img src="./img/wine.jpg" alt="The Wine" style="width:100%">
          <div class="Atomic G Liquors Wine">
              <p>Atomic G Liquors Wine</p>
            </div>
         </a>
        </div>
  </div>
</div>


</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
}
</script>
