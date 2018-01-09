<template>
    <div>
        <a class="btn animated tada" @click="upVote"><i class="far fa-thumbs-up fa-3x"></i></a>
                                  
            <span class="label label-primary animated flash" :votes="votes" id="voteCounter" style="font-size: 25px;">{{ votes }}</span>
            
        <a class="btn animated tada" @click="downVote"><i class="far fa-thumbs-down fa-3x"></i></a>
    </div>
</template>

<script>
    module.exports = {
        
        name: 'vote-component',
        data(){
            return { 
                post_id: window.location.pathname.split( '/')[2],
                votes: ''
             }
        },
        props: ['votes'],

        mounted() {
            this.getVote();
        },

        methods: {
            getVote() {
               axios.get('/posts/'+this.post_id+'/votes').then(response => this.votes = response.data);
            },

            upVote() {
                axios.post('/posts/'+ this.post_id +'/upvote').then(response => console.log(response.request.status));
                this.getVote();
            },

            downVote() {
                axios.post('/posts/'+ this.post_id +'/downvote').then(response => console.log(response.request.statusText));
                this.getVote();
            },
        },

    
    }

</script>
