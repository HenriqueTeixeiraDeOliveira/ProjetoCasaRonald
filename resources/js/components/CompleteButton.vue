<template>
    <button type="submit" :class="classes" @click="toggle">
        <span class='complete-icon'>
            <div class='complete-animation-1'></div>
            <div class='complete-animation-2'></div>
        </span>
        Complete
    </button>
</template>

<script>
    export default {

        props: ['lesson'],

        data() {
            return {
                isCompleted: this.lesson.isCompleted
            }
        },

        computed: {
            classes() {
                return ['complete-button', this.isCompleted ? 'completed':'not-completed'];
            },
            endpoint() {
                return '/lesson/'+ this.lesson.id + '/completes'
            }
        },

        methods: {
            toggle() {
                return this.isCompleted ? this.incomplete() : this.complete()
            },

            complete() {
                axios.post(this.endpoint);
                this.isCompleted = true;
            },

            incomplete() {
                axios.delete(this.endpoint);
                this.isCompleted = false;
            }
        }
    }
</script>