<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
        </div>
        <div class="mb-3">
            <input type="submit" @click.prevent="addPerson" class="btn btn-primary" value="Добавить">
        </div>
        <SomeComponent :obj="obj"></SomeComponent>
    </div>
</template>

<script>
import SomeComponent from "./SomeComponent";
export default {
    name: "CreateComponent",

    data() {
        return{
            name: null,
            age: null,
            job: null,
            obj: {
                color: 'yellow',
                number: 50,
                isPublished: false
            }
        }
    },

    mounted() {

    },

    components: {
        SomeComponent
    },

    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
            .then( res => {
                this.name = null
                this.age = null
                this.job = null
                console.log(res);
            })
        }
    }

}

</script>

<style scoped>

</style>
