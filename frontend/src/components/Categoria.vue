<template>
    <div>
        <!-- Formulário para adicionar um novo item -->
        <form @submit.prevent="addItem">
            <div class="mb-3">
                <label for="newItem" class="h2">Nova Categoria</label>
                <input v-model="newItem" type="text" class="form-control" id="newItem" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Item</button>
        </form>
        
        <br />

        <table class="table">
            <thead>
                <tr>
                    <th class="h2">Categorias</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="index">
                    <td>{{ item.nome }}</td>
                    <td>
                        <button class="btn btn-primary" @click="abrirModal(item)">Atualizar</button>
                        <button class="btn btn-danger" @click="deleteItem(item.id)">Deletar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal para atualizar categoria -->
        <div class="modal" id="modalAtualizar" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Atualizar Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" @click="atualizarCategoria()">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
    setup() {
        const newItem = ref('');
        const items = ref([]);

        //Buscar itens na criação do componente
        onMounted(fetchItems);

        //Adicionar um novo item
        function addItem() {
            if (newItem.value.trim() !== '') {
                axios.post('http://127.0.0.1:8000/api/categoria-estabelecimento', { nome: newItem.value })
                    .then(response => {
                        items.value.push(response.data.item);
                        newItem.value = '';
                        this.fetchItems();
                    })
                    .catch(error => {
                        console.error('Erro ao adicionar item:', error);
                    });
            }
        }

        // Buscar itens da API
        function fetchItems() {
            axios.get('http://127.0.0.1:8000/api/categoria-estabelecimento')
                .then(response => {
                    // Atualizar a lista de itens com os dados recebidos da API
                    items.value = response.data;
                })
                .catch(error => {
                    console.error('Erro ao buscar itens:', error);
                });
        }

        function abrirModal(categoria) {
            this.categoriaSelecionada = { ...categoria }; // Copia os dados da categoria selecionada para a categoriaSelecionada
            new bootstrap.Modal(document.getElementById('modalAtualizar')).show();
        }

        //Deletar item
        function deleteItem(itemId) {            
            axios.delete('http://127.0.0.1:8000/api/categoria-estabelecimento/' + itemId)
                .then(response => {
                    // Remover o item da lista após a exclusão bem-sucedida
                    this.items = this.items.filter(item => item.id !== itemId);
                    console.log('Item excluído com sucesso:', response.data);                   
                })
                .catch(error => {
                    console.error('Erro ao excluir item:', error);
                });
        }

        return {
            newItem,
            items,
            addItem,
            fetchItems,
            abrirModal,
            deleteItem
        };
    }
};
</script>

<style>
/* Adicione estilos personalizados aqui, se necessário */
</style>