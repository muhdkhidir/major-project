<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header" v-on:click="showAlert">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            console.log('Component mounted.')
        },
        methods:{
            showAlert: function(){
                console.log('click event');
            }

        }
    }
</script>
