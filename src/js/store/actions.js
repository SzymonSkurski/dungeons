const path = 'http://127.0.0.1:8000/';
let actions = {
    createTile({commit}, tile) {
        axios.post(path + 'tile', tile)
            .then(res => {
                commit('CREATE_TILE', res.data)
            }).catch(err => {
            console.log(err)
        })

    },
    fetchTiles({commit}) {
        axios.get(path + 'tile')
            .then(res => {
                commit('FETCH_TILES', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    deleteTile({commit}, tile) {
        axios.delete(path + `tile/${tile.id}`)
            .then(res => {
                if (res.data === 'ok')
                    commit('DELETE_TILE', tile)
            }).catch(err => {
            console.log(err)
        })
    }
}

export default actions