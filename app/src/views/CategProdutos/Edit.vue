<template>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Editar Categoria de Produtos</h4>
            </div>
            <div class="card-body">

                <div class="alert alert-warning" v-if="Object.keys(this.errorList).length > 0">
                    <div class="mb-0 ms-3">
                        {{ this.errorList }}
                    </div>
                </div>

                <div class="mb-3">
                    <label for="">Nome</label>
                    <input type="text" v-model="model.categProduto.nome" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="button" @click="salvarCategoria" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'categ-produtos-edit',
    data() {
        return {
            categId: '',
            errorList: '',
            model: {
                categProduto: {
                    nome: ''
                }
            }
        }
    },
    mounted(){

        this.categId = this.$route.params.id;
        this.getCategProdutoData(this.$route.params.id);

    },
    methods: {

        getCategProdutoData(categId){
            axios.get(`http://127.0.0.1:8000/api/categoria-produto/${categId}/edit`)
            .then(res => {
                console.log(res.data);
                this.model.categProduto = res.data;
            })
        },

        salvarCategoria() {
            var mythis = this;

            axios.put(`http://127.0.0.1:8000/api/categoria-produto/${this.categId}/edit`, this.model.categProduto)
                .then(res => {                    
                    alert('Alterado com sucesso!');

                    this.errorList = '';
                    this.$router.push({ path: '/categ-produtos' });
                })
                .catch(function (error) {
                    if (error.response) {
                        // A requisição foi feita e o servidor respondeu com um código de status
                        // que sai do alcance de 2xx
                        mythis.errorList = error.response.data.message;
                    } else if (error.request) {
                        // A requisição foi feita mas nenhuma resposta foi recebida
                        // `error.request` é uma instância do XMLHttpRequest no navegador e uma instância de
                        // http.ClientRequest no node.js
                        console.error(error.request);
                    } else {
                        // Alguma coisa acontenceu ao configurar a requisição que acionou este erro.
                        console.error('Error', error.message);
                    }

                });
        }
    }

}

</script>
