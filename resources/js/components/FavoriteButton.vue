<template>
    <button type="submit" :class="classes" @click="toggle">
        <span class='favorite-icon'>
            <div class='star-animation-1'></div>
            <div class='star-animation-2'></div>
        </span>
        Favorite
    </button>
</template>

<script>
    export default {

        props: ['lesson'],

        data() {
            return {
                isFavorited: this.lesson.isFavorited
            }
        },

        computed: {
            classes() {
                return ['favorite-button', this.isFavorited ? 'favorited':'not-favorited'];
            },
            endpoint() {
                return '/lesson/'+ this.lesson.id + '/favorites'
            }
        },

        methods: {
            toggle() {
                return this.isFavorited ? this.unfavorite() : this.favorite()
            },

            favorite() {
                axios.post(this.endpoint);
                this.isFavorited = true;
            },

            unfavorite() {
                axios.delete(this.endpoint);
                this.isFavorited = false;
            }
        }
    }
</script>