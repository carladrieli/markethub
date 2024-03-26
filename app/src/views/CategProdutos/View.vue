<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>
                    Categorias de Produtos
                    <RouterLink to="/categ-produtos/create" class="btn btn-success float-end">
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
                    <tbody v-if="this.categProdutos.length > 0">
                        <tr v-for="(categProduto, index) in this.categProdutos" :key="index">
                            <td>{{ categProduto.nome }}</td>
                            <td class="text-end">
                                <RouterLink
                                    :to="{ path: '/categ-produtos/' + categProduto.id + '/edit' }"
                                    class="btn btn-primary mx-2">
                                    Editar
                                </RouterLink>
                                <button type="button" @click="excluirCategProduto(categProduto.id)"
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
    name: 'categ-produtos',
    data() {
        return {
            categProdutos: []
        }
    },
    mounted() {
        this.getCategProdutos();
    },
    methods: {
        getCategProdutos() {
            axios.get('http://127.0.0.1:8000/api/categoria-produto').then(res => {
                this.categProdutos = res.data;
                //console.log(this.categEstabelecimentos);
            });
        },

        excluirCategProduto(categId) {

            if (confirm('Deseja deletar a categoria escolhida?')) {

                axios.delete(`http://127.0.0.1:8000/api/categoria-produto/${categId}/delete`)
                    .then(res => {
                        alert(res.data.message);
                        this.getCategProdutos();
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