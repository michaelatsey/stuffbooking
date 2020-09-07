<template>
<layout name="LayoutDefault">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard view </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </layout>
</template>

<script>
import Layout from './../../components/layouts/Layout'
export default {
    name: 'Home',
    components: {
        Layout,
    },
    mounted() {
        console.log('Component mounted.')
    }
};
</script>
