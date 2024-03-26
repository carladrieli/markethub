<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>
                    Clientes
                    <RouterLink to="/cliente/create" class="btn btn-success float-end">
                        Adicionar
                    </RouterLink>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th>Nome</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody v-if="this.cliente.length > 0">
                        <tr v-for="(cliente, index) in this.cliente" :key="index">
                            <td>{{ cliente.nome }}</td>
                            <td class="text-end">
                                <RouterLink
                                    :to="{ path: '/cliente/' + cliente.id + '/edit' }"
                                    class="btn btn-primary mx-2">
                                    Editar
                                </RouterLink>
                                <button type="button" @click="excluirCliente(cliente.id)"
                                    class="btn btn-danger mx-2">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody v-else>
                        <tr>
                            <td colspan="2">Carregando...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'cliente',
    data() {
        return {
            cliente: []
        }
    },
    mounted() {
        this.getCliente();
    },
    methods: {
        getCliente() {
            axios.get('http://127.0.0.1:8000/api/cliente').then(res => {
                this.cliente = res.data;

            });
        },

        excluirCliente(clienteId) {

            if (confirm('Deseja deletar o Cliente escolhido?')) {

                axios.delete(`http://127.0.0.1:8000/api/cliente/${clienteId}/delete`)
                    .then(res => {
                        alert(res.data.message);
                        this.getCliente();
                    })
                    .catch(function(error) {
                        if (error.response) {
                            if(error.response.status == 404) {
                                alert(error.response.data.message);
                            }
                        }
                    });
            }

        },
    }

}

</script>