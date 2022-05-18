<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",

    data: function () {
        return{
            name: 'Vasya',
            age: 20,
            boolean: false,
            someNull: null,
            arr: [

            ]

        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
