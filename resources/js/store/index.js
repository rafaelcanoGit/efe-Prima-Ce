import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex);

export default new Vuex.Store({

    state: {
      dominioApi: "https://rickandmortyapi.com/api/character/?page=1",
      characters: []

    },
    getters: {
      getCharacters (state) {
          return state.characters
      }
    },
    mutations: {
      setCharacters(state, data) {
        state.characters = data
      },
    },
    actions: {
      commitCharacters({ commit }) {
        axios.
          get(this.state.dominioApi)
          .then(res => {
            console.log(res)
            commit("setCharacters", res.data.results);
          }).catch(error => {
            console.log(error)
          });
      },
    },
    modules:{}

})