<template>
    <div>
        <div v-if="items && items.length > 0">
            <h1 class="font-merriweather text-3xl italic pb-3">Фотографии</h1>

            <div class="grid grid-cols-3 gap-2">
                <div v-for="item in items">
                    <a
                        data-fancybox="gallery"
                        :data-caption="item.description"
                        :href="item.image"
                        class="block aspect-w-4 aspect-h-3"
                    >
                        <img class="w-full object-cover" :src="item.image" :alt="item.description"/>
                    </a>
                </div>
            </div>
        </div>
        <div v-else>
            <h1 class="font-merriweather text-3xl italic pb-3">Фотографии</h1>

            <div class="text-lg leading-relaxed text-justify">Фотографии отсутствуют</div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Fancybox } from "@fancyapps/ui"
import "@fancyapps/ui/dist/fancybox.css"

export default defineComponent({
    components: {
        Fancybox
    },
    mounted() {

    },
    props: {
        items: Object
    }
})
</script>
