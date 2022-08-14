<template>
    <div class="card mb-3">
        <div class="card-header">
            <router-link :to="{ name: 'Category', params: { categoryId: category.id, categoryName: category.name } }" v-text="category.name"></router-link>
        </div>
        <div class="card-body">
            {{ category.description }}
        </div>
        <div class="card-footer">
            <span>{{ category.numberOfPosts }}</span>
            <small>Chủ đề</small>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['category']
    }
</script>