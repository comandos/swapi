<template>
    <div class="row justify-content-center">
        <table class="table table-hover" id="myTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Height</th>
                <th>Mass</th>
                <th>Birth year</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="person in people" @click="showPerson(person)">
                    <td>{{ person.name }}</td>
                    <td>{{ person.height }}</td>
                    <td>{{ person.mass }}</td>
                    <td>{{ person.birth_year }}</td>
                    <td>{{ person.gender }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                people: []
            }
        },
        methods: {
            getPeople: function() {
                let vm = this;
                let apiUrl = vm.$options.parent.apiUrl;
                axios.get(apiUrl + '/people/')
                    .then(function (response) {
                        vm.people = response.data.results;
                    })
                    .catch(function (error) {

                    });
            },
            showPerson: function (person) {
                let person_id = person.url.split("/").slice(-2)[0];

                return this.$router.push({
                    name: 'details',
                    params: {
                        resource: 'people',
                        id: person_id
                    }
                });
            }
        },
        mounted: function() {
            return this.getPeople()
        }
    }
</script>

<style>
    table tbody tr {
        cursor: pointer;
    }
</style>