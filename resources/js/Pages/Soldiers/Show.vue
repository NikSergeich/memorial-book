<template>
    <Layout>
        <Head title="Книга памяти" />



        <div class="flex flex-col space-y-4">

            <div class="max-w-screen-lg mx-auto">
                <div class="flex space-x-8">
                    <div class="">
                        <div class="w-80 aspect-w-3 aspect-h-4">
                            <img class="w-full object-cover" :src="soldier.photo || 'https://pamyat-naroda.ru/local/templates/pn/image/avatar.svg'">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 my-auto h-full w-full">
                        <div class="font-merriweather text-5xl italic tracking-wider">
                            <div>{{ soldier.last_name }}</div>
                            <div>{{ soldier.first_name }}</div>
                            <div>{{ soldier.patronymic }}</div>
                        </div>
                        <div class="text-lg">
                            <div v-if="soldier.year_of_birth && soldier.year_of_birth.length > 0">
                                Дата рождения: {{ soldier.birthday || '__' }}.{{ soldier.month_of_birth || '__' }}.{{ soldier.year_of_birth || '____' }}
                            </div>

                            <div v-if="soldier.year_of_death && soldier.year_of_death.length > 0">
                                Дата смерти: {{ soldier.death_date || '__' }}.{{ soldier.death_month || '__' }}.{{ soldier.year_of_death || '____' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div v-if="soldier.biography && soldier.biography.length > 0">
                    <h1 class="font-merriweather text-3xl italic pb-3">Биография</h1>
                    <div class="text-lg leading-relaxed text-justify flex flex-col space-y-3" v-html="soldier.biography">

                    </div>
                </div>
                <div v-else>
                    <h1 class="font-merriweather text-3xl italic pb-3">Биография</h1>
                    <div class="text-lg leading-relaxed text-justify">Сведения о биографии отсутствуют</div>
                </div>
            </div>

            <awards :items="soldier.awards"></awards>

            <gallery :items="soldier.galleries"></gallery>
        </div>
    </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"
import { Head } from '@inertiajs/inertia-vue3'
import Awards from "@/Components/Awards";
import Gallery from "@/Components/Gallery";

export default {
    components: {
        Head,
        Layout,
        Awards,
        Gallery
    },
    props: {
        soldier: Object
    },
}
</script>
