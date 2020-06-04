<template>
    <div>
        <div class="jumbotron px-0 py-4">
            <div class="container-fluid">
                <h3 class="display-3">Products List</h3>
            </div>
        </div>

        <div class="container-fluid">
           <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th class="text-right">Manage</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td><img v-bind:src="'/images/products/' + product.product_image" width="50"></td>
                    <td>{{ product.product_name }}</td>
                    <td>{{ product.product_price }}</td>
                    <td>{{ product.product_qty }}</td>
                    <td>{{ product.created_at }}</td>
                    <td>{{ product.product_status }}</td>
                    <td class="text-right">
                        <router-link :to="{ name: 'edit', params: { id: product.id }}" class="btn btn-xs btn-warning">
                            Edit
                        </router-link> &nbsp;
                        <button class="btn btn-xs btn-danger" @click.prevent="deleteProduct(product.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>


    </div>
</template>

<script>

    const urlAPI = "http://localhost/laravelspa/public/api/"
    const auth = {
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json",
            "Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjYwNTk1MGVjYjA5MzJhMzNhY2NmMjA2ODBiYjEwZjA3MDJlMjZjY2YxNWM3NTYzMjZlMTIzMjg2MGFiNDA5OGI1NDg1MWMwYmUwOWE1ODEiLCJpYXQiOjE1OTEyMTM4NDUsIm5iZiI6MTU5MTIxMzg0NSwiZXhwIjoxNjIyNzQ5ODQ1LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.IA3NXqcaxah9qopPVA0LBHtTHWI7b19VryA2VCmZPwraa96CUZEDQR76WoqA25_745CkYwl5E7o9g6FmWF4VGOuvGhvgBLEAv7EINgXd1zUgUunOpzuZgIYcWgZ_KnykvmfiPwRWoINhxUse8w6RWq3LYWjfx7-g6QH_0s3r2tDdOwK4zVcOTGFWm9lb41MR2IZwAsrVeGfUJ3zKl71SMVzPTax2XFAU_jxOKZ_C1V_V0_pP0VUlhYV78f2vq9WgegFTZqRgIldEvT74YSkf457yjTBLVqoSAyC0-Rb5biHFT2PC5gYUX3bUuyh3Ua76a-HtB9zywGXKqZAWEUhv3dQnA9wnDt_GaQxMJiVyMatcww6ZctG3j6p0nEV8F8uXO3xMajrdVZYdaRUuMA5gUbZ3NivZ9599FY2G07jQbKiZTl2Md5NctHRK6I-k72pPDldYPxRRmR_b0g5spyKTq59nJphF0tjx7tR0J11Lfx7CswbuVAkiWa0We17q4Ox7Gg0kkJ0eU8BFtil-CN-NizdP_8FO0Jb2DIH79mMj6bXEDt3YZQalQGz8v7Ku13K3Al0RHR_QnDI2Cw0X8e86-7INteZncyqj16Rir_VTbnoCjWLQ40wppqwO75FC4IWP4v80tbpJz8FRpKitA2qX2E2QuVrjbh9p_jVbFD_TqtA"    
        } 
    }

    export default {
        data() {
            return {
                products: []
            }
        },
        created(){
             const request = axios.get(urlAPI + "products", auth).then(response => {
                    console.log(response.data);
                    this.products = response.data.data
             });
        },
    }

</script>