<template>
    <select name="dropdown" id="dropdown" @change="optionChanged" v-model="selectedOption">
        <option value="null" disabled>Select and option</option>
        <option v-for="option in dropdownOptions" :key="option.label" :value="option.value" :name="option.label">
            {{option.label}}
        </option>
        <!--<option value="Option 1">Option 1</option>-->
        <!--<option value="Option 2">Option 2</option>-->
        <!--<option value="Option 3">Option 3</option>-->
    </select>
</template>

<script>
    export default {
        name: "dropdown",

        data: function () {
          return {
              selectedOption: null,
              dropdownOptions: [
                  {'label':'label1','value':'value1'},
                  {'label':'label2','value':'value2'},
                  {'label':'label3','value':'value3'},
              ],
          }
        },

        methods: {
            optionChanged: function () {
                this.$emit('update:option', this.selectedOption);
            },
        }
    }
</script>

<style scoped>

</style>