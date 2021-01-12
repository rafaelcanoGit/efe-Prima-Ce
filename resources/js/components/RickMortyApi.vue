<template>
    <div class="container">
    <b-row style="background-color:#84bdff">
        <b-col cols="12" class="text-center">
            <h1>Rick and Morty API</h1>
        </b-col>
    </b-row>        
        <br>
        <b-form-input v-model="searchText" placeholder="Buscar (nombre, estado, especie, genero, origen)"></b-form-input>
        <br>
        <b-row>
        <h6>Cantidad de personajes : {{ filteredCharacters.length }}</h6>
        </b-row>
        <br>
        <b-table
                  ref="tabla"
                  id="tabla"
                  :striped="true"
                  :no-border-collapse="true"
                  :small="true"
                  :outlined="true"
                  :hover="true"
                  :items="filteredCharacters"
                  :fields="personajes"
                  responsive
                >
            <template #cell(image)="data">
               <b-img height="70" width="70" :src="data.item.image" rounded="circle" :alt="data.item.name"></b-img>
            </template>
        </b-table>

    </div>
</template>

<script>
import vuex from "vuex";
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data () {
            return {
        searchText: "",
        personajes: [
        { key: 'name', label: 'Nombre', class: 'text-center align-middle' },
        { key: 'status', label: 'Estado', class: 'text-center align-middle' },
        { key: 'species', label: 'Especie', class: 'text-center' },
        { key: 'gender', label: 'Género', class: 'text-center' },
        { key: 'origin.name', label: 'Origen', class: 'text-center' },
        { key: 'image', label: 'Imagen', class: 'text-center' }
        ],
            }
        },
        methods: {
            ...vuex.mapActions(["commitCharacters"]),
        },
        computed: {
         ...vuex.mapGetters(["getCharacters"]),
         filteredCharacters(){
            return this.getCharacters.filter((character) => {
             let filterBy = character.name+" "+ character.status+" "+ character.species+" "+ character.gender+" "+ character.origin.name;
             if (filterBy.toLowerCase().match(this.searchText.toLowerCase())) {
                return filterBy.toLowerCase().match(this.searchText.toLowerCase());
             }
           })
         }

        },
        created() {
            this.commitCharacters()
        }
    }
</script>
