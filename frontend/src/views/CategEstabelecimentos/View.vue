<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>
                    Categorias de Estabelecimentos
                    <RouterLink to="/categ-estabelecimentos/create" class="btn btn-success float-end">
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
                    <tbody v-if="this.categEstabelecimentos.length > 0">
                        <tr v-for="(categEstabelecimento, index) in this.categEstabelecimentos" :key="index">
                            <td>{{ categEstabelecimento.nome }}</td>
                            <td class="text-end">
                                <RouterLink
                                    :to="{ path: '/categ-estabelecimentos/' + categEstabelecimento.id + '/edit' }"
                                    class="btn btn-primary mx-2">
                                    Editar
                                </RouterLink>
                                <button type="button" @click="excluirCategEstabelecimento(categEstabelecimento.id)"
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
    name: 'categ-estabelecimentos',
    data() {
        return {
            categEstabelecimentos: []
        }
    },
    mounted() {
        this.getCategEstabelecimentos();
    },
    methods: {
        getCategEstabelecimentos() {
            axios.get('http://127.0.0.1:8000/api/categoria-estabelecimento').then(res => {
                this.categEstabelecimentos = res.data;
                //console.log(this.categEstabelecimentos);
            });
        },

        excluirCategEstabelecimento(categId) {

            if (confirm('Deseja deletar a categoria escolhida?')) {

                axios.delete(`http://127.0.0.1:8000/api/categoria-estabelecimento/${categId}/delete`)
                    .then(res => {
                        alert(res.data.message);
                        this.getCategEstabelecimentos();
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