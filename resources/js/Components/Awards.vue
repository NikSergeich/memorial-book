<template>
    <div>
        <div
            v-if="items && items.length > 0"
            class="space-y-4"
        >
            <h1 class="font-merriweather text-3xl italic pb-3">Награды</h1>

            <div v-for="item in items" class="flex flex-row space-x-4">
                <div class="w-32 bg-indigo-50">
                    <div class="aspect-h-1 aspect-w-1">
                        <img class="w-full object-contain" :src="item.image">
                    </div>
                </div>

                <div>
                    {{ item.title }}
                </div>
            </div>

        </div>
        <div v-else>
            <h1 class="font-merriweather text-3xl italic pb-3">Награды</h1>

            <div class="text-lg leading-relaxed text-justify">Сведения о наградах отсутствуют</div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
    components: {

    },
    props: {
        items: Object
    }
})
</script>
