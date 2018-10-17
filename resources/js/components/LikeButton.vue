<template>
    <button type="submit" :class="classes" @click="toggle">
        <span class='like-icon'>
            <div class='heart-animation-1'></div>
            <div class='heart-animation-2'></div>
        </span>
        {{ likesCount }} Likes
    </button>
</template>

<script>
    export default {

        props: ['lesson'],

        data() {
            return {
                likesCount: this.lesson.likesCount,
                isLiked: this.lesson.isLiked
            }
        },

        computed: {
            classes() {
                return ['like-button', this.isLiked ? 'liked':'not-liked'];
            },
            endpoint() {
                return '/lesson/'+ this.lesson.id + '/likes'
            }
        },

        methods: {

            toggle() {
                 return this.isLiked ? this.unlike() : this.like()
            },

            like() {
                axios.post(this.endpoint);
                this.isLiked = true;
                this.likesCount++;
            },

            unlike() {
                axios.delete(this.endpoint);
                this.isLiked = false;
                this.likesCount--;
            }
        }
    }
</script>
