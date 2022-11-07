<template>
    <div>
        <h1 v-text="dropdownResult"></h1>

        <dropdown @update:option="optionUpdate"></dropdown>
    </div>
</template>

<script>
    import Dropdown from './../components/Dropdown.vue';
    export default {
        name: "list",

        components: {
            Dropdown,
        },

        data: function () {
          return {
              dropdownResult: '',
          }
        },
        
        methods: {
            optionUpdate: function (value) {
                this.dropdownResult = value;
            }
        }
    }
</script>

<style scoped>

</style>