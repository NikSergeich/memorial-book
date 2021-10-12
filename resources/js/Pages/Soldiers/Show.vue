<template>
    <Layout>
        <Head title="Книга памяти" />



        <div class="flex flex-col space-y-8">

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
                        <div class="text-xl">
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
                    <h1 class="font-merriweather text-3xl italic pb-2">Биография</h1>
                    <div class="text-xl leading-relaxed text-justify" v-html="soldier.biography">

                    </div>
                </div>
                <div v-else class="text-xl">
                    <h1 class="font-merriweather text-3xl italic pb-2">Биография</h1>
                    <div class="text-xl">Сведения о биографии отсутствуют</div>
                </div>
            </div>


        </div>
    </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
        Layout,
    },
    props: {
        soldier: Object
    },
}
</script>
