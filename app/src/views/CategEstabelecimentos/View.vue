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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody v-if="this.categEstabelecimentos.length > 0">
                        <tr v-for="(categEstabelecimentos, index) in this.categEstabelecimentos" :key="index">
                            <td>{{ categEstabelecimentos.nome }}</td>
                            <td>                                
                                <button type="button" class="btn btn-danger float-end">
                                    Excluir
                                </button>
                                <RouterLink to="/" class="btn btn-primary float-end">
                                    Editar
                                </RouterLink>
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
        getCategEstabelecimentos(){
            axios.get('http://127.0.0.1:8000/api/categoria-estabelecimento').then(res => {
                this.categEstabelecimentos = res.data;
                //console.log(this.categEstabelecimentos);
            });
        }
    }

}

</script>