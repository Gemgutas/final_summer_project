
<template>
    <h1>My Hotel Bar</h1>
    <hr>
<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="bar in bars" :key="bar.id">
        <div class="card-header bg-primary">
            <h4>{{bar.bar_name}}</h4>
        </div>
        <div class="card-body">
            <h5>{{bar.type}}</h5>
            <h5>{{bar.address}}</h5>


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
    props: {
        bars: Array
    }
}
</script>

<style scoped>
.card {
    width: 375%;
}
</style>
