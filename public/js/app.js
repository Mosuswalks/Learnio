new Vue({
    
    el: '#vote',

    data: {

        post_id: window.location.pathname.split( '/')[2],

        votes: ''

    },

    mounted() {

        axios.get('/posts/'+this.post_id+'/votes').then(response => this.votes = response.data);

    }

})