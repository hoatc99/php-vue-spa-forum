<template>
    <div class="card mb-3">
        <div class="card-header">
            <router-link :to="{ name: 'Topic', params: { topicId: topic.id } }" v-text="topic.title"></router-link>
        </div>
        <div class="card-body">
            <span>by {{ topic.user.name }}</span>
            <span>{{ topic.time | fromNow }}</span>
        </div>
        <div class="card-footer">
            <span>{{ topic.views | largeNumber }}</span>
            <small>Lượt xem</small>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['topic']
    }
</script>