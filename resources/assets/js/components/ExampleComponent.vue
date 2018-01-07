<template>
    <div id="vote">

        <form method="POST" action="/posts/{{ $post->id }}/vote">

             <a class="btn" value="1"><i class="far fa-thumbs-up fa-3x"></i></a>

                <span class="label label-primary" style="font-size: 25px;">{{ $votes }}</span>

            <a class="btn" value="-1"><i class="far fa-thumbs-down fa-3x"></i></a>
            
        </form>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            console.log('something else')
        }
    }
</script>
