<template>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(value, name) of resource">
                <td>
                    {{ name }}
                </td>
                <td>
                    {{ parseValue(value) }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                resource: {}
            }
        },
        methods: {
            getResource: function() {
                let vm = this;
                let resource_id = this.$route.params.id;
                let resource = this.$route.params.resource;
                let apiUrl = vm.$options.parent.apiUrl;
                axios.get(apiUrl + '/' + resource + '/' + resource_id)
                    .then(function (response) {
                        vm.resource = response.data;
                    })
                    .catch(function (error) {

                    });
            },
            parseValue: function(value) {
                if (! value || !value.length) {
                    return '—';
                }
                //@TODO: add links to resources
                return value;
            }
        },
        beforeMount: function() {
            return this.getResource()
        }
    }
</script>
