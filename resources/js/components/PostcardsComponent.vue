<template>
    <div class="container">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Sender</th>
                <th>Address</th>
                <th>Text</th>
                <th>Image</th>
            </tr>
            <tr v-for="postcard in postcardsList" :key="postcard.id">
                <td >{{ postcard.id }}</td>
                <td >{{ postcard.sender }}</td>
                <td >{{ postcard.address }}</td>
                <td >{{ postcard.text }}</td>
                <td >
                    <img :src="`storage/asset/${postcard.image}`" alt="" width="100px">
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        data : function() {
            return {
                postcardsList : [],
            }
        },
        mounted() {
            axios.get('/get/postcards')
            .then(r => this.postcardsList = r.data)
            .catch(e => console.error(e));

            // let res = await axios.get('/get/postcards');
            // this.postcardsList = res.data;
            // console.log(this.postcardsList);
        }
    }
</script>

<style lang="scss" scoped>
table {
    margin: 0 auto;
    th , td {
        padding: 5px 15px;
    }

    th {
        font-size: 18px;
    }
}
</style>
