<script setup>
import Sidebar from './layout/Sidebar.vue';
import Navbar from './layout/Navbar.vue';

</script>
<template>
    <Head title="Todo" />

    <Navbar />

    <Sidebar />
    <div class="app-content content">
        <h1>Todo</h1>
        <p>Welcome to the Todo!</p>
    </div>
</template>