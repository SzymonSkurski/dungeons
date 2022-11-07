<template>
    <div>
        <h1>Tiles</h1>
        <tile v-for="tile in this.tiles.tiles" :key="tile.id" :tile="tile"></tile>
    </div>

</template>?

<script>
    import {mapGetters} from 'vuex';
    import Tile from './Tile';

    export default {
        name: "Tiles",
        mounted() {
            this.$store.dispatch('fetchTiles')
        },
        methods: {
            deleteTile(tile) {
                this.$store.dispatch('deleteTile', tile)
            },
            logTiles() {
              console.log(this.tiles.tiles);
            },
        },
        computed: {
            ...mapGetters([
                'tiles'
            ]),
        },
        components: {
            Tile,
        },
        data: function () {
            return {
                test: [
                    {item: 'a'},
                    {item: 'b'},
                    {item: 'c'},
                    ],
            }
        }
    }
</script>
<style scoped>

</style>