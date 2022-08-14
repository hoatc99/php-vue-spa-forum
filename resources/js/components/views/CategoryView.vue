<template>
    <div>
        <h2>Các chủ đề trong danh mục {{ categoryName }}</h2>
        <topic v-for="topic in topics" :topic="topic" :key="topic.id"></topic>
        <pagination v-bind:pagination="pagination" v-on:click.native="getTopics(pagination.current_page)" :offset="4"></pagination>
    </div>
</template>

<script>
    import Topic from '../Topic.vue';
    import Pagination from '../Pagination.vue';

    export default {
        components: { Topic, Pagination },

        data () {
            return {
                topics: [],
                counter: 0,
                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1,
                },
                offset: 4,
                categoryId: this.$route.params.categoryId,
                categoryName: this.$route.params.categoryName,
            }
        },

        mounted () {
            this.getTopics(this.pagination.current_page);
        },

        methods: {
            getTopics (page) {
                axios.get(location.origin + '/api/categories/' + this.categoryId + '/topics?page=' + page)
                    .then((response) => {
                        this.topics = response.data.data;
                        this.pagination = response.data;
                    });
            }
        },

        watch: {
            topics: function () {
                let breadcrumb = this.topics[0].breadcrumb;
                breadcrumb.pop();
                this.$emit('update-breadcrumb', breadcrumb);
            }
        },
    }
</script>