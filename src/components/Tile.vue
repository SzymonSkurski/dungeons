<template>
    <div>
        <img @click="rotateTile" :src="'images/tiles/' + this.tile.image" v-bind:style="imgStyle"  class="cTile"/>
        <!--<span style="font-size: 2em">{{this.tile.kind + ':' + this.tile.image + ' ' + this.rOpenings}}</span>-->
    </div>
</template>

<script>
// import {mapGetters} from 'vuex'

// noinspection JSUnresolvedVariable
export default {
    name: "Tile",
    props: ['tile'],

    // components: {
    // },

    data: function () {
        return {
            rotate: 0,
        }
    },

    methods: {
        rotateTile : function () {
            this.rotate += 90;
            if (this.rotate === 360) {
                this.rotate = 0;
            }
        },
    },

    computed: {
        imgStyle () {
            // return { transform: 'rotate(' + this.rotate + 'turn)'}
            return { transform: 'rotate(' + this.rotate + 'deg)'}
        },
        rOpenings () {
            const r = (this.rotate / 90);
            // noinspection JSUnresolvedVariable
            let raw = JSON.parse(this.tile.openings) || [];
            let rotated = [];
            const l = raw.length;
            raw.forEach(function myFunction(item, index) {
                rotated[(index + r) % l] = item;
            });
            return JSON.stringify(rotated);
        }
    }
}
</script>

<style scoped>
    .cTile {
        margin-top: -6px;
    }
</style>
